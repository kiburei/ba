<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Fillable elements for the table comments
     *
     * @var array
     */
    protected $fillable = ['message', 'user_id', 'chat_id'];


    /**
     * The comment belongs to a user, the user who wrote it.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    /**
     * The comment belongs to a specific chat.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chat()
    {
        return $this->belongsTo('App\Chat');
    }

}
