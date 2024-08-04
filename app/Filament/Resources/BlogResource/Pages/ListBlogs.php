<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListBlogs extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }
    public function getTabs(): array
    {
        return [
            "all" => Tab::make("All"),
            "active" => Tab::make("News")->modifyQueryUsing(
                fn(Builder $query) => $query->where("category", "=", "News"),
            ),
            "inactive" => Tab::make("Event")->modifyQueryUsing(
                fn(Builder $query) => $query->where("category", "=", "Event"),
            ),
        ];
    }
}
