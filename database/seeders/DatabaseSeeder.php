<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Bennart Gunawan',
        //     'email' => 'ben@gmail.com',
        //     'password' => bcrypt('ben123')
        // ]);
        
        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('ben123')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda dolorem ipsa nobis cum vel, incidunt velit exercitationem fugiat beatae soluta ad iusto eos aperiam suscipit dignissimos necessitatibus explicabo unde, quaerat tempore corrupti debitis provident! Sunt illo culpa quaerat magni ratione id nam placeat, alias voluptatibus quia eos accusantium quasi praesentium quas architecto esse reiciendis sed!</p><p>Tempore esse ut fuga, dolorem asperiores at perferendis incidunt accusantium corporis officiis laudantium pariatur? Quasi explicabo, provident, eos minima maiores ipsa qui alias beatae aliquam temporibus corrupti ut eveniet voluptatum vitae quo perferendis ea quae ab ipsam? Vero dolores laboriosam aliquam. Fugiat consectetur repudiandae omnis!</p>",
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda dolorem ipsa nobis cum vel, incidunt velit exercitationem fugiat beatae soluta ad iusto eos aperiam suscipit dignissimos necessitatibus explicabo unde, quaerat tempore corrupti debitis provident! Sunt illo culpa quaerat magni ratione id nam placeat, alias voluptatibus quia eos accusantium quasi praesentium quas architecto esse reiciendis sed!</p><p>Tempore esse ut fuga, dolorem asperiores at perferendis incidunt accusantium corporis officiis laudantium pariatur? Quasi explicabo, provident, eos minima maiores ipsa qui alias beatae aliquam temporibus corrupti ut eveniet voluptatum vitae quo perferendis ea quae ab ipsam? Vero dolores laboriosam aliquam. Fugiat consectetur repudiandae omnis!</p>",
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda dolorem ipsa nobis cum vel, incidunt velit exercitationem fugiat beatae soluta ad iusto eos aperiam suscipit dignissimos necessitatibus explicabo unde, quaerat tempore corrupti debitis provident! Sunt illo culpa quaerat magni ratione id nam placeat, alias voluptatibus quia eos accusantium quasi praesentium quas architecto esse reiciendis sed!</p><p>Tempore esse ut fuga, dolorem asperiores at perferendis incidunt accusantium corporis officiis laudantium pariatur? Quasi explicabo, provident, eos minima maiores ipsa qui alias beatae aliquam temporibus corrupti ut eveniet voluptatum vitae quo perferendis ea quae ab ipsam? Vero dolores laboriosam aliquam. Fugiat consectetur repudiandae omnis!</p>",
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda dolorem ipsa nobis cum vel, incidunt velit exercitationem fugiat beatae soluta ad iusto eos aperiam suscipit dignissimos necessitatibus explicabo unde, quaerat tempore corrupti debitis provident! Sunt illo culpa quaerat magni ratione id nam placeat, alias voluptatibus quia eos accusantium quasi praesentium quas architecto esse reiciendis sed!</p><p>Tempore esse ut fuga, dolorem asperiores at perferendis incidunt accusantium corporis officiis laudantium pariatur? Quasi explicabo, provident, eos minima maiores ipsa qui alias beatae aliquam temporibus corrupti ut eveniet voluptatum vitae quo perferendis ea quae ab ipsam? Vero dolores laboriosam aliquam. Fugiat consectetur repudiandae omnis!</p>",
        //     'user_id' => 2
        // ]);
    }
}
