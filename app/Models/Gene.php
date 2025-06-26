<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Gene extends Model
{
    use SoftDeletes;

    protected $table = 'genes';

    protected $fillable = [
        'probe_id',
    ];

     
    public function expressions()
    {
        return $this->hasMany(Expression::class);
    }
}
