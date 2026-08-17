<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Create (or update) the super admin account.
     * Login is by phone + password. Password is auto-hashed by the model cast.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['phone' => '01274488961'],
            [
                'name'     => 'Super Admin',
                'password' => 'CHZflgh#2004',
                'role'     => User::ROLE_SUPER_ADMIN,
            ]
        );
    }
}
