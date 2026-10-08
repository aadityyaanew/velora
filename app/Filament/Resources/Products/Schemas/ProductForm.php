<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        TextInput::make('name')
                            ->label('Product Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g. VELORA Dining Standard')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, callable $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        TextInput::make('size')
                            ->label('Volume / Size')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('e.g. 1 LITER or 500 ML'),

                        Select::make('category')
                            ->options([
                                'Personal & Events' => 'Personal & Events',
                                'Dining & Athletic' => 'Dining & Athletic',
                                'Bulk & Dispenser' => 'Bulk & Dispenser',
                                'Alkaline Water' => 'Alkaline Water',
                                'Packaged Drinking Water' => 'Packaged Drinking Water',
                            ])
                            ->default('Packaged Drinking Water')
                            ->required(),

                        TextInput::make('badge')
                            ->label('Badge / Label')
                            ->maxLength(100)
                            ->placeholder('e.g. Signature Format, Boutique & Aviation'),

                        TextInput::make('tagline')
                            ->label('Tagline')
                            ->maxLength(255)
                            ->placeholder('e.g. The Gold Standard for Tables & Restaurants'),

                        TextInput::make('price')
                            ->label('Indicative Price (₹)')
                            ->numeric()
                            ->prefix('₹')
                            ->nullable()
                            ->helperText('Optional retail or reference rate.'),

                        TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers display first.'),
                    ])
                    ->columns(2),

                Section::make('Visuals & Media')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Product Bottle / Packaging Image')
                            ->image()
                            ->disk('public')
                            ->directory('products')
                            ->imageResizeMode('cover')
                            ->columnSpanFull()
                            ->helperText('Upload a clean transparent PNG or high-res JPG of the bottle/container.'),

                        Textarea::make('description')
                            ->label('Product Description')
                            ->rows(4)
                            ->columnSpanFull()
                            ->placeholder('Describe the purity specifications, cleanroom bottling, ergonomic grip, and usage scenarios.'),
                    ]),

                Section::make('Technical Specifications & Inquiries')
                    ->schema([
                        KeyValue::make('specs')
                            ->label('Product Specifications')
                            ->keyLabel('Specification')
                            ->valueLabel('Detail')
                            ->helperText('e.g. Packaging: BPA-Free Food Grade PET, Cap Type: Aura-Sealed Safety Cap, Carton Size: 24 Units')
                            ->columnSpanFull(),

                        TextInput::make('whatsapp_text')
                            ->label('WhatsApp Enquiry Template')
                            ->maxLength(255)
                            ->placeholder('Hi Velora Pure, I would like to enquire about bulk supply for this format.')
                            ->columnSpanFull()
                            ->helperText('Pre-filled message when customers click "Enquire via WhatsApp".'),
                    ]),

                Section::make('Status & Visibility')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active on Website')
                            ->default(true)
                            ->helperText('Visible on public products catalog.'),

                        Toggle::make('is_featured')
                            ->label('Mark as Signature / Featured SKU')
                            ->default(false)
                            ->helperText('Highlights this product with signature badge styling.'),
                    ])
                    ->columns(2),
            ]);
    }
}
