<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\Lawyer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method null|Lawyer find($id, $lockMode = null, $lockVersion = null)
 * @method null|Lawyer findOneBy(array $criteria, array $orderBy = null)
 * @method Lawyer[]    findAll()
 * @method Lawyer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
final class LawyerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Lawyer::class);
    }
}
