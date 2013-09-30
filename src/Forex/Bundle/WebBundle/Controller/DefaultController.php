<?php

namespace Forex\Bundle\WebBundle\Controller;

use Forex\Bundle\CoreBundle\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/{_locale}", defaults={"_locale" = "en"}, requirements={"_locale" = "en|fr"})
 */
class DefaultController extends BaseController
{
    /**
     * @Route("/", name="homepage", options={"sitemap" = true})
     * @Template
     */
    public function homepageAction()
    {
        return array();
    }

    /**
     * @Route("/contact", name="contact", options={"sitemap" = true})
     * @Template
     */
    public function contactAction()
    {
        $form = $this->createContactForm();

        return array(
            'contactForm' => $form->createView(),
        );
    }

    /**
     * @Route("/referral-program", name="referral-program", options={"sitemap" = true})
     * @Template
     */
    public function referralAction()
    {
        return array();
    }

    /**
     * @Route("/promotions", name="promotions")
     * @Template
     */
    public function promotionsAction()
    {
        $promotions = $this->getRepository('ForexCoreBundle:Promotion')->findActive();

        return array(
            'promotions' => $promotions,
        );
    }
}
