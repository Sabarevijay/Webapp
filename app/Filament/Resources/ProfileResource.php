<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Student Details')
                    ->description('Enter students details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('regnumber')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('department')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('year')
                            ->label('Year')
                            ->options([
                                'I' => 'I',
                                'II' => 'II',
                                'III' => 'III',
                                'IV' => 'IV', ]),
                        Forms\Components\TextInput::make('phone_number')
                            ->label('Phone Number')
                        // ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email_id')
                            ->label('Email id')
                            ->maxLength(255),
                    ])->columns(3),

                Forms\Components\Section::make('Parents Details')
                    ->description('Enter details related to Parent')
                    ->schema([
                        Forms\Components\TextInput::make('father_name')
                            ->label('Father name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('father_phone_number')
                            ->label('Father Phone number')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('father_occupation')
                            ->label('Father Occupation')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mother_name')
                            ->label('Mother name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mother_phone_number')
                            ->label('Mother Phone number')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('mother_occupation')
                            ->label('Mother Occupation')
                            ->maxLength(255),
                    ])->columns(3),

                Forms\Components\Section::make('Address')
                    ->description('Enter address with Pincode')
                    ->schema([
                        Forms\Components\TextInput::make('address')
                            ->label('Address')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('city')
                            ->label('City')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('district')
                            ->label('District')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pincode')
                            ->label('Pin Code')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Are you Hosteller?')
                //->description('Enter details ')
                    ->schema([
                        Forms\Components\Toggle::make('is_Dayscholar?')
                            ->label('YES')
                            ->reactive(),
                        Forms\Components\Hidden::make('user_id')
                            ->default(Auth::id()),

                        Forms\Components\Section::make('Hostel Details')
                            ->schema([
                                Forms\Components\TextInput::make('hostel_name')
                                    ->label('Hostel name')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('hoster_room_number')
                                    ->label('Hoster Room number')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('warden_name')
                                    ->label('Warden Name')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('warden_phone_nNumber')
                                    ->label('Warden Phone Number')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('care_taker_name')
                                    ->label('Care taker Name')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('caretaker_phone_number')
                                    ->label('Caretaker Phone number')
                                    ->maxLength(255),
                            ])->columns(3)
                            ->hidden(fn ($get) => ! $get('is_Dayscholar?')),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('regnumber')->searchable(),
                Tables\Columns\TextColumn::make('department')->searchable(),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('email_id'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('user_id'),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
