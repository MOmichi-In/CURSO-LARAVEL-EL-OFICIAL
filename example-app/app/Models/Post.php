<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected function casts(): array 
    {
        return [
            'published_at' => 'datetime',
        ];
    }
    //esta funcion lo que hace es que el model bingding interprete de forma automatica el parametro que queremos extraer de la base de datos
    public function getRouteKeyName(){
        return 'slug';
    }

    protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
    ];
// en este modelo interpreta de forma autonoma que existe una tabla en prular dentro de la base de datos.
//     protected $table = 'posts';
//     protected function title(): Attribute
//     {
//         return Attribute::make(
//             set: function ($value) {
//                 return strtolower($value);
//             },
//             get: function ($value) {
//                 return ucfirst($value);
//             }
//         );
//     }

//     se hace el uso de un cast para definir el manejo de un tipo de dato en especifico
//     protected function casts(): array {
//         return [
//             'published_at' => 'datetime',
//             'is_active' => 'boolean',
//         ];

//     }
// }
}