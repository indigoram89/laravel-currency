<?php

namespace Indigoram89\Currency\Test;

use Indigoram89\Currency\Currency;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
