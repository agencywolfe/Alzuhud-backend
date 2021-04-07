<?php

namespace Seeds\Local;

use App\models\OauthClient;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 100)->create()->each(function ($user) {
            $user->save();
        });
    }
}
