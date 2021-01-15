<?php


use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin Toko Online',
            'email'     => 'admin2@gmail.com',
            'password'  => bcrypt('password')
        ]);
        //factory(User::class, 50)->create();
    }
}
