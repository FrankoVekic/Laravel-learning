<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function find($id){
        
        $games = self::all();

        foreach($games as $game){
            if($game['id'] == $id){
                return $game;
            }
        }
    }

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request()->tag . '%');
        }

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request()->search . '%')
            ->orWhere('description', 'like', '%' . request()->search . '%')
            ->orWhere('tags', 'like', '%' . request()->search . '%');
        }
    }
}
