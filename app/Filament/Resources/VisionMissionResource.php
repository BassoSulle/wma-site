<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisionMissionResource\Pages;
use App\Filament\Resources\VisionMissionResource\RelationManagers;
use App\Models\VisionMission;
use Filament\Forms;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use App\Models\Announcements;
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
use Filament\Forms\Components\Placeholder;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\MarkdownEditor;

class VisionMissionResource extends Resource
{
    protected static ?string $model = VisionMission::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

     // name to be used in navigation
     protected static ?string $navigationLabel = 'Vision and Mission';

     // position of the resource in navigation
     protected static ?int $navigationSort = 3;

     // name to be used in page titles
     protected static ?string $modelLabel = 'VisionMission';

     // navigation group to be used in navigation
     protected static ?string $navigationGroup = 'Home Contents';

     // slug to be used in route names abd urls
     protected static ?string $slug = 'vision_missions';

     // multiple fields global search with annotation
     public static function getGloballySearchableAttributes(): array
     {
         return ['en_vision', 'sw_vision'];
     }

     // global search result
     public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
     {
         return $record->sw_vision;
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
                                        MarkdownEditor::make('sw_vision')
                                            ->disableToolbarButtons([
                                                'attachFiles',
                                            ])
                                            ->label('Dira')
                                            ->required(),

                                        MarkdownEditor::make('sw_mission')
                                            ->disableToolbarButtons([
                                                'attachFiles',
                                            ])
                                            ->label('Dhamira')
                                            ->required()
                                    ]),

                                Tabs\Tab::make('English')
                                    ->schema([
                                        MarkdownEditor::make('en_vision')
                                        ->disableToolbarButtons([
                                            'attachFiles',
                                        ])
                                        ->label('Vision')
                                        ->required()
                                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),


                                        MarkdownEditor::make('en_mission')
                                            ->disableToolbarButtons([
                                                'attachFiles',
                                            ])
                                            ->label('Mission')
                                            ->required(),

                                        TextInput::make('slug')
                                            ->required()
                                            ->disabled()
                                            ->dehydrated()
                                            // ->hidden()
                                            ->unique(VisionMission::class, 'slug', ignoreRecord: true),



                                    ])

                            ])->activeTab(1)->columnSpanFull()

                    ]),

                Section::make()
                    ->schema([
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
                Tables\Columns\TextColumn::make('sw_vision')
                    ->label("Swahili Vision")
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('sw_mission')
                    ->label("Swahili Mission")
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListVisionMissions::route('/'),
            'create' => Pages\CreateVisionMission::route('/create'),
            'edit' => Pages\EditVisionMission::route('/{record}/edit'),
        ];
    }
}
