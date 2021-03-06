<?php

namespace sil12\VitrineBundle\Entity;

use sil12\VitrineBundle\Entity\Product;

class Panier {
	private $contenu;

	public function __construct() {
		$this->contenu = array();
	}
	public function getContenu() {
		return $this->contenu;
	}
	public function addArticle ($articleId, $qte = 1) {
		if (array_key_exists($articleId,$this->contenu)) { 
			$this->contenu[$articleId] += $qte;
		} else {
			$this->contenu[$articleId] = $qte;
		}
	}
	public function setContenu ($articleId, $qte = 1) {
		if (array_key_exists($articleId,$this->contenu)) { 
			$this->contenu[$articleId] += $qte;
		} else {
			$this->contenu[$articleId] = $qte;
		}
	}
	public function removeArticle ($articleId, $qte = 1) {
		if (array_key_exists($articleId,$this->contenu)) {
			$this->contenu[$articleId] -= $qte;
			if ($this->contenu[$articleId] == 0)
				$this->supprimeArticle($articleId);
		}
	}
	public function supprimeArticle($articleId) {
		unset($this->contenu[$articleId]);
	}
	public function viderPanier() {
		$this->contenu = array();
	}
}

?>