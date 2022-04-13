<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([ 
            'name' => 'Achmad Rizky',
            'username' => 'achmadrizky',
            'email' => '1achrizky@gmail.com',
            'password' => bcrypt('password'), 
        ]);
        
        // User::create([ 
        //     'name' => 'Muhammad',
        //     'email' => 'muhammad@gmail.com',
        //     'password' => bcrypt('12345'), 
        // ]);
        
        User::factory(3)->create();

        Category::create([ 
            'name' => 'Web Programming', 
            'slug' => 'web-programming',
        ]);
        
        Category::create([ 
            'name' => 'Web Design', 
            'slug' => 'web-design',
        ]);
        
        Category::create([ 
            'name' => 'Personal', 
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([ 
        //     'title' => 'Judul Pertama', 
        //     'category_id' => 1, 
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama', 
        //     'excerpt' => 'Lorem ipsum pertama', 
        //     'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quae eum similique. Tenetur nemo, asperiores voluptatum sed itaque consequatur quaerat impedit, debitis eaque soluta dicta earum dolorem quam? Veritatis illo commodi voluptatibus est. Soluta obcaecati alias eos repellat necessitatibus sed facilis. </p><p> aspernatur, eaque eveniet natus quisquam dolorum sint reprehenderit inventore blanditiis ex eius est debitis, doloremque reiciendis maxime error cum dolores. Nostrum dicta non, aperiam quae debitis placeat sunt officiis tempora in repellat unde repudiandae architecto autem, iusto mollitia aliquam vel excepturi maxime similique voluptates, eum nobis laboriosam.</p><p> Numquam corporis, fugiat cumque, dignissimos ut magnam nobis aspernatur quod odit repudiandae libero ex dolor hic sequi cum alias nisi voluptatibus aperiam delectus nam! Sequi nihil debitis ducimus quae, voluptas exercitationem quibusdam necessitatibus voluptatibus consectetur sed numquam quod iusto et blanditiis, porro atque. Ex totam delectus voluptatibus unde voluptatem, quam, deleniti libero, fuga dicta fugit esse saepe accusantium animi est aliquid doloremque?</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua', 
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua', 
        //     'excerpt' => 'Lorem ipsum pertama', 
        //     'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quae eum similique. Tenetur nemo, asperiores voluptatum sed itaque consequatur quaerat impedit, debitis eaque soluta dicta earum dolorem quam? Veritatis illo commodi voluptatibus est. Soluta obcaecati alias eos repellat necessitatibus sed facilis. </p><p> aspernatur, eaque eveniet natus quisquam dolorum sint reprehenderit inventore blanditiis ex eius est debitis, doloremque reiciendis maxime error cum dolores. Nostrum dicta non, aperiam quae debitis placeat sunt officiis tempora in repellat unde repudiandae architecto autem, iusto mollitia aliquam vel excepturi maxime similique voluptates, eum nobis laboriosam.</p><p> Numquam corporis, fugiat cumque, dignissimos ut magnam nobis aspernatur quod odit repudiandae libero ex dolor hic sequi cum alias nisi voluptatibus aperiam delectus nam! Sequi nihil debitis ducimus quae, voluptas exercitationem quibusdam necessitatibus voluptatibus consectetur sed numquam quod iusto et blanditiis, porro atque. Ex totam delectus voluptatibus unde voluptatem, quam, deleniti libero, fuga dicta fugit esse saepe accusantium animi est aliquid doloremque?</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga', 
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga', 
        //     'excerpt' => 'Lorem ipsum ke tiga', 
        //     'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quae eum similique. Tenetur nemo, asperiores voluptatum sed itaque consequatur quaerat impedit, debitis eaque soluta dicta earum dolorem quam? Veritatis illo commodi voluptatibus est. Soluta obcaecati alias eos repellat necessitatibus sed facilis. </p><p> aspernatur, eaque eveniet natus quisquam dolorum sint reprehenderit inventore blanditiis ex eius est debitis, doloremque reiciendis maxime error cum dolores. Nostrum dicta non, aperiam quae debitis placeat sunt officiis tempora in repellat unde repudiandae architecto autem, iusto mollitia aliquam vel excepturi maxime similique voluptates, eum nobis laboriosam.</p><p> Numquam corporis, fugiat cumque, dignissimos ut magnam nobis aspernatur quod odit repudiandae libero ex dolor hic sequi cum alias nisi voluptatibus aperiam delectus nam! Sequi nihil debitis ducimus quae, voluptas exercitationem quibusdam necessitatibus voluptatibus consectetur sed numquam quod iusto et blanditiis, porro atque. Ex totam delectus voluptatibus unde voluptatem, quam, deleniti libero, fuga dicta fugit esse saepe accusantium animi est aliquid doloremque?</p>',
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Empat', 
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat', 
        //     'excerpt' => 'Lorem ipsum ke empat', 
        //     'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quae eum similique. Tenetur nemo, asperiores voluptatum sed itaque consequatur quaerat impedit, debitis eaque soluta dicta earum dolorem quam? Veritatis illo commodi voluptatibus est. Soluta obcaecati alias eos repellat necessitatibus sed facilis. </p><p> aspernatur, eaque eveniet natus quisquam dolorum sint reprehenderit inventore blanditiis ex eius est debitis, doloremque reiciendis maxime error cum dolores. Nostrum dicta non, aperiam quae debitis placeat sunt officiis tempora in repellat unde repudiandae architecto autem, iusto mollitia aliquam vel excepturi maxime similique voluptates, eum nobis laboriosam.</p><p> Numquam corporis, fugiat cumque, dignissimos ut magnam nobis aspernatur quod odit repudiandae libero ex dolor hic sequi cum alias nisi voluptatibus aperiam delectus nam! Sequi nihil debitis ducimus quae, voluptas exercitationem quibusdam necessitatibus voluptatibus consectetur sed numquam quod iusto et blanditiis, porro atque. Ex totam delectus voluptatibus unde voluptatem, quam, deleniti libero, fuga dicta fugit esse saepe accusantium animi est aliquid doloremque?</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Lima', 
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quae eum similique. Tenetur nemo, asperiores voluptatum sed itaque consequatur quaerat impedit.', 
        //     'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quae eum similique. Tenetur nemo, asperiores voluptatum sed itaque consequatur quaerat impedit, debitis eaque soluta dicta earum dolorem quam? Veritatis illo commodi voluptatibus est. Soluta obcaecati alias eos repellat necessitatibus sed facilis. </p><p> aspernatur, eaque eveniet natus quisquam dolorum sint reprehenderit inventore blanditiis ex eius est debitis, doloremque reiciendis maxime error cum dolores. Nostrum dicta non, aperiam quae debitis placeat sunt officiis tempora in repellat unde repudiandae architecto autem, iusto mollitia aliquam vel excepturi maxime similique voluptates, eum nobis laboriosam.</p><p> Numquam corporis, fugiat cumque, dignissimos ut magnam nobis aspernatur quod odit repudiandae libero ex dolor hic sequi cum alias nisi voluptatibus aperiam delectus nam! Sequi nihil debitis ducimus quae, voluptas exercitationem quibusdam necessitatibus voluptatibus consectetur sed numquam quod iusto et blanditiis, porro atque. Ex totam delectus voluptatibus unde voluptatem, quam, deleniti libero, fuga dicta fugit esse saepe accusantium animi est aliquid doloremque?</p>',
        // ]);
    }
}
