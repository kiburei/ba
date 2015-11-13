<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'more_details','userCategory', 'terms'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * Retrieves the investor details for the user, if he/she is an investor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function investor()
    {
        return $this->hasOne('App\Investor');
    }

    /**
     * Retrieves the innovator details for the user, if he/she is an innovator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function innovator()
    {
        return $this->hasOne('App\Innovator');
    }

    /**
     * Checks if the user is an investor
     *
     * @return bool
     */
    public function isInvestor()
    {
        if($this->userCategory == 2)
            return true;

        return false;
    }

    /**
     * Checks if the user is an innovator.
     *
     * @return bool
     */
    public function isInnovator()
    {
        return !$this->investor() && !$this->isAdmin();
    }

    public function isAdmin()
    {
        if($this->userCategory == 3)
            return true;

        return false;
    }

    public function isMother()
    {
        if($this->userCategory == 4)
            return true;

        return false;
    }

    /**
     * One to may user innovation relationship
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     */
    public function innovation()
    {
        return $this->hasMany('\App\Innovation');
    }

    public function fund()
    {
        return $this->hasMany('App\Fund');
    }
}
