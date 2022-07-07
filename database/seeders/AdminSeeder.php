<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'name'=>'admin',
            'phone_num'=>'123456789',
            'email'=>'aa@app.com',
            'address'=>'knsfdsd',
            'identification_num'=>'123456789',
            'password'=>Hash::make(12345),
        ]);
    }
}
