<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThemesResource\Pages;
use App\Filament\Resources\ThemesResource\RelationManagers;
use App\Models\Themes;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThemesResource extends Resource
{
    protected static ?string $model = Themes::class;

    protected static ?string $navigationIcon = 'heroicon-o-sun';
    protected static ?string $navigationGroup = 'الاعدادات';
    protected static ?string $pluralModelLabel = 'الثيمات';
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')->required(),
               Forms\Components\ColorPicker::make('primary')->required(),
                Forms\Components\ColorPicker::make('secondary')->required(),
                Forms\Components\ColorPicker::make('success')->required(),
                Forms\Components\ColorPicker::make('info')->required(),
                Forms\Components\ColorPicker::make('warning')->required(),
                Forms\Components\ColorPicker::make('danger')->required(),
                Forms\Components\ColorPicker::make('light')->required(),
               Forms\Components\ColorPicker::make('head_color')->required(),
               Forms\Components\ColorPicker::make('paragraph_color')->required(),
                Forms\Components\ColorPicker::make('link_color')->required(),
                Forms\Components\ColorPicker::make('hover_color')->required(),
               Forms\Components\TextInput::make('font_family')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('key')->label('اسم الثيم'),
                Tables\Columns\ColorColumn::make('primary')->label('اللون الرئيسي'),
                Tables\Columns\ColorColumn::make('secondary')->label('اللون الثانوي'),
                Tables\Columns\TextColumn::make('font_family')->label('نوع الخط'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListThemes::route('/'),
            'create' => Pages\CreateThemes::route('/create'),
            'edit' => Pages\EditThemes::route('/{record}/edit'),
        ];
    }
}
