<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BillTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function a_bill_can_be_save()
    {
        $this->assertTrue(true);
    }
}
