<?php

namespace App\Filament\Resources\PostgraduateResource\Pages;

use App\Filament\Resources\PostgraduateResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePostgraduate extends CreateRecord
{
    protected static string $resource = PostgraduateResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
}
