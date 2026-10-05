<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'mata_kuliah';

    protected $guarded = ['id'];

    protected $keyType = 'string';

    public $incrementing = false;
}
