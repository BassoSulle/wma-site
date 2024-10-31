<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\RegionOffices;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
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
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegionOfficesResource\Pages;
use App\Filament\Resources\RegionOfficesResource\RelationManagers;


class RegionOfficesResource extends Resource
{
    protected static ?string $model = RegionOffices::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    // name to be used in navigation
    protected static ?string $navigationLabel = 'Region offices';

    // position of the resource in navigation
    protected static ?int $navigationSort = 1;

    // name to be used in page titles
    protected static ?string $modelLabel = 'Region office';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'Opportunities & Locations';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'region_offices';

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
                Section::make([
                    Grid::make()
                        ->schema([
                            TextInput::make('region_name')
                                ->required()
                                ->maxlength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),



                            TextInput::make('slug')
                                ->required()
                                ->maxlength(255)
                                ->disabled()
                                ->dehydrated()
                                ->unique(RegionOffices::class, 'slug', ignoreRecord: true),

                            Textarea::make('en_content')
                                ->required()
                                ->label('English Content'),

                            Textarea::make('sw_content')
                                ->required()
                                ->label('Swahili Content'),

                            TextInput::make('location')
                                ->required()
                                ->label('Location')
                                ->maxlength(255),

                            TextInput::make('address')
                                ->required()
                                ->label('Adress')
                                ->maxlength(255),

                            TextInput::make('fax')
                                ->required()
                                ->label('Fax')
                                ->maxlength(255),

                            TextInput::make('telephone')
                                ->required()
                                ->label('Phone number')
                                ->maxlength(255),

                            TextInput::make('email')
                                ->required()
                                ->label('Email')
                                ->maxlength(255),

                            DatePicker::make('created_at')
                                ->nullable(),

                            Hidden::make('created_by')
                                ->default(fn() => Auth::id()),

                            Placeholder::make('created_by_name')
                                ->label('Created By')
                                ->content(fn() => Auth::user()->name),

                            Toggle::make('is_active')
                                ->required()
                                ->default(true)

                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('region_name')
                    ->searchable()
                    ->label('Region Name')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('location')
                    ->searchable()
                    ->label('Location')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('address')
                    ->searchable()
                    ->label('Address')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('fax')
                    ->searchable()
                    ->label('Fax')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('telephone')
                    ->searchable()
                    ->label('Phone number')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->label('Email')
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
            'index' => Pages\ListRegionOffices::route('/'),
            'create' => Pages\CreateRegionOffices::route('/create'),
            'edit' => Pages\EditRegionOffices::route('/{record}/edit'),
        ];
    }
}
