<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqsResource\Pages;
use App\Filament\Resources\FaqsResource\RelationManagers;
use App\Models\Faqs;
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

class FaqsResource extends Resource
{
    protected static ?string $model = Faqs::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                    ->schema([
                        TextInput::make('en_question')
                            ->required()
                            ->maxlength(255)
                            ->label('English Question')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('sw_question')
                            ->required()
                            ->label('Swahili Question')
                            ->maxlength(255),

                        Textarea::make('en_answer')
                        ->required()
                        ->label('English Answer')
                        ->maxlength(555),

                        Textarea::make('sw_answer')
                        ->required()
                        ->label('Swahili Answer')
                        ->maxlength(555),

                        TextInput::make('slug')
                        ->required()
                        ->maxlength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(faqs::class, 'slug', ignoreRecord: true),

                        Hidden::make('created_by')
                            ->default(fn () => Auth::id()),

                        Placeholder::make('created_by_name')
                            ->label('Created By')
                            ->content(fn () => Auth::user()->name),



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
                Tables\Columns\TextColumn::make('en_question')
                ->searchable()
                ->label('English Question')
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

            Tables\Columns\TextColumn::make('sw_question')
                ->searchable()
                ->label('Swahili Question')
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

            Tables\Columns\TextColumn::make('en_answer')
            ->searchable()
            ->label('English Answer')
            ->formatStateUsing(function ($state){
                return Str::words($state, 5,'.....');
            }),

            Tables\Columns\TextColumn::make('sw_answer')
                ->searchable()
                ->label('Swahili Answer')
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaqs::route('/create'),
            'edit' => Pages\EditFaqs::route('/{record}/edit'),
        ];
    }
}
