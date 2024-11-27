<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Events;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Illuminate\Contracts\Support\Htmlable;
use App\Filament\Resources\EventsResource\Pages;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    // name to be used in navigation
    protected static ?string $navigationLabel = 'Events';

    // position of the resource in navigation
    protected static ?int $navigationSort = 2;

    // name to be used in page titles
    protected static ?string $modelLabel = 'Event';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'Information Hub';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'events';

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

                                        Textarea::make('sw_description')
                                            ->label('Maelezo')
                                            ->required()
                                        // ->maxlength(255)
                                        ,

                                        TextInput::make('sw_audience')
                                            ->label('Hadhira')
                                            ->required(),
                                    ]),
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('en_title')
                                            ->label('Title')
                                            ->required()
                                            ->maxlength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                                                === 'create' ? $set('slug', Str::slug($state)) : null),

                                        TextInput::make('slug')
                                            ->required()
                                            ->maxlength(255)
                                            ->disabled()
                                            ->dehydrated()
                                            // ->hidden()
                                            ->unique(Events::class, 'slug', ignoreRecord: true),

                                        Textarea::make('en_description')
                                            ->label('Description')
                                            ->required()
                                        // ->maxlength(255)
                                        ,

                                        TextInput::make('en_audience')
                                            ->label('Audience')
                                            ->required(),
                                    ])
                            ])->activeTab(1)->columnSpanFull()
                    ]),
                Section::make()
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('events')
                            ->columnSpanFull(),

                        TextInput::make('location')
                            ->required(),

                        TimePicker::make('event_time')
                            ->required()
                            ->label('Event Time')
                            ->format('H:i') // Time format (24-hour format)
                            ->nullable(),

                        DatePicker::make('start_date')
                            ->required()
                            ->label('Start Date')
                            ->format('Y-m-d')
                            ->nullable(),

                        DatePicker::make('end_date')
                            ->required()
                            ->label('End Date')
                            ->format('Y-m-d')
                            ->nullable(),

                        DatePicker::make('created_at')
                            ->nullable()
                            ->columnSpanFull(),

                        Placeholder::make('created_by_name')
                            ->label('Created By')
                            ->content(fn() => Auth::user()->name),

                        Hidden::make('created_by')
                            ->default(fn() => Auth::id()),

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
                        return '<img src="' . asset('storage/events/' . basename($state)) . '" width="30", height="40" />';
                    }),

                Tables\Columns\TextColumn::make('sw_title')
                    ->label("Swahili title")
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('en_title')
                    ->label("English title")
                    ->searchable()
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvents::route('/create'),
            'edit' => Pages\EditEvents::route('/{record}/edit'),
        ];
    }
}