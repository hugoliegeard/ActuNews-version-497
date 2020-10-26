<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * Page / Action : Accueil
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * Page / Action : Contact
     */
    public function contact()
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * Page / Action : Categorie
     * Permet d'afficher les articles d'une catégorie
     * @Route("/{alias}", name="default_category", methods={"GET"})
     */
    public function category($alias)
    {
        return $this->render('default/category.html.twig');
    }

    /**
     * Page / Action : Article
     * Permet d'afficher un article du site
     * @Route("/{category}/{alias}_{id}.html", name="default_article", methods={"GET"})
     */
    public function post($id, $category, $alias)
    {
        # URL : https://localhost:8000/politique/couvre-feu-quand-la-situation-sanitaire-s-ameliorera-t-elle_14155614.html
        return $this->render('default/post.html.twig');
    }


}