<?php

namespace App\Filament\Resources\PostdoctoralResource\Pages;

use App\Filament\Resources\PostdoctoralResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListPostdoctorals extends ListRecords
{
    protected static string $resource = PostdoctoralResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }
    public function getTabs(): array
    {
        return [
            "all" => Tab::make("All"),
            "active" => Tab::make("Active")->modifyQueryUsing(
                fn(Builder $query) => $query->where("status", "=", "Active"),
            ),
            "inactive" => Tab::make("Inactive")->modifyQueryUsing(
                fn(Builder $query) => $query->where("status", "=", "Inactive"),
            ),
        ];
    }
}
