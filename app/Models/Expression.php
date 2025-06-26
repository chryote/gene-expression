<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Expression extends Model
{
    use SoftDeletes;

    protected $table = 'expressions';

    protected $fillable = [
        'gene_id',
        'sample_id',
        'expression_value',
    ];


    public function gene()
    {
        return $this->belongsTo(Gene::class);
    }

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
