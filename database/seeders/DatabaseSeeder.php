<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use PharIo\Manifest\Email;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Daffaiz No',
        //     'email' => 'naufal@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Faiz No',
        //     'email' => 'faizno@gmail.com',
        //     'password' => bcrypt('123')
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
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(30)->create();

            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos,',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos, nemo optio, quia in. Eveniet at, corrupti ipsam consectetur, eum ab voluptatem est quidem quos qui, consequuntur optio natus maiores illo. Nostrum cupiditate quod omnis veniam optio ullam assumenda rem similique, magnam odio molestiae voluptate exercitationem inventore deserunt temporibus eos?</p><p> Ipsam nisi excepturi at quaerat blanditiis aspernatur labore quod, alias mollitia eius! Iste expedita quisquam officiis, vitae necessitatibus quidem repellat corrupti aspernatur totam amet dicta saepe tempore. Eaque, incidunt. Voluptates numquam reiciendis odio magnam. Amet neque necessitatibus, qui labore ratione culpa nemo inventore commodi numquam laudantium fugiat corporis error eligendi rem quo quasi sint temporibus est perferendis accusamus voluptas expedita dolore maiores?</p><p> Sed aspernatur praesentium quos sapiente necessitatibus officia facere ducimus porro ratione cupiditate perspiciatis, cumque repudiandae ad non possimus sit ipsum dicta delectus expedita eaque tempora magni laudantium voluptatibus? Dolorum sit molestiae saepe possimus nisi, cum eligendi fugit minima accusamus, vero assumenda ut incidunt doloribus distinctio deleniti mollitia enim soluta delectus ratione vitae. Inventore pariatur recusandae ex provident, consequatur harum enim quis similique, laborum architecto debitis.</p>',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos,',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos, nemo optio, quia in. Eveniet at, corrupti ipsam consectetur, eum ab voluptatem est quidem quos qui, consequuntur optio natus maiores illo. Nostrum cupiditate quod omnis veniam optio ullam assumenda rem similique, magnam odio molestiae voluptate exercitationem inventore deserunt temporibus eos?</p><p> Ipsam nisi excepturi at quaerat blanditiis aspernatur labore quod, alias mollitia eius! Iste expedita quisquam officiis, vitae necessitatibus quidem repellat corrupti aspernatur totam amet dicta saepe tempore. Eaque, incidunt. Voluptates numquam reiciendis odio magnam. Amet neque necessitatibus, qui labore ratione culpa nemo inventore commodi numquam laudantium fugiat corporis error eligendi rem quo quasi sint temporibus est perferendis accusamus voluptas expedita dolore maiores?</p><p> Sed aspernatur praesentium quos sapiente necessitatibus officia facere ducimus porro ratione cupiditate perspiciatis, cumque repudiandae ad non possimus sit ipsum dicta delectus expedita eaque tempora magni laudantium voluptatibus? Dolorum sit molestiae saepe possimus nisi, cum eligendi fugit minima accusamus, vero assumenda ut incidunt doloribus distinctio deleniti mollitia enim soluta delectus ratione vitae. Inventore pariatur recusandae ex provident, consequatur harum enim quis similique, laborum architecto debitis.</p>',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Kedua',
            //     'slug' => 'judul-kedua',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos,',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos, nemo optio, quia in. Eveniet at, corrupti ipsam consectetur, eum ab voluptatem est quidem quos qui, consequuntur optio natus maiores illo. Nostrum cupiditate quod omnis veniam optio ullam assumenda rem similique, magnam odio molestiae voluptate exercitationem inventore deserunt temporibus eos?</p><p> Ipsam nisi excepturi at quaerat blanditiis aspernatur labore quod, alias mollitia eius! Iste expedita quisquam officiis, vitae necessitatibus quidem repellat corrupti aspernatur totam amet dicta saepe tempore. Eaque, incidunt. Voluptates numquam reiciendis odio magnam. Amet neque necessitatibus, qui labore ratione culpa nemo inventore commodi numquam laudantium fugiat corporis error eligendi rem quo quasi sint temporibus est perferendis accusamus voluptas expedita dolore maiores?</p><p> Sed aspernatur praesentium quos sapiente necessitatibus officia facere ducimus porro ratione cupiditate perspiciatis, cumque repudiandae ad non possimus sit ipsum dicta delectus expedita eaque tempora magni laudantium voluptatibus? Dolorum sit molestiae saepe possimus nisi, cum eligendi fugit minima accusamus, vero assumenda ut incidunt doloribus distinctio deleniti mollitia enim soluta delectus ratione vitae. Inventore pariatur recusandae ex provident, consequatur harum enim quis similique, laborum architecto debitis.</p>',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ketiga',
            //     'slug' => 'judul-ketiga',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos,',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos, nemo optio, quia in. Eveniet at, corrupti ipsam consectetur, eum ab voluptatem est quidem quos qui, consequuntur optio natus maiores illo. Nostrum cupiditate quod omnis veniam optio ullam assumenda rem similique, magnam odio molestiae voluptate exercitationem inventore deserunt temporibus eos?</p><p> Ipsam nisi excepturi at quaerat blanditiis aspernatur labore quod, alias mollitia eius! Iste expedita quisquam officiis, vitae necessitatibus quidem repellat corrupti aspernatur totam amet dicta saepe tempore. Eaque, incidunt. Voluptates numquam reiciendis odio magnam. Amet neque necessitatibus, qui labore ratione culpa nemo inventore commodi numquam laudantium fugiat corporis error eligendi rem quo quasi sint temporibus est perferendis accusamus voluptas expedita dolore maiores?</p><p> Sed aspernatur praesentium quos sapiente necessitatibus officia facere ducimus porro ratione cupiditate perspiciatis, cumque repudiandae ad non possimus sit ipsum dicta delectus expedita eaque tempora magni laudantium voluptatibus? Dolorum sit molestiae saepe possimus nisi, cum eligendi fugit minima accusamus, vero assumenda ut incidunt doloribus distinctio deleniti mollitia enim soluta delectus ratione vitae. Inventore pariatur recusandae ex provident, consequatur harum enim quis similique, laborum architecto debitis.</p>',
            //     'category_id' => 2,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Keempat',
            //     'slug' => 'judul-keempat',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos,',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem quam id magni nihil tenetur maiores ullam facere sunt. Quis officia accusamus rerum? Facere culpa nostrum omnis quod modi tempore illo odio dignissimos, nemo optio, quia in. Eveniet at, corrupti ipsam consectetur, eum ab voluptatem est quidem quos qui, consequuntur optio natus maiores illo. Nostrum cupiditate quod omnis veniam optio ullam assumenda rem similique, magnam odio molestiae voluptate exercitationem inventore deserunt temporibus eos?</p><p> Ipsam nisi excepturi at quaerat blanditiis aspernatur labore quod, alias mollitia eius! Iste expedita quisquam officiis, vitae necessitatibus quidem repellat corrupti aspernatur totam amet dicta saepe tempore. Eaque, incidunt. Voluptates numquam reiciendis odio magnam. Amet neque necessitatibus, qui labore ratione culpa nemo inventore commodi numquam laudantium fugiat corporis error eligendi rem quo quasi sint temporibus est perferendis accusamus voluptas expedita dolore maiores?</p><p> Sed aspernatur praesentium quos sapiente necessitatibus officia facere ducimus porro ratione cupiditate perspiciatis, cumque repudiandae ad non possimus sit ipsum dicta delectus expedita eaque tempora magni laudantium voluptatibus? Dolorum sit molestiae saepe possimus nisi, cum eligendi fugit minima accusamus, vero assumenda ut incidunt doloribus distinctio deleniti mollitia enim soluta delectus ratione vitae. Inventore pariatur recusandae ex provident, consequatur harum enim quis similique, laborum architecto debitis.</p>',
            //     'category_id' => 2,
            //     'user_id' => 2
            // ]);
    }

}