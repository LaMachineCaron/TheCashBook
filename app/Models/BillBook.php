<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Model representing a bill book that regroup different sets of payments and bills.
 */
class BillBook extends Model
{
	use SoftDeletes;

	public static $snakeAttributes = false;
	public $timestamps = true;

	public function bills(): HasMany
	{
		return $this->hasMany(Bill::class, 'billBookId');
	}

	public function payments(): HasMany
	{
		return $this->hasMany(Payment::class, 'billBookId');
	}
}
