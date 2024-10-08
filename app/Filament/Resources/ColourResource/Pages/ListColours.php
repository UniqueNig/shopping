<?php

namespace App\Filament\Resources\ColourResource\Pages;

use App\Filament\Resources\ColourResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColours extends ListRecords
{
    protected static string $resource = ColourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
