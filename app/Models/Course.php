<?php

namespace App\Models;

use App\Models\Traits\UuidTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, UuidTraits;

    public $incrementing = false;
    protected $keyType = 'uuid';
    protected $fillable = ['nome', 'descricao', 'imagem'];

    public function modules()
    {
        return $this->hasMany(Modulo::class);
    }


}
