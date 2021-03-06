<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * OrderLineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrderLineRepository extends EntityRepository
{
	public function findBoughtWith($id,$max) {

		//$orderLinesOtherProducts = null;
		$top = Array();

		$orderLines = $this->getEntityManager()
			->createQuery('SELECT ol FROM sil12VitrineBundle:OrderLine ol WHERE ol.product=:product_id ')
			->setParameter('product_id',$id)
			->getResult();
		/*echo $id;*/
		/*echo $orderLines;*/

		foreach( $orderLines as $orderLine ) {
			$orderLinesOtherProducts = $this->getEntityManager()
				->createQuery('SELECT op AS total FROM sil12VitrineBundle:OrderLine op WHERE op.orderhat=:orderhat_id AND op.product<>:product_id ORDER BY total DESC')
				->setMaxResults($max)
				->setParameters( array('orderhat_id' => $orderLine->getOrderhat()->getId(), 'product_id' => $id) )
				->getResult();

			echo count($orderLinesOtherProducts);

			foreach($orderLinesOtherProducts as $orderLineOtherProduct) {


				echo $orderLineOtherProduct->getProduct();
				array_push($top,$orderLineOtherProduct->getProduct());
			}
		}

		echo count($top);

		return $top;
	}

	public function mostBought($max) {

		$orderLines = $this->getEntityManager()
			->createQuery('SELECT ol, SUM( ol.quantity ) AS total FROM sil12VitrineBundle:OrderLine ol GROUP BY ol.product ORDER BY total DESC')
			->setMaxResults($max)
			->getResult();

		return $orderLines;
	}
}
