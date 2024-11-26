<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Video;
use App\Models\Gallery;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Livewire\Attributes\Computed;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Group;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Validation\ValidationException;
use App\Filament\Resources\VideoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VideoResource\RelationManagers;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    // name to be used in navigation
    protected static ?string $navigationLabel = 'Videos';

    // position of the resource in navigation
    protected static ?int $navigationSort = 3;

    // name to be used in page titles
    protected static ?string $modelLabel = 'Video';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'Media Center';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'videos';

    // multiple fields global search with annotation
    public static function getGloballySearchableAttributes(): array
    {
        return ['en_title', 'sw_title'];
    }

    // global search result
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return $record->sw_title;
    }

    // limit global search results
    protected static int $globalSearchResultsLimit = 20;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->description("Fill all required fields on both tabs")
                    ->schema([
                        Tabs::make('Tabs')
                            ->tabs([
                                Tabs\Tab::make('Swahili')
                                    ->schema([
                                        TextInput::make('sw_title')
                                            ->required()
                                            ->label('Title'),

                                        Textarea::make('sw_content')
                                            ->required()
                                            ->label('Description'),
                                    ]),

                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('en_title')
                                            ->required()
                                            ->maxlength(255)
                                            ->label('Title')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                                                === 'create' ? $set('slug', Str::slug($state)) : null),

                                        TextInput::make('slug')
                                            ->required()
                                            ->disabled()
                                            ->dehydrated()
                                            // ->hidden()
                                            ->unique(Video::class, 'slug', ignoreRecord: true),

                                        Textarea::make(name: 'en_content')
                                            ->label('Description')
                                            ->required()
                                            ->maxlength(255),

                                    ])

                            ])->activeTab(1)->columnSpanFull(),
                    ]),

                Section::make()
                    ->description("Upload video or Add video Link")
                    ->schema([
                        FileUpload::make('video')
                            ->label('Video')
                            ->live()
                            ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mkv'])
                            ->directory('videos')
                            ->required(fn(Get $get): bool => empty($get('url'))) // Require if 'url' is empty,
                            ->visible(fn(Get $get): bool => empty($get('url'))), // Visible if 'url' is empty,

                        TextInput::make('url')
                            ->label('Video Link')
                            ->live()
                            ->required(fn(Get $get): bool => empty($get('video'))) // Require if 'video' is empty
                            ->visible(fn(Get $get): bool => empty($get('video'))) // Visible if 'video' is empty
                            ->type('url'),
                    ]),

                Section::make()
                    ->schema([
                        DatePicker::make('created_at')
                            ->nullable()
                            ->columnSpanFull(),

                        Hidden::make('created_by')
                            ->default(fn() => Auth::id()),

                        Placeholder::make('created_by_name')
                            ->label('Created By')
                            ->content(fn() => Auth::user()->name),

                        Toggle::make('is_active')
                            ->required()
                            ->default(true)
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('video')
                    ->searchable()
                    ->html()
                    ->formatStateUsing(function ($state) {
                        $videoUrl = asset('storage/video/' . basename($state));
                        return '<a href="' . $videoUrl . '" target="_blank">
                                <video width="100" height="60" controls>
                                    <source src="' . $videoUrl . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>';
                    }),

                Tables\Columns\TextColumn::make('sw_title')
                    ->searchable()
                    ->label('Swahili Title')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('en_title')
                    ->searchable()
                    ->label('English Title')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('Created By')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('user', function (Builder $query) use ($search) {
                            $query->where('name', 'like', "%{$search}%");
                        });
                    }),

                IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('primary')
                    ->falseColor('danger'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
