<?php

namespace Application\SkeletonApp\Common\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends AbstractMainController
{
    public function indexAction()
    {
        return new ViewModel();
    }    
}
