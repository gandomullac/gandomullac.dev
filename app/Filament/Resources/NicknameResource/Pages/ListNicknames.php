<?php

namespace App\Filament\Resources\NicknameResource\Pages;

use App\Filament\Resources\NicknameResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNicknames extends ListRecords
{
    protected static string $resource = NicknameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
