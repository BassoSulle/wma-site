<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormCategoryResource\Pages;
use App\Filament\Resources\FormCategoryResource\RelationManagers;
use App\Models\FormCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\IconColumn;
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

class FormCategoryResource extends Resource
{
    protected static ?string $model = FormCategory::class;

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


                        Textarea::make('en_detail')
                        ->required()
                        ->label('English Detail')
                        ->maxlength(255),


                        Textarea::make('sw_detail')
                        ->required()
                        ->label('Swahili Detail')
                        ->maxlength(255),


                        DatePicker::make('created_at')
                            ->nullable(),

                        TextInput::make('slug')
                        ->required()
                        ->maxlength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(FormCategory::class, 'slug', ignoreRecord:true),

                        Toggle::make('is_active')
                        ->required()
                        ->default(true),

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
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

            Tables\Columns\TextColumn::make('sw_title')
                ->searchable()
                ->label('Swahili Title')
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\IconColumn::make('is_active')
            ->boolean(),

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
            'index' => Pages\ListFormCategories::route('/'),
            'create' => Pages\CreateFormCategory::route('/create'),
            'edit' => Pages\EditFormCategory::route('/{record}/edit'),
        ];
    }
}
