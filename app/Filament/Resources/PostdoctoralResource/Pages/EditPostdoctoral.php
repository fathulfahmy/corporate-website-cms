<?php

namespace App\Filament\Resources\PostdoctoralResource\Pages;

use App\Filament\Resources\PostdoctoralResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostdoctoral extends EditRecord
{
    protected static string $resource = PostdoctoralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
