<?php

namespace App\Filament\Resources\InboxResource\Pages;

use App\Filament\Resources\InboxResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListInboxes extends ListRecords
{
    protected static string $resource = InboxResource::class;

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All'),
            'active' => Tab::make('Unread')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', '=', 'Unread')),
            'inactive' => Tab::make('Read')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', '=', 'Read')),
        ];
    }
}
