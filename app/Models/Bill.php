<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Bill
 *
 * @property int $id
 * @property int $user_id
 * @property float $totalPrice
 * @property string $title
 * @property string|null $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\User $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BillPart[] $parts
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bill onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bill whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bill withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bill withoutTrashed()
 * @mixin \Eloquent
 */
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

