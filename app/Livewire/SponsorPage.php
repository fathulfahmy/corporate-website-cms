<?php

namespace App\Livewire;

use App\Models\Sponsor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;

class SponsorPage extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Sponsor::query())
            ->columns([
                Tables\Columns\ImageColumn::make("logo")
                    ->defaultImageUrl(asset("images/placeholderImage.png"))
                    ->circular(),
                Tables\Columns\TextColumn::make("name")
                    ->limit(100)
                    ->sortable()
                    ->searchable(),
            ]);
    }

    public function render(): View
    {
        return view("pages.sponsor");
    }
}
