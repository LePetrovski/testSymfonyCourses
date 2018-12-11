<?php
/**
 * Created by PhpStorm.
 * User: Petrovski
 * Date: 11/12/2018
 * Time: 10:25
 */

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
  /**
   * @Route("/", name="app_homepage")
   */
  public function homepage()
  {
    return $this->render('article/homepage.html.twig');
  }

  /**
   * @Route("/news/{slug}", name="article_show")
   */
  public function show($slug)
  {
    $comments = [
      'I ate a normal rock once. It did NOT taste like bacon!',
      'Woohoo! I\'m going on an all-asteroid diet!',
      'I like bacon too! Buy some from my site! bakinsomebacon.com',
    ];

    return $this->render('article/show.html.twig',[
        'title' => ucwords(str_replace("-", " ", $slug)),
        'slug' => $slug,
        'comments' => $comments
    ]);
  }


  /**
   * @Route("/news/{slug}/hearts", name="article_toggle_heart", methods={"POST"})
   */
  public function toggleArticleHeart($slug, LoggerInterface $logger)
  {
    $logger->info('Article is being hearted');

    return $this->json(['hearts' => random_int(5,100)]);
  }
}