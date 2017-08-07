<?php

namespace Tests\Feature;

use App\Bill;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @tests
     */
    public function a_logged_in_user_can_create_a_bill() {
        $user = factory(User::class)->create();
        $bill = factory(Bill::class)->raw(['user_id' => $user->id]);

        $this->actingAs($user)
             ->post('/api/bill', $bill);

        $this->assertDatabaseHas('bills', $bill);

        }
}
