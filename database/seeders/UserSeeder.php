<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nom' => 'SOROGO',
            'prenom' => 'r Bernard',
            'telephone' => '79106598',
            'genre' => 'Homme',
            'date_naiss' => '2000-08-13',
            'cnib' => '',
            'email' => 'sorogorbernard@gmail.com',
            'password' => Hash::make('password'),
            'roles_id' => 1,
            'active' => 1,
            'photo' => '',
        ]);


        DB::table('users')->insert([
            'nom' => 'OUEDRAOGO',
            'prenom' => 'rabi',
            'telephone' => '76236388',
            'genre' => 'Femme',
            'date_naiss' => '2000-08-13',
            'cnib' => '',
            'email' => 'ouedraogorabi@gmail.com',
            'password' => Hash::make('password'),
            'roles_id' => 2,
            'active' => 1,
            'photo' => '',
        ]);

        DB::table('users')->insert([
            'nom' => 'OUEDRAOGO',
            'prenom' => 'Ousseni',
            'telephone' => '67186063',
            'genre' => 'Hemme',
            'date_naiss' => '2000-05-23',
            'cnib' => '',
            'email' => 'ouedraogoousseni@gmail.com',
            'password' => Hash::make('password'),
            'roles_id' => 3,
            'active' => 1,
            'photo' => '',
        ]);


        DB::table('users')->insert([
            'nom' => 'ILLA',
            'prenom' => 'Madina',
            'telephone' => '76556888',
            'genre' => 'Femme',
            'date_naiss' => '2000-08-18',
            'cnib' => '',
            'email' => 'illafemme@gmail.com',
            'password' => Hash::make('password'),
            'roles_id' => 4,
            'active' => 1,
            'photo' => '',
        ]);
    }

}
