<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    /**
     * Fillable elements for the table chats
     *
     * @var array
     */
    protected $fillable = ['investor_id', 'innovation_id', 'start_message'];


    /**
     * A single chat can have multiple comments in it.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function innovation()
    {
        return $this->belongsTo('App\Innovation');
    }
}
