<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfrastructureResource\Pages;
use App\Filament\Resources\InfrastructureResource\RelationManagers;
use App\Forms\Components\RadioButtonImage;
use App\Models\Infrastructure;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfrastructureResource extends Resource
{
    protected static ?string $model = Infrastructure::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                \Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor::make('content')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory(now()->format('Y/m/d'))
                    ->imageEditor()
                    ->required(),
                Forms\Components\FileUpload::make('icon')
                    ->image()
                    ->directory(now()->format('Y/m/d'))
                    ->imageEditor()
                    ->required(),
                Forms\Components\Checkbox::make('is_active')
                    ->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\BooleanColumn::make('is_active'),
            ])
            ->filters([
                //
            ])
            ->reorderable('ordering')
            ->paginatedWhileReordering(false)
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
            'index' => Pages\ListInfrastructures::route('/'),
            'create' => Pages\CreateInfrastructure::route('/create'),
            'edit' => Pages\EditInfrastructure::route('/{record}/edit'),
        ];
    }
}
