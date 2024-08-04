<?php

namespace App\Filament\Resources\FellowResource\Pages;

use App\Filament\Resources\FellowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListFellows extends ListRecords
{
    protected static string $resource = FellowResource::class;

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
