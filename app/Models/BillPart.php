<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BillPart
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BillPart onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BillPart withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BillPart withoutTrashed()
 * @mixin \Eloquent
 */
class BillPart extends Model {

	use SoftDeletes;

	public $timestamps = true;
}
