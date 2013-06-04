<?php

namespace Forex\Bundle\WebBundle\Controller;

use Forex\Bundle\CoreBundle\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/payout")
 */
class PayoutController extends BaseController
{
    /**
     * @Route("/list", name="payout_list")
     * @Template
     */
    public function listAction()
    {
        $user = $this->getUser();

        return array(
            'user' => $user,
        );
    }
}
