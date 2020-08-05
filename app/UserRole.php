<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserRole
 *
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRole whereUserId($value)
 * @mixin \Eloquent
 */
class UserRole extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;
}
