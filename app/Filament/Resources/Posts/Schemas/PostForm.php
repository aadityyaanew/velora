<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
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

                        Select::make('category')
                            ->options([
                                'Hydration & Health' => 'Hydration & Health',
                                'Water Quality' => 'Water Quality',
                                'Industry & B2B' => 'Industry & B2B',
                                'Company News' => 'Company News',
                                'Sustainability' => 'Sustainability',
                            ])
                            ->default('Hydration & Health')
                            ->required(),

                        TextInput::make('author_name')
                            ->default('Velora Pure Editorial')
                            ->required()
                            ->maxLength(255),

                        FileUpload::make('featured_image')
                            ->image()
                            ->disk('public')
                            ->directory('blog')
                            ->imageResizeMode('cover')
                            ->columnSpanFull(),

                        Textarea::make('excerpt')
                            ->label('Short Excerpt')
                            ->rows(3)
                            ->helperText('A brief summary displayed on the blog card listings.')
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->required()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('blog/attachments')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Publication')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Published')
                            ->default(true),

                        DateTimePicker::make('published_at')
                            ->label('Publish Date')
                            ->default(now()),
                    ])
                    ->columns(2),
            ]);
    }
}
