<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\WelcomeNote;
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
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WelcomeNoteResource\Pages;
use App\Filament\Resources\WelcomeNoteResource\RelationManagers;

class WelcomeNoteResource extends Resource
{
    protected static ?string $model = WelcomeNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // name to be used in navigation
    protected static ?string $navigationLabel = 'Welcome Note';

    // position of the resource in navigation
    protected static ?int $navigationSort = 2;

    // name to be used in page titles
    protected static ?string $modelLabel = 'Welcome Note';

    // navigation group to be used in navigation
    protected static ?string $navigationGroup = 'Home Contents';

    // slug to be used in route names abd urls
    protected static ?string $slug = 'welcome_note';

    // multiple fields global search with annotation
    public static function getGloballySearchableAttributes(): array
    {
        return ['en_status', 'sw_status'];
    }

    // global search result
    public static function getGlobalSearchResultTitle(Model $record): string | Htmlable
    {
        return $record->sw_status;
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
                                        TextInput::make('sw_status')
                                            ->label('Cheo')
                                            ->required(),

                                        MarkdownEditor::make('sw_description')
                                            ->disableToolbarButtons([
                                                'attachFiles',
                                            ])
                                            ->label('Maelezo')
                                            ->required(),

                                    ]),

                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('en_status')
                                            ->label('Status')
                                            ->required(),

                                        TextInput::make('slug')
                                            ->required()
                                            ->disabled()
                                            ->dehydrated()
                                            // ->hidden()
                                            ->unique(WelcomeNote::class, 'slug', ignoreRecord: true),

                                        MarkdownEditor::make('en_description')
                                            ->disableToolbarButtons([
                                                'attachFiles',
                                            ])
                                            ->label('Description')
                                            ->required(),

                                    ])

                            ])->activeTab(1)->columnSpanFull()

                    ]),

                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                                === 'create' ? $set('slug', Str::slug($state)) : null),

                        FileUpload::make('image')
                            ->image()
                            ->directory('welcome_notes')
                            ->columnSpanFull(),
                    ]),
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
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label("Name")
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('image')
                    ->searchable()
                    ->html()
                    ->formatStateUsing(function ($state) {
                        return '<img src="' . asset('storage/welcome_notes/' . basename($state)) . '" width="30", height="40" />';
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
            'index' => Pages\ListWelcomeNotes::route('/'),
            'create' => Pages\CreateWelcomeNote::route('/create'),
            'edit' => Pages\EditWelcomeNote::route('/{record}/edit'),
        ];
    }
}
