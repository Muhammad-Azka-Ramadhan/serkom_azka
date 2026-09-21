<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ekstrakurikuler extends Model
{
    //
    use HasUuids;

    protected $table = 'ekstrakuriler';
    protected $primaryKey = 'id_eskul';
    protected $keyType = 'string';

    protected $guarded = [];
}
