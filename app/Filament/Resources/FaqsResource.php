<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\faqs;
use Filament\Tables;
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
use App\Filament\Resources\FaqsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FaqsResource\RelationManagers;

class FaqsResource extends Resource
{
    protected static ?string $model = faqs::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    // name to be used in navigation
    protected static ?string $navigationLabel = 'FAQs';

    // position of the resource in navigation
    protected static ?int $navigationSort = 1;

    // name to be used in page titles
    protected static ?string $modelLabel = 'FAQ';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'Miscellaneous';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'faqs';

    // multiple fields global search with annotation
    public static function getGloballySearchableAttributes(): array
    {
        return ['en_question', 'sw_question'];
    }

    // global search result
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return $record->sw_question;
    }

    // limit global search results
    protected static int $globalSearchResultsLimit = 20;

    // navigation badge count
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    // navigation badge color
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'success' : 'warning';
    }

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
                                        TextInput::make('sw_question')
                                            ->required()
                                            ->label('Swali')
                                            ->maxlength(255),

                                        Textarea::make('sw_answer')
                                            ->required()
                                            ->label('Jibu')
                                        // ->maxlength(555)
                                        ,

                                    ]),

                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('en_question')
                                            ->required()
                                            ->maxlength(255)
                                            ->label('Question')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                        TextInput::make('slug')
                                            ->required()
                                            ->maxlength(255)
                                            ->disabled()
                                            ->dehydrated()
                                            // ->hidden()
                                            ->unique(faqs::class, 'slug', ignoreRecord: true),

                                        Textarea::make('en_answer')
                                            ->required()
                                            ->label('Answer'),

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

                Tables\Columns\TextColumn::make('sw_question')
                    ->searchable()
                    ->label('Swahili Question')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('en_question')
                    ->searchable()
                    ->label('English Question')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('sw_answer')
                    ->searchable()
                    ->label('Swahili Answer')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('en_answer')
                    ->searchable()
                    ->label('English Answer')
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaqs::route('/create'),
            'edit' => Pages\EditFaqs::route('/{record}/edit'),
        ];
    }
}