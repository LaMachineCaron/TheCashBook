<?php
namespace Tests\Feature;

use App\Bill;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BillFeatureTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @tests
     */
    public function a_signed_in_user_can_list_his_bill() {
        $user = factory(User::class)->create();
        $this->actingAs($user);

        factory(Bill::class)->create();
        $userBill = factory(Bill::class)->create(['user_id' => $user->id]);

        $this->get('api/bill')->assertExactJson([$userBill->toArray()]);
    }
}
