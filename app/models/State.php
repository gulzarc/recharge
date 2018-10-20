<?php

namespace App\models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	use SoftDeletes;
   	protected $fillable = [
        'state_id', 'state_name',];
    protected $dates = ['deleted_at'];
}
