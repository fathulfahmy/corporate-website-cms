<?php

namespace App\Filament\Resources\PostgraduateResource\Pages;

use App\Filament\Resources\PostgraduateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostgraduate extends EditRecord
{
    protected static string $resource = PostgraduateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
