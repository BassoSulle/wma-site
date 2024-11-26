<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Photos;
use App\Models\Gallery;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
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
use App\Filament\Resources\PhotosResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PhotosResource\RelationManagers;

class PhotosResource extends Resource
{
    protected static ?string $model = Photos::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    // name to be used in navigation
    protected static ?string $navigationLabel = 'Photos';

    // position of the resource in navigation
    protected static ?int $navigationSort = 2;

    // name to be used in page titles
    protected static ?string $modelLabel = 'Photo';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'Media Center';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'photos';

    // multiple fields global search with annotation
    public static function getGloballySearchableAttributes(): array
    {
        return ['en_caption', 'sw_caption'];
    }

    // global search result
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return $record->sw_caption;
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
                        Select::make('gallery_id')
                            ->label('Gallery')
                            ->options(Gallery::all()->pluck('en_title', 'id')) // Assuming 'name' is the display field and 'id' is the value field
                            ->required(),

                        FileUpload::make('image')
                            ->image()
                            ->label('Photo')
                            ->directory('photos'),
                    ]),

                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Swahili')
                            ->schema([
                                Textarea::make('sw_caption')
                                    ->label("Caption")
                                    ->required()
                                    ->maxlength(255),
                            ]),

                        Tabs\Tab::make('English')
                            ->schema([
                                Textarea::make('en_caption')
                                    ->label("Caption")
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                                        === 'create' ? $set('slug', Str::slug($state)) : null),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxlength(255)
                                    ->disabled()
                                    ->dehydrated()
                                    // ->hidden()
                                    ->unique(Photos::class, 'slug', ignoreRecord: true),
                            ])

                    ])->activeTab(1)->columnSpanFull(),

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
                Tables\Columns\TextColumn::make('image')
                    ->searchable()
                    ->html()
                    ->formatStateUsing(function ($state) {
                        return '<img src="' . asset('storage/photos/' . basename($state)) . '" width="30", height="40" />';
                    }),

                Tables\Columns\TextColumn::make('sw_caption')
                    ->label("Swahili Caption")
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('en_caption')
                    ->label("English Caption")
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('gallery.en_title')
                    ->label('Gallery')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('gallery', function (Builder $query) use ($search) {
                            $query->where('en_title', 'like', "%{$search}%");
                        });
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
            'index' => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhotos::route('/create'),
            'edit' => Pages\EditPhotos::route('/{record}/edit'),
        ];
    }
}
