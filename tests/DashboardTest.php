<?php declare(strict_types=1);

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardTest extends WebTestCase
{
    public function testAdminIndexPage() : void
    {
        $client = static::createClient();
        $client->request('GET', '/admin');

        $this->assertSame(301, $client->getResponse()->getStatusCode());
    }

    public function testAdminDashboradPage() : void
    {
        $client = static::createClient();
        $client->request('GET', '/admin/dashboard');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }
}
