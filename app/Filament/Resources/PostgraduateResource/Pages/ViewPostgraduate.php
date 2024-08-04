<?php

namespace App\Filament\Resources\PostgraduateResource\Pages;

use App\Filament\Resources\PostgraduateResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostgraduate extends ViewRecord
{
    protected static string $resource = PostgraduateResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\EditAction::make()];
    }
}
