<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerLandingPageResource\Pages;
use App\Filament\Resources\BannerLandingPageResource\RelationManagers;
use App\Models\BannerLandingPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerLandingPageResource extends Resource
{
    protected static ?string $model = BannerLandingPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('active')
                    ->label(__('active'))
                    ->required()
                    ->onColor('success')
                    ->offColor('danger'),
                Forms\Components\MarkdownEditor::make('main_text')
                    ->label(__('main_text'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->label(__('link'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->label(__('image'))
                    ->image()
                    ->required()
                    ->imageEditor(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('main_text')
                    ->label(__('main_text'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->label(__('link'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('image'))
                    ->square()
                    ->height(100),
                Tables\Columns\ToggleColumn::make('active')
                    ->label(__('active')),
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
            'index' => Pages\ListBannerLandingPages::route('/'),
            'create' => Pages\CreateBannerLandingPage::route('/create'),
            'view' => Pages\ViewBannerLandingPage::route('/{record}'),
            'edit' => Pages\EditBannerLandingPage::route('/{record}/edit'),
        ];
    }
}
