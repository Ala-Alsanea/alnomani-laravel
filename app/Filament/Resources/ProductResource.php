<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return __('product');
    }

    public static function getPluralLabel(): string
    {
        return __('product');
    }

    public static function getModelLabel(): string
    {
        return __('product');
    }

    public static function getNavigationGroup(): string
    {
        return __('content');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Toggle::make('avalibale')
                //     ->label(__('avalibale'))
                //     ->required()
                //     ->onColor('success')
                //     ->offColor('danger'),
                Forms\Components\TextInput::make('name')
                    ->label(__('name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type_id')
                    ->label(__('type'))
                    ->relationship('type', 'name')
                    ->required(),
                Forms\Components\Select::make('brand_id')
                    ->label(__('brand'))
                    ->relationship('brand', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label(__('image'))
                    ->image()
                    ->required()
                    ->imageEditor(),
                Forms\Components\DatePicker::make('year')
                    ->label(__('year')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label(__('name'))

                    ->searchable(),
                Tables\Columns\TextColumn::make('type.name')
                ->label(__('type'))


                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
                ->label(__('brand'))
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                ->label(__('image'))

                    ->square()
                    ->height(100),
                Tables\Columns\TextColumn::make('year')
                ->label(__('year'))

                    ->date()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('avalibale')
                    ->label(__('avalibale'))
                    ->onColor('success')
                    ->offColor('danger'),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
