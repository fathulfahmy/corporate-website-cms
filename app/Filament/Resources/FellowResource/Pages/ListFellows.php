<?php

namespace App\Filament\Resources\FellowResource\Pages;

use App\Filament\Resources\FellowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFellows extends ListRecords
{
    protected static string $resource = FellowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
