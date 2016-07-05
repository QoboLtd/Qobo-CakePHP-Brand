<?php
namespace App\Test\TestCase\View;

use Cake\TestSuite\IntegrationTestCase;

class DevelopByTest extends IntegrationTestCase
{

    public function testView()
    {
        $this->get('/');
        $this->assertResponseContains('develop-by', 'Website doesn\'t has a develop by link');
    }
}
