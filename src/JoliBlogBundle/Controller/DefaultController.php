<?php

namespace JoliBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}/{ville}/{temps}")
     */
    public function indexAction(string $name, string $ville, int $temps): Response
    {
        return $this->render('JoliBlogBundle:Default:index.html.twig', ['name' => $name, 'ville' => $ville, 'temps' => $temps]);
    }
}
