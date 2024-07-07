<?php

namespace App\Filament\Resources\PostgraduateResource\Pages;

use App\Filament\Resources\PostgraduateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostgraduates extends ListRecords
{
    protected static string $resource = PostgraduateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
