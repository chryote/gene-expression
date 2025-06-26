<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sample extends Model
{
    use SoftDeletes;

    protected $table = 'samples';

    protected $fillable = [
        'gsm_id',
    ];

    public function expressions()
    {
        return $this->hasMany(Expression::class);
    }
}
