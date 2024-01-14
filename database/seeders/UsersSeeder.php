<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usermodel;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Fakeentry;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $fake = Fakeentry::create();
        for($row=0;$row<=89;$row++){
            $user_data = new Usermodel;
            $user_data->name = $fake->name;
            $user_data->email = $fake->email;
            $user_data->password = Hash::make($fake->password);
            $user_data->phone_number = $fake->numerify('##########');
            $address = $fake->address;
            $user_data->address = "$address";
            $user_data->gender = "M";
            $user_data->save();
        }
    }
}
