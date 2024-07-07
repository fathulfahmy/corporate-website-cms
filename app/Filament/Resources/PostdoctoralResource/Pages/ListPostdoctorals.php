<?php

namespace App\Filament\Resources\PostdoctoralResource\Pages;

use App\Filament\Resources\PostdoctoralResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostdoctorals extends ListRecords
{
    protected static string $resource = PostdoctoralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
