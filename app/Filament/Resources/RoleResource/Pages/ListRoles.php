<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

    protected static ?string $title = 'List Role';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Role Baru')
                ->createAnother(false),
        ];
    }
}
