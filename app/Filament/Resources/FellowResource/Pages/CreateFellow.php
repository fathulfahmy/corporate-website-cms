<?php

namespace App\Filament\Resources\FellowResource\Pages;

use App\Filament\Resources\FellowResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFellow extends CreateRecord
{
    protected static string $resource = FellowResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
}
