<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model {

	use SoftDeletes;

	public $timestamps = true;
	public static $snakeAttributes = false;

	protected $fillable = ['user_id', 'billBookId', 'totalPrice', 'title', 'description'];

	public function parts() {
		return $this->hasMany(BillPart::class);
	}

	public function billBook(): BelongsTo
	{
		return $this->belongsTo(BillBook::class, 'billBookId');
	}

	public function user() {
		return $this->belongsTo(User::class);
	}
}

