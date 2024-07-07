<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostdoctoralResource\Pages;
use App\Filament\Resources\PostdoctoralResource\RelationManagers;
use App\Models\Postdoctoral;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostdoctoralResource extends Resource
{
    protected static ?string $model = Postdoctoral::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Researchers';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->fetchFileInformation(false),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('status')
                            ->options([
                                'Active' => 'Active',
                                'Inactive' => 'Inactive',
                            ])
                            ->native(false)
                            ->required(),
                    ])->columnSpan(1),

                Forms\Components\Grid::make(1)
                    ->schema([

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Repeater::make('qualifications')
                                    ->simple(
                                        Forms\Components\TextInput::make('qualification')
                                            ->required()
                                            ->maxLength(255),
                                    )
                                    ->addActionLabel('Add another qualification')
                                    ->defaultItems(3)
                            ])->columnSpan(1),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Repeater::make('research_areas')
                                    ->simple(
                                        Forms\Components\TextInput::make('research_areas')
                                            ->required()
                                            ->maxLength(255),
                                    )
                                    ->addActionLabel('Add another research area')
                                    ->defaultItems(3)
                            ])->columnSpan(1),

                    ])->columnSpan(1),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->defaultImageUrl(asset('images/placeholderImage.png'))
                    ->circular()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('name')
                    ->limit(25)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->limit(25)
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Active' => 'success',
                        'Inactive' => 'gray',
                    })
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('active')
                    ->query(fn (Builder $query): Builder => $query->where('status', '=', 'Active')),
                Tables\Filters\Filter::make('inactive')
                    ->query(fn (Builder $query): Builder => $query->where('status', '=', 'Inactive')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPostdoctorals::route('/'),
            'create' => Pages\CreatePostdoctoral::route('/create'),
            'view' => Pages\ViewPostdoctoral::route('/{record}'),
            'edit' => Pages\EditPostdoctoral::route('/{record}/edit'),
        ];
    }
}
