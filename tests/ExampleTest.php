<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    

    public function testCalculate()
    {
        $this->assertSame(2, 1 + 1);
    }

    public function testFailure()
    {
        $this->assertArrayHasKey('foo', [
            'bar' => 'baz',
            'foo' => 'dsdd',
            'dsdd' => 'dsddsdds',



        ]);
    }

}
