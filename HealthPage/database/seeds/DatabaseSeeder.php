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
        // $this->call(UsersTableSeeder::class);
        //DB::table('users')->insert([
        //	'name' => 'ido',
          //  'email' => 'idoshoshani'.'@gmail.com',
            //'password' => bcrypt('espeon123')]);
        DB::table('users')->insert([
        	'name' => 'ido2',
            'email' => 'ido2shoshani'.'@gmail.com',
            'password' => bcrypt('espeon123')]);
    }
}
