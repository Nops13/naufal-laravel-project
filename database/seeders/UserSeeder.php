<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'nama_user' => 'Johnson',
            'email_user'    => 'Johnson@gmail.com',
            'role_user'  => '1',
            'phone_user' => '6281200112233',
            'gender_user' => 'M',
            'tempat_tinggal_user' => 'Jakarta',
            'tanggal_lahir_user' => '2001-12-12',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        /*
        $webmaster = User::create([
            'first_name'    => 'WebMaster',
            'last_name'     => 'WebMaster',
            'email'         => 'webmaster@datalas.test',
            'gender'        => 'M',
            'phone'         => '6281200112233',
            'password'      => bcrypt('password'),
        ]);
        $webmaster->assignRole('webmaster');

        $admin = User::create([
            'first_name'    => 'Administrator',
            'last_name'     => 'Administrator',
            'email'         => 'admin@datalas.test',
            'gender'        => 'M',
            'phone'         => '6281200112233',
            'password'      => bcrypt('password'),
        ]);
        $admin->assignRole('webmaster');

        $community = User::create([
            'first_name'    => 'John',
            'last_name'    => 'Doe',
            'email'         => 'johndoe@datalas.test',
            'gender'        => 'M',
            'phone'         => '6281200112233',
            'password'      => bcrypt('password'),
        ]);
        $community->assignRole('community');

         $community = User::create([
            'first_name'    => 'Joko',
            'last_name'    => 'Doe',
            'email'         => 'Joko@datalas.test',
            'gender'        => 'M',
            'phone'         => '6281200112233',
            'password'      => bcrypt('password'),
        ]);
        $community->assignRole('community'); */
    }
}
