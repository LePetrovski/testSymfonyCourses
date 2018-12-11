<?php
/**
 * Created by PhpStorm.
 * User: Petrovski
 * Date: 11/12/2018
 * Time: 10:25
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
    return new Response('Hello new page, you look pretty !');
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug)
  {
    return new Response(sprintf(
      'Futur page to show the article %s',
      $slug
    ));
  }
}