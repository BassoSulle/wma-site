<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\WMAForms;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\FormCategory;
use Filament\Resources\Resource;
use App\Models\PublicationCategory;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use App\Filament\Resources\WMAFormsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WMAFormsResource\RelationManagers;

class WMAFormsResource extends Resource
{
    protected static ?string $model = WMAForms::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                        ->schema([
                            Select::make('form_category_id')
                                ->label('Form Category')
                                ->options(FormCategory::all()->pluck('en_title', 'id')) // Assuming 'name' is the display field and 'id' is the value field
                                ->required(),

                            TextInput::make('slug')
                                ->required()
                                ->maxlength(255)
                                ->disabled()
                                ->dehydrated()
                                ->unique(WMAForms::class, 'slug', ignoreRecord: true),

                            TextInput::make('en_title')
                                ->required()
                                ->maxlength(255)
                                ->label('English Title')
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                            TextInput::make('sw_title')
                                ->required()
                                ->label('Swahili Title')
                                ->maxlength(255),

                            FileUpload::make('en_file')
                                ->label('English PDF')
                                ->required()
                                ->directory('forms/en')
                                ->acceptedFileTypes(['application/pdf'])
                                ->maxSize(10240),

                            FileUpload::make('sw_file')
                                ->label('Swahili PDF')
                                ->required()
                                ->directory('forms/sw')
                                ->acceptedFileTypes(['application/pdf'])
                                ->maxSize(10240),

                            DatePicker::make('created_at')
                                ->nullable(),

                            Hidden::make('created_by')
                                ->default(fn() => Auth::id()),

                            Placeholder::make('created_by_name')
                                ->label('Created By')
                                ->content(fn() => Auth::user()->name),



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

                Tables\Columns\TextColumn::make('en_file')
                    ->searchable()
                    ->label('English File')
                    ->formatStateUsing(fn($state) => $state ? '<a href="' . Storage::url($state) . '" target="_blank" class="text-blue-500 hover:underline">Download</a>' : 'No File')
                    ->html(),

                Tables\Columns\TextColumn::make('sw_file')
                    ->searchable()
                    ->label('Swahili File')
                    ->formatStateUsing(fn($state) => $state ? '<a href="' . Storage::url($state) . '" target="_blank" class="text-blue-500 hover:underline">Download</a>' : 'No File')
                    ->html(),

                Tables\Columns\TextColumn::make('form_categories.en_title')
                    ->label('Publication Category')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('form_categories', function (Builder $query) use ($search) {
                            $query->where('en_title', 'like', "%{$search}%");
                        });
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
            'index' => Pages\ListWMAForms::route('/'),
            'create' => Pages\CreateWMAForms::route('/create'),
            'edit' => Pages\EditWMAForms::route('/{record}/edit'),
        ];
    }
}
