<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    protected $fillable = ['title','description','entrega','user_id'];


    public function user(){
        return belongsTo("App\User");
    }
}
