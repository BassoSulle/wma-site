<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostersResource\Pages;
use App\Filament\Resources\PostersResource\RelationManagers;
use App\Models\Posters;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Tabs;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Illuminate\Contracts\Support\Htmlable;

class PostersResource extends Resource
{
    protected static ?string $model = Posters::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // name to be used in navigation
    protected static ?string $navigationLabel = 'Posters';

    // position of the resource in navigation
    protected static ?int $navigationSort = 9;

    // name to be used in page titles
    protected static ?string $modelLabel = 'Posters';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'Media Center';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'posters';

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
                                        ->label('kichwa cha Jarida'),

                                    FileUpload::make('sw_file')
                                        ->label('Hati ya PDF')
                                        ->required()
                                        ->directory('posters/sw')
                                        ->acceptedFileTypes(['application/pdf'])
                                ]),

                            Tabs\Tab::make('English')
                                ->schema([
                                    TextInput::make('en_title')
                                        ->required()
                                        ->label('Title')
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                                                 === 'create' ? $set('slug', Str::slug($state)) : null),

                                        TextInput::make('slug')
                                        ->required()
                                        ->disabled()
                                        ->dehydrated()
                                        // ->hidden()
                                        ->unique(Posters::class, 'slug', ignoreRecord: true),


                                    FileUpload::make('en_file')
                                        ->label('PDF Document')
                                        ->required()
                                        ->directory('posters/en')
                                        ->acceptedFileTypes(['application/pdf']),
                                ])

                        ])->activeTab(1)->columnSpanFull()

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
                Tables\Columns\TextColumn::make('sw_file')
                ->searchable()
                ->label('Swahili File')
                ->formatStateUsing(fn($state) => $state ? '<a href="' . Storage::url($state) . '" target="_blank" class="text-blue-500 hover:underline">Download</a>' : 'No File')
                ->html(),

            Tables\Columns\TextColumn::make('en_title')
                ->searchable()
                ->label('English Title')
                ->formatStateUsing(function ($state) {
                    return Str::words($state, 5, '.....');
                }),

            Tables\Columns\TextColumn::make('sw_file')
                ->searchable()
                ->label('Swahili File')
                ->formatStateUsing(fn($state) => $state ? '<a href="' . Storage::url($state) . '" target="_blank" class="text-blue-500 hover:underline">Download</a>' : 'No File')
                ->html(),

            Tables\Columns\TextColumn::make('en_file')
                ->searchable()
                ->label('English File')
                ->formatStateUsing(fn($state) => $state ? '<a href="' . Storage::url($state) . '" target="_blank" class="text-blue-500 hover:underline">Download</a>' : 'No File')
                ->html(),

            Tables\Columns\TextColumn::make('user.name')
                ->label('Created By')
                ->searchable(query: function (Builder $query, string $search): Builder {
                    return $query->whereHas('user', function (Builder $query) use ($search) {
                        $query->where('name', 'like', "%{$search}%");
                    });
                }),

            Tables\Columns\IconColumn::make('is_active')
                ->boolean(),

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
            'index' => Pages\ListPosters::route('/'),
            'create' => Pages\CreatePosters::route('/create'),
            'edit' => Pages\EditPosters::route('/{record}/edit'),
        ];
    }
}
