<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Buku::create([
            'name' => 'samepe',
            'category_id' => 1,
            'deskripsi' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum dolor quod laboriosam ipsa vel accusantium voluptatum tenetur sunt rem eius magnam error, eaque aliquam libero. Quo saepe omnis similique at porro est fugit necessitatibus? Accusantium itaque nobis eaque, dolore non ex nihil atque consequatur nulla id quisquam quo incidunt iure sunt ab ut deserunt unde illum officiis beatae similique ratione. Provident eaque cumque et dolore ullam, temporibus nobis nam fugit consectetur, eveniet dolores illo consequatur delectus sequi iste, laboriosam magni a nisi debitis exercitationem sapiente quo iusto officia? Nihil aliquid blanditiis maxime quidem voluptas provident ex, quas fugit suscipit. Laudantium?'
        ]);
        Buku::create([
            'name' => 'joyboy',
            'category_id' => 2,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae qui consequuntur quisquam, excepturi commodi possimus autem laudantium amet nam nemo corrupti incidunt nesciunt adipisci expedita? Voluptatum accusantium ipsa expedita illum, earum inventore fuga quibusdam eveniet molestiae quae iste facere, aut dignissimos placeat, ratione cumque sed animi reprehenderit qui quod. Voluptatibus beatae, accusantium animi itaque cumque perspiciatis necessitatibus doloremque sequi libero dolorem saepe fugit aspernatur placeat adipisci molestias, recusandae eaque nesciunt laborum dolorum nulla totam. Ex nobis eos eligendi ullam omnis.'
        ]);
        Buku::create([
            'name' => 'mamadolay',
            'category_id' => 2,
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis impedit molestiae incidunt. Minima, accusamus? Harum quos architecto dolores itaque, quaerat voluptate minima eaque quae accusantium! Cum rem rerum iusto sed?'
        ]);
        Buku::create([
            'name' => 'lacalchill',
            'category_id' => 1,
            'deskripsi' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum iste odio nemo inventore ab, quia voluptatem, veritatis maiores quaerat explicabo doloribus, a animi labore impedit eum voluptatibus. Voluptatibus, distinctio fugit'
        ]);

        
        Category::create(
            [
                'name' => 'web programing',
            ]
        );

        Category::create(
            [
                'name' => 'web design',
            ]
        );

        Category::create(
            [
                'name' => 'personal',
            ]
        );
    }
}
