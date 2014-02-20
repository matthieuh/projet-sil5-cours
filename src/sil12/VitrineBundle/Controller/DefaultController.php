<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sil12\VitrineBundle\Entity\Panier;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $mostBought = $this->getDoctrine()
            ->getRepository('sil12VitrineBundle:OrderLine')
            ->mostBought(3);

        $lastAdd = $this->getDoctrine()
            ->getRepository('sil12VitrineBundle:Product')
            ->lastAdd(3);

        return $this->render('sil12VitrineBundle:Default:index.html.twig', 
            array('mostBought' => $mostBought, 'lastAdd' => $lastAdd)
        );
    }

    public function mentionsAction()
    {
        return $this->render('sil12VitrineBundle:Default:mentions.html.twig');
    }

    public function catalogueAction()
    {

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('sil12VitrineBundle:Category')
                        ->findAll();

        return $this->render('sil12VitrineBundle:Default:catalogue.html.twig',
			array('categories' => $categories)
		);
    }

    public function articlesParCategorieAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('sil12VitrineBundle:Product')
                        ->findByCategory($id);

        return $this->render('sil12VitrineBundle:Default:articlesParCategorie.html.twig',
            array('products' => $products)
        );
    }

    public function chapeauAction($id,$nb)
    {
        $em = $this->getDoctrine()->getManager();
        $chapeaux = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($id);

        $repository = $this->getDoctrine()
            ->getRepository('sil12VitrineBundle:OrderLine');

        //$boughtWith = $repository->findBoughtWith($id,3);
        $boughtWith =  null;

        $panier = new Panier();

        return $this->render('sil12VitrineBundle:Default:chapeau.html.twig',
            array('chapeau' => $chapeaux, 'boughtWith' => $boughtWith )
        );
    }

    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new Response('Produit créé avec id '.$product->getId());
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->Manager();
        $product = $em->getRepository('sil12VitrineBundle:Product')->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }

        $product->setName('New product name!');
        $em->flush();

        return $this->redirect($this->generateUrl('homepage'));
    }

    public function showAction($id)
    {
        $product = $this->getDoctrine()->getManager()
                        ->getRepository('sil12VitrineBundle:Product')
                        ->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé avec id '.$id);
        }

        // faire quelque chose... Par exemple envoyer l'objet $product à un template
    }

    public function myOrdersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();

        $client = $this->getUser();

        $entities = $em->getRepository('sil12VitrineBundle:Orderhat')->findByClient($client);

        return $this->render('sil12VitrineBundle:Default:myorders.html.twig', array(
            'entities' => $entities,
        ));
    }

}
