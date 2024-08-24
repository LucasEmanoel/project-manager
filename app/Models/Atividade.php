<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status',
        'data',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(Model::class);
        //return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function tarefas(){
        return $this->hasMany('App\Models\Tarefa');
    }
}
