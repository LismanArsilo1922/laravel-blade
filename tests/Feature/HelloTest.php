<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testHello()
    {
        $this->get('/hello')->assertSeeText('Lisman');
    }

    public function testUnless()
    {
        // $this->view('unless', ['isAdmin' => true])->assertDontSeeText('Selamat Datang User');
        $this->view('unless', ['isAdmin' => false])->assertSeeText('Selamat Datang User');
    }
}
