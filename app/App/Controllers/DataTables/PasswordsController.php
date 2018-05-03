<?php

namespace App\App\Controllers;

use App\Domain\Association\Models\Password;

class PasswordsController extends DataTableController
{
    public function builder()
    {
        return Password::query();
    }

    public function getDisplayableColumns()
    {
        return [

            'name', 'email',
        ];
    }
}
