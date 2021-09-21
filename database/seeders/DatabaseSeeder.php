<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create(['name' => 'Ahmed', 'email' => 'ahmed@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789'), 'remember_token' => Str::random(10),]);
        User::create(['name' => 'Mostafa', 'email' => 'mostafa@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789'), 'remember_token' => Str::random(10),]);
        User::create(['name' => 'Osama', 'email' => 'osama@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789'), 'remember_token' => Str::random(10),]);
        User::create(['name' => 'Shawky', 'email' => 'shawky@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789'), 'remember_token' => Str::random(10),]);


        Conversation::create(['name' => 'Friends Group', 'uuid' => Str::uuid(), 'user_id' => 1,]);
        Conversation::create(['name' => 'Work Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4),]);
        Conversation::create(['name' => 'Family Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4),]);
        Conversation::create(['name' => 'Study Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4),]);
        Conversation::create(['name' => 'Nerds Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4),]);


        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 2, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 2, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 5, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now(),]);
        DB::table('conversation_user')->insert(['conversation_id' => 5, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),]);
    }
}
