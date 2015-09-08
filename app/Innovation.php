<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{
    protected $fillable = ['name', 'description', 'category_id', 'user_id'];

    /**
     * An innovation belongs to a category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
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
}
