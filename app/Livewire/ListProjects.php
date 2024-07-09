<?php

namespace App\Livewire;

use App\Models\Project;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

class ListProjects extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Project::query())
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('leader')
                    ->limit(25)
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Ongoing' => 'warning',
                        'Completed' => 'success',
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->actions([
                Tables\Actions\Action::make('View')
                    ->form([
                        Grid::make(2)
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required(),
                                        Forms\Components\TextInput::make('leader')
                                            ->required(),
                                        Forms\Components\Select::make('status')
                                            ->required()
                                    ])->columnSpan(1),
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Repeater::make('members')
                                            ->simple(
                                                Forms\Components\TextInput::make('member')
                                                    ->required()
                                            )
                                            ->defaultItems(0)
                                    ])->columnSpan(1),
                            ])
                    ])
                    ->disabledForm()
                    ->modalSubmitAction(false)
                    ->modalCancelAction(false),
            ]);
    }

    public function render(): View
    {
        return view('livewire.list-projects');
    }
}
