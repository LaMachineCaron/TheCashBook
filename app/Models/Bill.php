<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model {

	use SoftDeletes;

	public $timestamps = true;

	protected $fillable = ['user_id', 'totalPrice', 'title', 'description'];

	public function parts() {
		return $this->hasMany(BillPart::class);
	}

	public function owner() {
		return $this->belongsTo(User::class);
	}
}

