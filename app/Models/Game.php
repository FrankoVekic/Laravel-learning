<?php 

namespace App\Models;

class Game {

    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Game One',
                'description'=> 'Game Description 1'
            ],
            [
                'id' => 1,
                'title' => 'Game Two',
                'description'=> 'Game Description 2'
            ]
            ];
      
    }

}