<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use BezhanSalleh\FilamentShield\Support\Utils;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function afterCreate(): void
    {
        // Ensure every new user can access the panel regardless of their assigned role.
        // The role relationship sync in the form runs after model creation, which can
        // overwrite the panel_user role auto-assigned by HasPanelShield's boot hook.
        $panelUserRole = Utils::getPanelUserRoleName();

        if ($panelUserRole && ! $this->record->hasRole($panelUserRole)) {
            $this->record->assignRole($panelUserRole);
        }
    }
}
