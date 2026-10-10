<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageSettings extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAdjustmentsHorizontal;

    protected static ?string $navigationLabel = 'Settings';

    protected static ?string $title = 'Website Settings';

    protected static ?int $navigationSort = 10;

    protected string $view = 'filament.pages.manage-settings';

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $settings = Setting::getAllSettings();

        $this->form->fill($settings);
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('SettingsTabs')
                    ->tabs([
                        Tab::make('Contact Details')
                            ->schema([
                                Section::make('Phone Numbers & WhatsApp')
                                    ->description('Configure primary phone, raw click-to-call number, alternate helpline, and WhatsApp number.')
                                    ->schema([
                                        TextInput::make('phone')
                                            ->label('Primary Phone Number')
                                            ->placeholder('+91 98765 43210')
                                            ->helperText('Displayed on the announcement bar, header desk, contact section, and footer.'),

                                        TextInput::make('phone_raw')
                                            ->label('Raw Phone Number (Click-to-Call)')
                                            ->placeholder('+919876543210')
                                            ->helperText('Used for tel: links without formatting or spaces.'),

                                        TextInput::make('alternate_phone')
                                            ->label('Alternate / Secondary Phone')
                                            ->placeholder('+91 98765 43211')
                                            ->helperText('Optional secondary helpline for customer orders.'),

                                        TextInput::make('whatsapp_number')
                                            ->label('WhatsApp Number (Digits with Country Code)')
                                            ->placeholder('919876543210')
                                            ->helperText('Used for floating WhatsApp button, inquiry forms, and catalog quick-orders.'),
                                    ])
                                    ->columns(2),

                                Section::make('Email Addresses & Plant Address')
                                    ->description('Official corporate and customer support email addresses along with physical facility location.')
                                    ->schema([
                                        TextInput::make('email')
                                            ->label('Official Email Address')
                                            ->email()
                                            ->placeholder('info@velorapure.com')
                                            ->helperText('Main correspondence email displayed across headers and contact forms.'),

                                        TextInput::make('support_email')
                                            ->label('Support / Commercial Email')
                                            ->email()
                                            ->placeholder('support@velorapure.com')
                                            ->helperText('Optional secondary email for commercial orders.'),

                                        Textarea::make('address')
                                            ->label('Office / Bottling Facility Address')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->placeholder('Industrial Area, Bottling Plant Boulevard, VELORA Hydration Facility')
                                            ->helperText('Physical premises address shown in contact sections and footer.'),
                                    ])
                                    ->columns(2),

                                Section::make('Regulatory & Compliance')
                                    ->description('Official licenses and facility certifications.')
                                    ->schema([
                                        TextInput::make('fssai_license')
                                            ->label('FSSAI License Number')
                                            ->placeholder('10020011000123')
                                            ->helperText('Official Food Safety and Standards Authority of India license code.'),

                                        TextInput::make('plant_certifications')
                                            ->label('Plant Certifications Badge Text')
                                            ->placeholder('FSSAI Lic. • BIS IS 14543 • ISO 22000 & 9001')
                                            ->columnSpanFull()
                                            ->helperText('Compliance badge displayed in announcement bar, badges, and footer copyright bar.'),
                                    ]),
                            ]),

                        Tab::make('Social Media Links')
                            ->schema([
                                Section::make('Social Media Profiles')
                                    ->description('Links to official brand profiles. If left blank, the respective channel will automatically not be shown.')
                                    ->schema([
                                        TextInput::make('facebook')
                                            ->label('Facebook Profile / Page URL')
                                            ->url()
                                            ->placeholder('https://facebook.com/velorapure'),

                                        TextInput::make('instagram')
                                            ->label('Instagram Profile URL')
                                            ->url()
                                            ->placeholder('https://www.instagram.com/velorapure'),

                                        TextInput::make('instagram_handle')
                                            ->label('Instagram Handle (@username)')
                                            ->placeholder('@velorapure'),

                                        TextInput::make('linkedin')
                                            ->label('LinkedIn Profile / Company URL')
                                            ->url()
                                            ->placeholder('https://linkedin.com/company/velorapure'),

                                        TextInput::make('youtube')
                                            ->label('YouTube Channel URL')
                                            ->url()
                                            ->placeholder('https://youtube.com/@velorapure'),

                                        TextInput::make('x')
                                            ->label('X (formerly Twitter) URL')
                                            ->url()
                                            ->placeholder('https://x.com/velorapure'),
                                    ])
                                    ->columns(2),
                            ]),

                        Tab::make('General Website Information')
                            ->schema([
                                Section::make('General Information & Copyright')
                                    ->description('Website name, brand slogan, and copyright notice.')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Brand / Website Name')
                                            ->placeholder('VELORA PURE')
                                            ->helperText('Primary brand name.'),

                                        TextInput::make('tagline')
                                            ->label('Brand Tagline / Slogan')
                                            ->placeholder('PURE BY NATURE 💧 TRUSTED WORLDWIDE')
                                            ->columnSpanFull()
                                            ->helperText('Hero banner and brand motto.'),

                                        TextInput::make('copyright_text')
                                            ->label('Footer Copyright Notice')
                                            ->placeholder('© ' . date('Y') . ' VELORA PURE. All Rights Reserved.')
                                            ->columnSpanFull()
                                            ->helperText('Custom copyright text displayed at the base of the site.'),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([EmbeddedSchema::make('form')])
                    ->id('form')
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make($this->getFormActions())
                            ->key('form-actions'),
                    ]),
            ]);
    }

    /**
     * @return array<Action>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->submit('save')
                ->keyBindings(['mod+s']),
        ];
    }

    public function save(): void
    {
        $state = $this->form->getState();

        foreach ($state as $key => $value) {
            Setting::set($key, $value);
        }

        Notification::make()
            ->title('Settings updated successfully!')
            ->success()
            ->send();
    }
}
