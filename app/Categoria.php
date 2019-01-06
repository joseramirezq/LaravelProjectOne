<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //declarar a que tabla hara referencia 
    protected $table ='categoria';
    protected $primaryKey='idcategoria';

    public $timestamps=false;

    //son los demas campos que se utilizan 
    protected $fillable=[
        'nombre',
        'descripcion',
        'condicion'
    ];

    protected $guarder=[
        
    ];


}
