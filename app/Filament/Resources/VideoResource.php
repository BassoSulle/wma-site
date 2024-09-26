<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Video;
use App\Models\Gallery;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
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
                Section::make([
                    Grid::make()
                        ->schema([
                            TextInput::make('en_title')
                                ->required()
                                ->maxlength(255)
                                ->label('English Title')
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                                    === 'create' ? $set('slug', Str::slug($state)) : null),


                            TextInput::make('sw_title')
                                ->required()
                                ->label('Swahili Title')
                                ->maxlength(255),


                            Textarea::make('en_content')
                                ->required()
                                ->label('English Content')
                                ->maxlength(255),


                            Textarea::make('sw_content')
                                ->required()
                                ->label('Swahili Content')
                                ->maxlength(255),

                            FileUpload::make('video')
                                ->label('Insert VIdeo')
                                ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mkv'])
                                ->directory('vodeo'),

                            TextInput::make('url')
                                ->label('Video URL')
                                ->required()
                                ->maxlength(255),


                            DatePicker::make('created_at')
                                ->nullable(),

                            Hidden::make('created_by')
                                ->default(fn() => Auth::id()),

                            Placeholder::make('created_by_name')
                                ->label('Created By')
                                ->content(fn() => Auth::user()->name),

                            TextInput::make('slug')
                                ->required()
                                ->maxlength(255)
                                ->disabled()
                                ->dehydrated()
                                ->unique(Video::class, 'slug', ignoreRecord: true),


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
                Tables\Columns\TextColumn::make('en_title')
                    ->searchable()
                    ->label('English Title')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

                Tables\Columns\TextColumn::make('sw_title')
                    ->searchable()
                    ->label('Swahili Title')
                    ->formatStateUsing(function ($state) {
                        return Str::words($state, 5, '.....');
                    }),

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



                Tables\Columns\TextColumn::make('user.name')
                    ->label('Created By')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('user', function (Builder $query) use ($search) {
                            $query->where('name', 'like', "%{$search}%");
                        });
                    }),


                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('primary')
                    ->falseColor('danger'),

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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
