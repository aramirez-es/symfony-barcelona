<?php

namespace SFBCN\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/news")
 */
class NewsController extends Controller
{
    /**
     * Renders latest news
     *
     * @return array
     * @Route("", name="news_index")
     * @Template()
     */
    public function indexAction()
    {
        return array(
            'current' => 'news',
        );
    }
}