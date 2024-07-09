<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Group::make()->schema([
                    Section::make(__('blog.contents'))->schema([
                        TextInput::make('title')
                            ->label(__('blog.title'))
                            ->minLength(5)
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('subtitle')
                            ->label(__('blog.subtitle'))
                            ->minLength(5)
                            ->maxLength(255)
                            ->required(),

                        Select::make('category')
                            ->label(__('blog.category'))
                            ->options([
                                '1' => 'Commercial',
                                '2' => 'Learning',
                            ])
                            ->required(),

                        DatePicker::make('date')
                            ->label(__('blog.date'))
                            ->required(),

                        RichEditor::make('description')
                            ->label(__('blog.body'))
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

                TextColumn::make('title')
                    ->label(__('blog.title'))
                    // ->description(fn(Post $record): string => $record->excerpt)
                    ->wrap()
                    ->sortable(),

                TextColumn::make('subtitle')
                    ->label(__('blog.subtitle'))
                    // ->description(fn(Post $record): string => $record->excerpt)
                    ->wrap()
                    ->sortable(),

                // TextColumn::make('description')
                //     ->label(__('blog.content'))
                //     ->wrap()
                //     ->sortable(),

                TextColumn::make('date')
                    ->label(__('blog.date'))
                    ->dateTime('M Y'),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
