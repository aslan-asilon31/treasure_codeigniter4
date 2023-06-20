<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new User();

		$user_object->insertBatch([
			[
				"name" => "aslan admin",
				"email" => "aslanadmin@gmail.com",
				"password" => password_hash("aslanadmin", PASSWORD_DEFAULT),
				"status" => 1,
				"role" => "admin",
				"image" => "img.png",
			],
			[
				"name" => "aslan user",
				"email" => "aslanuser@gmail.com",
				"password" => password_hash("aslanuser", PASSWORD_DEFAULT),
				"status" => 1,
				"role" => "user",
				"image" => "img.png",
			],
			[
				"name" => "aslan editor",
				"email" => "aslaneditor@gmail.com",
				"password" => password_hash("aslaneditor", PASSWORD_DEFAULT),
				"status" => 1,
				"role" => "editor",
				"image" => "img.png",
			],
		]);
    }
}
