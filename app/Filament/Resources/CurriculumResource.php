<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CurriculumResource\Pages;
use App\Models\Curriculum;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CurriculumResource extends Resource
{
    protected static ?string $model = Curriculum::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

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

                        Select::make('language')
                            ->label(__('blog.language'))
                            ->options([
                                'it' => 'Italian',
                                'en' => 'English',
                            ])
                            ->required(),

                        SpatieMediaLibraryFileUpload::make('upload')
                            ->label(__('blog.upload'))
                            ->collection('curriculum')
                            ->acceptedFileTypes([
                                'application/pdf',
                            ])
                            ->collection('curriculum')
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

                TextColumn::make('language')
                    ->label(__('blog.language'))
                    ->sortable(),

                IconColumn::make('url')
                    ->label(__('blog.url'))
                    ->icon('heroicon-o-rectangle-stack')
                    // Link ad uso interno.
                    ->url(fn ($record) => $record->getFirstMedia('curriculum')->getUrl())
                    ->openUrlInNewTab(),

            ])
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
            'index' => Pages\ListCurricula::route('/'),
            'create' => Pages\CreateCurriculum::route('/create'),
            'edit' => Pages\EditCurriculum::route('/{record}/edit'),
        ];
    }
}
