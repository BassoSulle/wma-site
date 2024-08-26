<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\IconColumn;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        ->live(onBlur:true)
                        ->afterStateUpdated(fn (string $operation, $state, Set $set)=>$operation
                          ==='create'? $set('slug', Str::slug($state)):null),


                        TextInput::make('sw_title')
                        ->required()
                        ->maxlength(255),


                        TextInput::make('slug')
                        ->required()
                        ->maxlength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(News::class, 'slug', ignoreRecord:true),

                        Textarea::make('en_description')
                        ->required()
                        ->maxlength(255),


                        Textarea::make('sw_description')
                        ->required()
                        ->maxlength(255),

                        FileUpload::make('image')
                        ->image()
                        ->directory('news'),

                        // Select::make('created_by')
                        // ->label('Created By')
                        // ->required()
                        // ->relationship('user', 'name')
                        // ->searchable()
                        // ->preload(),


                        DatePicker::make('created_at')
                            ->nullable(),

                        Hidden::make('created_at')
                        ->default(fn ()=> Auth::id()),

                        Placeholder::make('created_by_name')
                        ->label('Created By')
                        ->content(fn ()=>Auth::user()->name),



                        Toggle::make('is_active')
                        ->required()
                        ->default(true)

                    ])
                ])
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('en_title')
                ->searchable()
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

                Tables\Columns\TextColumn::make('sw_title')
                ->searchable()
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

                Tables\Columns\TextColumn::make('image')
                ->searchable()
                ->html()
                ->formatStateUsing(function ($state) {
                    return '<img src="'. asset('storage/news/' . basename($state)) .'" width="30", height="40" />';
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

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup:: make([
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
