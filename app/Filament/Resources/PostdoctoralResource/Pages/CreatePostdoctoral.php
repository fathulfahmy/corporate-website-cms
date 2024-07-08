<?php

namespace App\Filament\Resources\PostdoctoralResource\Pages;

use App\Filament\Resources\PostdoctoralResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePostdoctoral extends CreateRecord
{
    protected static string $resource = PostdoctoralResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
