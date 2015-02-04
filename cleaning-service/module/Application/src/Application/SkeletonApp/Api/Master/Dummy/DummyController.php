<?php

namespace Application\SkeletonApp\Api\Master\Dummy;

use Zend\View\Model\JsonModel;
use Application\SkeletonApp\Common\Controller\AbstractMainController;

class DummyController extends AbstractMainController
{
    public function indexAction()
    {	
        return new JsonModel();
    }
    
}
