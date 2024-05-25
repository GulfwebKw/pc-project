<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-s-chat-bubble-left';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Placeholder::make('first_name')
                    ->content(fn($record) => $record->first_name),
                Forms\Components\Placeholder::make('last_name')
                    ->content(fn($record) => $record->last_name),
                Forms\Components\Placeholder::make('email')
                    ->content(fn($record) => $record->phone),
                Forms\Components\Placeholder::make('phone')
                    ->content(fn($record) => $record->email),
                Forms\Components\Placeholder::make('created_at')
                    ->content(fn($record) => $record->created_at),

                Forms\Components\Placeholder::make('post_title')
                    ->content(fn($record) => $record->post->title),
                Forms\Components\Radio::make('is_active')
                    ->options([
                        'rejected' => 'Reject',
                        'approved' => 'Approve',
                        'pending' => 'Pending',
                    ]),
                Forms\Components\Textarea::make('message')
                    ->rows(10)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('post.title'),
                Tables\Columns\TextColumn::make('is_active')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'gray',
                        'approved' => 'success',
                        'rejected' => 'danger',
                    }),
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
            'index' => Pages\ListComments::route('/'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }


    public static function getNavigationBadge(): ?string
    {
        /** @var class-string<Model> $modelClass */
        $modelClass = static::$model;

        return (string) $modelClass::query()
            ->where('is_active' , 'pending')
            ->count();
    }
}
