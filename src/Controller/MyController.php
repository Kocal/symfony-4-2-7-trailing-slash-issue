<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MyController {
  
  /**
   * @Route("/foo")
   */
  public function foo() {
    return new Response('foo'); 
  }
  
  /**
   * @Route("/bar.{_format}", defaults={"_format"="html"})
   */
  public function bar() {
    return new Response('bar'); 
  }
}
