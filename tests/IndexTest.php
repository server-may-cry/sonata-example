<?php declare(strict_types=1);

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexTest extends WebTestCase
{
    public function testIndexPage() : void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertSame(302, $client->getResponse()->getStatusCode());
    }
}
