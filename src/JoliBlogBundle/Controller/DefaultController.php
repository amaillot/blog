<?php

namespace JoliBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}", name="ma_jolie_route")
     */
    public function indexAction(string $name)
    {
      $router = $this->get('router');
      $url = $router->generate('ma_jolie_route', ['name' => $name], UrlGeneratorInterface::ABSOLUTE_URL);
      if ($name == 'google') {
        return $this->redirect('http://google.fr');
      }elseif ($name == 'facebook') {
        return $this->redirect('http://facebook.fr');
      }elseif ($name == 'twitter') {
        return $this->redirect('http://twitter.fr');
      }else {
        return $this->render('JoliBlogBundle:Default:index.html.twig', [
          'name' => $name,
          'url' => $url
        ]);      }

    }
}
