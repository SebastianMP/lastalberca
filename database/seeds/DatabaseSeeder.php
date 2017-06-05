<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //$this->call(grupoSeeder::class);
        $this->call(DiasTableSeeder::class);
        $this->call(MaticulasTableSeeder::class);
        $this->call(EntrenadoresTableSeeder::class);
        $this->call(ClasesTableSeeder::class);
        $this->call(EscuelasTableSeeder::class);
        Model::reguard();
    }
}
