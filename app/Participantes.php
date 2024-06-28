<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    

    protected $connection = 'mysql';

    protected $table = 'participantes';

    public $incrementing = true;

    public $timestamps = true;
    
    protected $fillable=[
        'ID',
        'NOME',
        'TELEFONE',
        'created_at'
    ];
    
    
       
    
}
