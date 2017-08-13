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
	protected $fillable = ['billBookId', 'userFrom', 'userTo', 'amount'];

	public function uFrom(): BelongsTo
	{
		return $this->belongsTo(User::class, 'userFrom');
	}

	public function uTo(): BelongsTo
	{
		return $this->belongsTo(User::class, 'userTo');
	}

	public function billBook(): BelongsTo
	{
		return $this->belongsTo(BillBook::class, 'billBookId');
	}
}
