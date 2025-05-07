<?php
namespace App\Models;

class Post{
public static function all() {
    return [
        [
          'id' => 1,
          'slug' => 'Sang-Pemuja-Rahasia',
          'title' => 'Sang Pemuja Rahasia',
          'author' => 'Riyan Wardhana',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Nobis, fugit unde? A, ullam ad. Quasi, cupiditate! Cumque incidunt tenetur voluptatem eius, 
                        error earum blanditiis odit minima aspernatur, ducimus, nam consectetur?'
          ],
          [
          'id' => 2,
          'slug' => 'Sang-Pengagum-Rahasia',
          'title' => 'Sang Pengagum Rahasia',
          'author' => 'Riyan Wardhana',
          'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Repudiandae, repellendus? Ducimus ea expedita perferendis dicta inventore voluptates ipsum, 
                        explicabo ex atque impedit obcaecati quasi! Ex architecto repellendus fugiat distinctio suscipit.'
            ]
            ];
 }
}