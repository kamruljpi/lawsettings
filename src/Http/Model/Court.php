<?php

namespace kamruljpi\lawsettings\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Court extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_cort';
	protected $fillable = ['name', 'description','is_active'];
}