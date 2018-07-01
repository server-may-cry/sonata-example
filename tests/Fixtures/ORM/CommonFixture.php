<?php declare(strict_types=1);

namespace App\Tests\Fixtures\ORM;

use App\Entity\Client;
use App\Entity\Lawyer;
use App\Entity\LegalCase;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class CommonFixture extends AbstractFixture
{
    public function load(ObjectManager $manager) : void
    {
        $client = new Client();
        $client
            ->setFirstname('Client A firstname')
            ->setLastname('Client A lastname')
        ;
        $manager->persist($client);

        $lawyer = new Lawyer();
        $lawyer
            ->setFirstname('Lawyer A firstname')
            ->setLastname('Lawyer A lastname')
        ;
        $manager->persist($lawyer);

        $legalCase = new LegalCase();
        $legalCase
            ->setCaseDescription('LegalCase A description')
            ->setLegalField('LegalCase A field')
            ->setClient($client)
            ->setLawyer($lawyer)
        ;
        $manager->persist($legalCase);

        $manager->flush();
    }
}
