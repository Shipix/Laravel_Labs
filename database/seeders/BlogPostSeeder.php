<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blog_posts")->inser(
            [
                'img'=>'img/blog/blog-1.jpg',
                'titre'=>'Just a simple blog post',
                'categorie'=>'Loredana Papp',
                'tag'=>'Inspiration',
                'commentaire'=>'',
                'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst.',
            ],
            [
                'img'=>'img/blog/blog-1.jpg',
                'titre'=>'Just a simple blog post',
                'categorie'=>'Design',
                'tag'=>'Food',
                'commentaire'=>'',
                'texte'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat reprehenderit asperiores veniam! Temporibus aperiam doloremque aspernatur beatae unde hic, expedita labore magnam voluptas explicabo exercitationem nisi. Quidem totam unde magni facere quis consectetur laborum fugit ipsa doloribus harum sapiente quibusdam corrupti mollitia, ipsum, excepturi perferendis? Repellat similique debitis animi pariatur tenetur? Qui corrupti dignissimos ea dicta, id at rerum officia nobis ipsa aspernatur, esse maxime sed perferendis fugit! Voluptatem minima repellat nam cupiditate, laudantium nulla voluptatum blanditiis eaque impedit quae quidem ipsa autem! Architecto numquam corrupti explicabo asperiores voluptatibus recusandae, enim laboriosam suscipit animi dolor praesentium incidunt accusantium sequi optio.',
            ],
            [
                'img'=>'img/blog/blog-1.jpg',
                'titre'=>'',
                'categorie'=>'',
                'tag'=>'',
                'commentaire'=>'',
                'texte'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque alias, iure saepe ratione quas vero quae quis velit corrupti natus. Vitae esse nesciunt blanditiis repellat provident nam quibusdam ex cum, iste illo nisi culpa tenetur saepe deserunt laboriosam placeat eius delectus, perspiciatis aut ab? Saepe necessitatibus harum omnis laudantium at?',
            ],
            [
                'img'=>'img/blog/blog-1.jpg',
                'titre'=>'',
                'categorie'=>'',
                'tag'=>'',
                'commentaire'=>'',
                'texte'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque alias, iure saepe ratione quas vero quae quis velit corrupti natus. Vitae esse nesciunt blanditiis repellat provident nam quibusdam ex cum, iste illo nisi culpa tenetur saepe deserunt laboriosam placeat eius delectus, perspiciatis aut ab? Saepe necessitatibus harum omnis laudantium at?',
            ],
        );
    }
}
