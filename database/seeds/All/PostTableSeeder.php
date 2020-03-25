<?php

use Illuminate\Database\Seeder;
use App\Models\Post;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Tạo dữ liệu giả :)) 1 là chạy ở đây 2 là chạy ngoài cmd php artisan tinker
        // factory(Post::class, 3)->create();
    }
}
