<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
	public function findAllOrderedByName() {
		return $this->getEntityManager()
					->createQuery('SELECT p FROM sil12VitrineBundle:Product p ORDER BY p.name ASC')
					->getResult();
	}
}