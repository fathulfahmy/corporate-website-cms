<?php

namespace App\Filament\Resources\FellowResource\Pages;

use App\Filament\Resources\FellowResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFellow extends EditRecord
{
    protected static string $resource = FellowResource::class;

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
