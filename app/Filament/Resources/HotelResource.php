<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Filament\Resources\HotelResource\RelationManagers;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use NumberFormatter;
use Pelmered\FilamentMoneyField\Forms\Components\MoneyInput;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Hotel Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('address')
                            ->required()
                            ->rows(5)
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),

                Section::make('Pricing')
                    ->schema([
                        MoneyInput::make('price_per_night')
                            ->label('Price/Night')
                            ->required()
                            ->columnSpanFull()
                            ->currency('IDR')
                            ->locale('id_ID')
                            ->minValue(100)
                            ->formatStateUsing(function ($state) {
                                return NumberFormatter::create('id_ID', NumberFormatter::CURRENCY)
                                    ->format((float) $state * 1000);
                            })
                            ->mutateDehydratedStateUsing(function ($state) {
                                return (float) $state / 100000;
                            }),
                    ]),

                Section::make('Images')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->preserveFilenames()
                            ->downloadable()
                            ->multiple()
                            ->acceptedFileTypes(['image/*'])
                            ->label('Upload File')
                            ->directory('hotels'),
                    ]),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price_per_night')
                    ->label('Price/Night')
                    ->formatStateUsing(function ($state) {
                        return NumberFormatter::create('id_ID', NumberFormatter::CURRENCY)->format($state * 1000);
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                // infolist view
                Tables\Actions\ViewAction::make(),
                // ->icon('heroicon-o-eye')
                // ->label('View')
                // ->infolist([
                //     'name' => 'Hotel Name',
                // ]),
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'view' => Pages\ViewHotel::route('/{record}'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
