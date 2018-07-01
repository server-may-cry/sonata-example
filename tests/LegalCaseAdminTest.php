<?php declare(strict_types=1);

namespace App\Tests;

use App\Tests\Fixtures\ORM\CommonFixture;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class LegalCaseAdminTest extends WebTestCase
{
    public function testList() : void
    {
        $this->loadFixtures(
            [
                CommonFixture::class,
            ]
        );
        $client = static::createClient();
        $client->request('GET', '/admin/app/legalcase/list');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testCreate() : void
    {
        $this->loadFixtures(
            [
                CommonFixture::class,
            ]
        );
        $client = static::createClient();
        $client->request('GET', '/admin/app/legalcase/create');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testEdit() : void
    {
        $this->loadFixtures(
            [
                CommonFixture::class,
            ]
        );
        $client = static::createClient();
        $client->request('GET', '/admin/app/legalcase/1/edit');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }
}
