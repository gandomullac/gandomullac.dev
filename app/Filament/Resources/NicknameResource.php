<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NicknameResource\Pages;
use App\Filament\Resources\NicknameResource\RelationManagers;
use App\Models\Nickname;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NicknameResource extends Resource
{
    protected static ?string $model = Nickname::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Group::make()->schema([
                    Section::make(__('blog.contents'))->schema([
                        TextInput::make('name')
                            ->label(__('blog.name'))
                            ->minLength(1)
                            ->maxLength(25)
                            ->required(),
                    ]),

                ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sort')
                    ->label(__('blog.sort'))
                    ->sortable(),

                TextColumn::make('name')
                    ->label(__('blog.name')),
            ])->reorderable('sort')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListNicknames::route('/'),
            'create' => Pages\CreateNickname::route('/create'),
            'edit' => Pages\EditNickname::route('/{record}/edit'),
        ];
    }
}
