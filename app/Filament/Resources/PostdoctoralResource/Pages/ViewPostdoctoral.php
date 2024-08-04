<?php

namespace App\Filament\Resources\PostdoctoralResource\Pages;

use App\Filament\Resources\PostdoctoralResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostdoctoral extends ViewRecord
{
    protected static string $resource = PostdoctoralResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\EditAction::make()];
    }
}
