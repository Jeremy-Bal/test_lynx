<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::truncate();
            DB::table('role_user')->truncate();

            $admin = User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password')
            ]);
            $moderateur = User::create([
                'name' => 'moderateur',
                'email' => 'moderateur@moderateur.com',
                'password' => Hash::make('password')
            ]);
        
        $auteur = User::create([
            'name' => 'auteur',
            'email' => 'auteur@auteur.com',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $moderateurRole = Role::where('name', 'moderateur')->first();
        $auteurRole = Role::where('name', 'auteur')->first();

        $admin->roles()->attach($adminRole);
        $moderateur->roles()->attach($moderateurRole);
        $auteur->roles()->attach($auteurRole);

    }
}
