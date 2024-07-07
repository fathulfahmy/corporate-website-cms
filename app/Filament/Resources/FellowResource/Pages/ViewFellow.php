<?php

namespace App\Filament\Resources\FellowResource\Pages;

use App\Filament\Resources\FellowResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFellow extends ViewRecord
{
    protected static string $resource = FellowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
