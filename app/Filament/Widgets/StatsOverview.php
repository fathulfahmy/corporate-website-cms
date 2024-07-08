<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{


    protected function getStats(): array
    {
        return [
            Stat::make('Inbox', DB::table('inboxes')->where('status', '=', 'Unread')->count())
                ->color('danger')
                ->description('Total unread messages')
                ->descriptionIcon('heroicon-m-envelope'),
            Stat::make('Projects', DB::table('projects')->where('status', '=', 'Ongoing')->count())
                ->color('info')
                ->description('Total ongoing projects')
                ->descriptionIcon('heroicon-m-beaker'),
            Stat::make('Projects', DB::table('blogs')->where('created_at', '>=' , Carbon::now()->month())->count())
                ->color('success')
                ->description('News and event this month')
                ->descriptionIcon('heroicon-m-beaker'),
        ];
    }
}
