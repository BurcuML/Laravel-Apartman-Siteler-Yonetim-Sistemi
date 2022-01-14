<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;


    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
//Alttakine belongsto üsttekine hasmany diyoruz, bu şekilde tanımlayınca bu bir üstteki tablodan direk bağlanmışız gibi alan çekebiliyoruz
