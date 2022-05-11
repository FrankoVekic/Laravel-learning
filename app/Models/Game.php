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
                'id' => 2,
                'title' => 'Game Two',
                'description'=> 'Game Description 2'
            ]
            ];
    }

    public static function find($id){
        
        $games = self::all();

        foreach($games as $game){
            if($game['id'] == $id){
                return $game;
            }
        }
    }
}