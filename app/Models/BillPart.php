<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillPart extends Model {

	use SoftDeletes;

	public $timestamps = true;
	public static $snakeAttributes = false;

	public function user(): BelongsTo {
		return $this->belongsTo(User::class);
	}
}
