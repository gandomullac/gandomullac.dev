<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DownloadResource\Pages;
use App\Models\Download;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DownloadResource extends Resource
{
    protected static ?string $model = Download::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Group::make()->schema([
                    Section::make(__('blog.contents'))->schema([
                        TextInput::make('name')
                            ->label(__('blog.name'))
                            ->minLength(5)
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('description')
                            ->label(__('blog.description'))
                            ->maxLength(255)
                            ->required(),

                        SpatieMediaLibraryFileUpload::make('upload')
                            ->label(__('blog.upload'))
                            ->collection('downloads')
                            ->preserveFilenames()
                            ->required(),
                    ]),

                ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID'),

                TextColumn::make('name')
                    ->label(__('blog.name'))
                    ->sortable(),

                TextColumn::make('description')
                    ->label(__('blog.description'))
                    ->sortable(),

                // IconColumn::make('url')
                //     ->label(__('blog.url'))
                //     ->icon('heroicon-o-link')
                //     // Link ad uso interno.
                //     ->url(fn ($record) => $record->getFirstMedia('downloads')->getUrl())
                //     ->openUrlInNewTab(),

            ])
            ->filters([

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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDownloads::route('/'),
            'create' => Pages\CreateDownload::route('/create'),
            'edit' => Pages\EditDownload::route('/{record}/edit'),
        ];
    }
}
