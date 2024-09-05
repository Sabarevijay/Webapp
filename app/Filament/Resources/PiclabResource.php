<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PiclabResource\Pages;
use App\Models\Piclab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PiclabResource extends Resource
{
    protected static ?string $model = Piclab::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    protected static ?string $navigationGroup = 'Control Panel';

    protected static ?string $navigationLabel = 'BIT Students';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('regnumber')->required(),
                TextInput::make('name')->required(),
                TextInput::make('year')->required(),
                TextInput::make('department')->required(),
                TextInput::make('mentor_name')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('regnumber')->searchable(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('year')->searchable(),
                TextColumn::make('department')->searchable(),
                //  TextColumn::make('phone number'),
                //  TextColumn::make('email'),

            ])
            ->filters([
                Tables\Filters\Filter::make('verified')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),

            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPiclabs::route('/'),
            'create' => Pages\CreatePiclab::route('/create'),
            'edit' => Pages\EditPiclab::route('/{record}/edit'),
        ];
    }
}
