<?php

use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function contactos()

    {
        DB::table('contactos')->insert([
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'celular' => Str::random(10),
        ]);
    }
    }
