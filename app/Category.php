<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The elements that can be mass assigned
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * A category can have multiple innovations under its name.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     */
    public function innovations()
    {
        return $this->hasMany('App\Innovation');
    }
}
