<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\LegalCase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method null|LegalCase find($id, $lockMode = null, $lockVersion = null)
 * @method null|LegalCase findOneBy(array $criteria, array $orderBy = null)
 * @method LegalCase[]    findAll()
 * @method LegalCase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
final class LegalCaseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LegalCase::class);
    }
}
