<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TenderResource\Pages;
use App\Filament\Resources\TenderResource\RelationManagers;
use App\Models\Tender;
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

class TenderResource extends Resource
{
    protected static ?string $model = Tender::class;

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
                            ->label('English Title')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('sw_title')
                            ->required()
                            ->label('Swahili Title')
                            ->maxlength(255),

                        DatePicker::make('start_date')
                            ->required(),

                        DatePicker::make('end_date')
                            ->required()
                            ->afterOrEqual('start_date'),

                        FileUpload::make('en_file')
                            ->label('English PDF')
                            ->required()
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(10240),

                        FileUpload::make('sw_file')
                            ->label('Swahili PDF')
                            ->required()
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(10240),


                        DatePicker::make('created_at')
                            ->nullable(),

                        Hidden::make('created_by')
                            ->default(fn () => Auth::id()),

                        Placeholder::make('created_by_name')
                            ->label('Created By')
                            ->content(fn () => Auth::user()->name),


                        TextInput::make('slug')
                        ->required()
                        ->maxlength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(Tender::class, 'slug', ignoreRecord: true),

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
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

            Tables\Columns\TextColumn::make('sw_title')
                ->searchable()
                ->label('Swahili Title')
                ->formatStateUsing(function ($state){
                    return Str::words($state, 5,'.....');
                }),

            Tables\Columns\TextColumn::make('en_file')
            ->searchable()
            ->label('English File')
            ->formatStateUsing(fn ($state) => $state ? '<a href="' . \Storage::url($state) . '" target="_blank" class="text-blue-500 hover:underline">Download</a>' : 'No File')
            ->html(),

            Tables\Columns\TextColumn::make('sw_file')
                ->searchable()
                ->label('Swahili File')
                ->formatStateUsing(fn ($state) => $state ? '<a href="' . \Storage::url($state) . '" target="_blank" class="text-blue-500 hover:underline">Download</a>' : 'No File')
                ->html(),

            Tables\Columns\TextColumn::make('start_date')
                ->date()
                ->sortable(),
            Tables\Columns\TextColumn::make('end_date')
                ->date()
                ->sortable(),

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
            'index' => Pages\ListTenders::route('/'),
            'create' => Pages\CreateTender::route('/create'),
            'edit' => Pages\EditTender::route('/{record}/edit'),
        ];
    }
}
