<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\FormCategory;
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
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FormCategoryResource\Pages;
use App\Filament\Resources\FormCategoryResource\RelationManagers;

class FormCategoryResource extends Resource
{
    protected static ?string $model = FormCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    // name to be used in navigation
    protected static ?string $navigationLabel = 'Form categories';

    // position of the resource in navigation
    protected static ?int $navigationSort = 1;

    // name to be used in page titles
    protected static ?string $modelLabel = 'Form category';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'WMA Forms';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'form_categories';

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
                                            ->label('Kichwa cha habari')
                                            ->required()
                                            ->maxlength(255),

                                        Textarea::make('sw_detail')
                                            ->required()
                                            ->label('Maelezo')
                                        // ->maxlength(255)
                                        ,

                                    ]),

                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('en_title')
                                            ->label('Title')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                                                === 'create' ? $set('slug', Str::slug($state)) : null),

                                        TextInput::make('slug')
                                            ->required()
                                            ->disabled()
                                            ->dehydrated()
                                            // ->hidden()
                                            ->unique(FormCategory::class, 'slug', ignoreRecord: true),

                                        Textarea::make('en_detail')
                                            ->label('Description')
                                            ->required()
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
            'index' => Pages\ListFormCategories::route('/'),
            'create' => Pages\CreateFormCategory::route('/create'),
            'edit' => Pages\EditFormCategory::route('/{record}/edit'),
        ];
    }
}