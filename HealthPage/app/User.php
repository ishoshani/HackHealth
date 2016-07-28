<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Modules\Tasks\Models\Task;
use App\Modules\Logs\Models\Log;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tasks(){
        return $this->hasMany(Task::class);

    }
    public function logs(){
        return $this->hasMany(Log::class);
    }
}
