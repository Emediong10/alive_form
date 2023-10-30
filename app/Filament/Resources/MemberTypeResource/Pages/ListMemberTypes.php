<?php

namespace App\Filament\Resources\MemberTypeResource\Pages;

use App\Filament\Resources\MemberTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMemberTypes extends ListRecords
{
    protected static string $resource = MemberTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
