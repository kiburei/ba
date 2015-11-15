<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The table used by this model
     * @var string
     */
    protected $table = 'messages';

    /**
     * The fields that can be mass assigned
     * @var array
     */

    protected $fillable = [

        'title',
        'sender_id',
        'receiver_id',
        'chat_id'

    ];

    /**
     * A message belongs to a chat
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chat()
    {
        return $this->belongsTo('App\Chat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'sender_id');
    }

}
