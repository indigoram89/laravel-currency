<?php

namespace Indigoram89\Currency;

use Indigoram89\Fetchable\Fetchable;
use Illuminate\Database\Eloquent\Model;
use Indigoram89\Translatable\Translatable;

class Currency extends Model
{
    use Fetchable, Translatable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laravel_currencies';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Translatable attributes.
     *
     * @var array
     */
    protected $translatable = ['name'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['iso' => 'integer'];

    /**
     * Get an attributes for search a record in the database.
     *
     * @return array
     */
    public function fetchableAttributes() : array
    {
        return [
            'code' => class_basename($this),
            'iso' => $this->getIso(),
        ];
    }

    /**
     * Get an attributes for create a record in the database.
     *
     * @return array
     */
    public function fetchableValues() : array
    {
        return [
            'name' => $this->getName(),
        ];
    }
}
