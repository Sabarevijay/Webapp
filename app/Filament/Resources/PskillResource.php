<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PskillResource\Pages;
use App\Models\Piclab;
use App\Models\Pskill;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PskillResource extends Resource
{
    protected static ?string $model = Pskill::class;

    protected static ?string $navigationLabel = 'My Students';

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?int $navigationSort = 1;

    //protected static ?string $model = Piclab::class;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('register_number')
                    ->label('Student Register Number')
                //->required()
                    ->maxLength(255),
                /*  Forms\Components\Select::make('register_number')
                ->label('Register Number')
                ->options(User::all()->pluck('name', 'id'))
                ->searchable()*/

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('register_number')
                    ->label('Student Register Number'),

                Tables\Columns\TextColumn::make('student_name')
                    ->label('Student Name'),
                //  Tables\Columns\TextColumn::make('user_id')->searchable(),

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
            'index' => Pages\ListPskills::route('/'),
            'create' => Pages\CreatePskill::route('/create'),
            'edit' => Pages\EditPskill::route('/{record}/edit'),
        ];
    }

    public static function getTableQuery()
    {
        return parent::getTableQuery()
            ->where('status', 'active'); // Example filter
    }
}
