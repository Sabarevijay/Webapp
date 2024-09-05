<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentProfileResource\Pages;
use App\Models\StudentProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;


class StudentProfileResource extends Resource
{
    protected static ?string $model = StudentProfile::class;

    protected static ?string $navigationLabel = 'P Skill';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

                Forms\Components\Select::make('pskill_name')
                    ->label('P Skill Name')
                    ->options([
                        'C Programming' => 'C Programming',
                        'Java Programming' => 'Java Programming',
                        'Python Programming' => 'Python Programming',
                        'UI/UX Design' => 'UI/UX Design', ]),

                Forms\Components\Select::make('level')
                    ->label('Level')
                    ->options([
                        'I' => 'I',
                        'II' => 'II',
                        'III' => 'III',
                        'IV' => 'IV', ]),

                Forms\Components\DatePicker::make('date')
                    ->label('Date of Completion'),
                //->maxLength(255),

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Completed' => 'Completed',
                        'Incomplete' => 'Incomplete', ]),
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::id()),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        $user = Auth::user();
        $isAdmin = $user && $user->hasRole('student');
        $columns = [
            Tables\Columns\TextColumn::make('pskill_name')->searchable(),
            Tables\Columns\TextColumn::make('level')->searchable(),
            Tables\Columns\TextColumn::make('date')->searchable(),
            Tables\Columns\TextColumn::make('status')->searchable(),
        ];

        if (! $isAdmin) {
            $columns = array_merge(
                //  [Tables\Columns\TextColumn::make('user_id')->searchable()],
                [Tables\Columns\TextColumn::make('User.name')->label('Student Name')],
                //  [Tables\Columns\TextColumn::make('User.email')->label('Email Id')],
                $columns
            );
        }

        return $table
            ->columns($columns) // Pass the columns array directly

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
            'index' => Pages\ListStudentProfiles::route('/'),
            'create' => Pages\CreateStudentProfile::route('/create'),
            'edit' => Pages\EditStudentProfile::route('/{record}/edit'),
        ];
    }
}
