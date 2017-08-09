<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Model representing a payment made (already paid) from one user to another.
 */
class Payment extends Model
{
	public $timestamps = true;
	public static $snakeAttributes = false;

	public function userFrom(): BelongsTo {
		return $this->belongsTo(User::class, 'user_from');
	}

	public function userTo(): BelongsTo {
		return $this->belongsTo(User::class, 'user_to');
	}
}
