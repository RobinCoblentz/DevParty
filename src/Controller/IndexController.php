<?php

namespace App\Controller;


use App\Routing\Attribute\Route;

class IndexController extends AbstractController
{

  #[Route(path: "/contact", name: "contact", httpMethod: "GET")]
  public function contact()
  {
    echo $this->twig->render('index/contact.html.twig');
  }
  
  #[Route(path: "/", name: "home", httpMethod: "GET")]
  public function home()
  {
    echo $this->twig->render('index/home.html.twig');
  }

}
