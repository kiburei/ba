<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{

    /**
     * The fields that can be mass assigned
     * @var array
     */
    protected $fillable = [

        'innovationTitle',
        'innovationDescription',
        'innovationFund',
        'category_id',
        'fund_id',
        'user_id',
        'fundingStatus'
    ];

    /**
     * An innovation belongs to a category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    /**
     * An innovation belongs to a specific user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * An innovation can have multiple chats
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chats()
    {
        return $this->hasMany('App\Chat');
    }

    public function fund()
    {
        return $this->hasOne('App\Fund');
    }
}
