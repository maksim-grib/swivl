<?php

namespace Acme\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Acme\NewsBundle\Entity\NewsRepository;
use Acme\NewsBundle\Entity\News;

/**
 * Class NewsController
 *
 * @package Acme\NewsBundle\Controller
 */
class NewsController extends Controller
{
    /**
     * List all articles
     *
     * @Route("/news{format}", requirements={"format" = "\.xml|html"}, defaults={"format" = ".html"})
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(Request $request)
    {
        $page = $request->query->getInt('page', 1);

        /** @var NewsRepository $newsRepository */
        $newsRepository = $this
            ->getDoctrine()
            ->getRepository('AcmeNewsBundle:News');

        $news = $newsRepository->getRecent($page, 5);

        $response = new Response();

        if ('.xml' === $format = $request->attributes->get('format')) {
            $response->headers->set('Content-Type', 'application/xml');
        }

        return $this->render(sprintf('AcmeNewsBundle:News:list%s.twig', $format), array(
            'page' => $page,
            'news' => $news,
        ), $response);
    }

    /**
     * View article by id
     *
     * @Route("/news/{id}", requirements={"id" = "\d+"})
     *
     * @param News $news
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction(News $news)
    {
        return $this->render('AcmeNewsBundle:News:view.html.twig', array(
            'news' => $news,
        ));
    }
}