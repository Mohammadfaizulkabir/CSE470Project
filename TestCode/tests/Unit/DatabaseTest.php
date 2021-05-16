<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertDatabaseHas('studentinfo',[
            'FIRSTNAME'=>"steve",'LASTNAME'=>"khan",'ADDRESS'=>"Dhaka",'AGE'=>"20",'BOOKNAME'=>"Harrypotter1",'PHONENUMBER'=>"4567"
        ]);
    }
}
