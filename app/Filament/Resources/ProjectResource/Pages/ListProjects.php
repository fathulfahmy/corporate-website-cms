<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }
    public function getTabs(): array
    {
        return [
            "all" => Tab::make("All"),
            "ongoing" => Tab::make("Ongoing")->modifyQueryUsing(
                fn(Builder $query) => $query->where("status", "Ongoing"),
            ),
            "completed" => Tab::make("Completed")->modifyQueryUsing(
                fn(Builder $query) => $query->where("status", "Completed"),
            ),
        ];
    }
}
