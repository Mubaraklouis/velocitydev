<?php

namespace Tests\Unit;

use App\Services\Calculator;
use PHPUnit\Framework\TestCase;


test("example test",function(){
 $sumTwo = app()->make(Calculator::class)->sum(7,2);
 $sumOne = app()->make(Calculator::class)->sum(7,2);

 $this->assertSame($sumTwo,$sumOne);

});

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}
