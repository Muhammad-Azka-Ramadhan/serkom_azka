<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    //
    use HasUuids;
    
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $keyType = 'string';

    protected $guarded = [];
}
