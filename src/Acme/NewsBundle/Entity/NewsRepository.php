<?php

namespace Acme\NewsBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * Class NewsRepository
 * @package Acme\NewsBundle\Entity
 */
class NewsRepository extends EntityRepository
{
    /**
     * Get recent news
     * @param int $page
     * @param int $limit
     * @return Paginator
     */
    public function getRecent($page = 1, $limit = 5)
    {
        $query = $this
            ->createQueryBuilder('n')
            ->where('n.status = 1')
            ->orderBy('n.date', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery();

        return new Paginator($query);
    }
}