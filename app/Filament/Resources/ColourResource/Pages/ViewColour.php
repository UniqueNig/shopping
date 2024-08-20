<?php

namespace App\Filament\Resources\ColourResource\Pages;

use App\Filament\Resources\ColourResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewColour extends ViewRecord
{
    protected static string $resource = ColourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
