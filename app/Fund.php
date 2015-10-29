<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    /**
     * Lists the fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['investor_id', 'innovation_id', 'amount', 'innovator_id', 'name'];


    /**
     *  Retrieves the investor related to the fund.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor()
    {
        return $this->belongsTo('App\Investor');
    }


    /**
     *  Retrieves the innovator related to the fund.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function innovation()
    {
        return $this->belongsTo('App\Innovation');
    }

    public function fund()
    {
        return $this->hasOne('App\Innovation');
    }

}
