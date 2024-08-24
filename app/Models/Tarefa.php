<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'flag_concluida',
        'data',
        'atividade_id'
        
    ];

    public function atividade(){
        /* Nova forma de referenciar

        Model::class */
        return $this->belongsTo(Model::class);

        /* Antiga forma
            return $this->belongsTo('App\Models\Tarefa', 'atividade_id');
        */
        }



}
