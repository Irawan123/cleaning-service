<?php

namespace Application\SkeletonApp\Master\Dummy;

use Zend\View\Model\ViewModel;
use Application\SkeletonApp\Common\Controller\AbstractMainController;

class DummyController extends AbstractMainController
{
    public function indexAction()
    {	
        return array();
    }

    public function redirectoToIndex()
    {
        return $this->redirect()->toRoute(
            null,
            array('controller' => 'dummy', 'action' => 'index')
        );
    }
    
}
