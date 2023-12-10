<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ContactInfo;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactInfoResource\Pages;
use App\Filament\Resources\ContactInfoResource\RelationManagers;

class ContactInfoResource extends Resource
{
    protected static ?string $model = ContactInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return __('contact info');
    }

    public static function getPluralLabel(): string
    {
        return __('contact info');
    }

    public static function getModelLabel(): string
    {
        return __('contact info');
    }

    public static function getNavigationGroup(): string
    {
        return __('contact page');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('phone_1')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('phone_2')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('phone_whatsapp')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook_link')
                    ->required()
                    ->maxLength(1000),
                Forms\Components\TextInput::make('insta_link')
                    ->required()
                    ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone_1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_whatsapp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('insta_link')
                    ->searchable(),
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
                // Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListContactInfos::route('/'),
            // 'create' => Pages\CreateContactInfo::route('/create'),
            // 'view' => Pages\ViewContactInfo::route('/{record}'),
            // 'edit' => Pages\EditContactInfo::route('/{record}/edit'),
        ];
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function canCreate(): bool
    {
        return false;
    }

    // public static function canEdit(Model $record): bool
    // {
    //     return false;
    // }
}
