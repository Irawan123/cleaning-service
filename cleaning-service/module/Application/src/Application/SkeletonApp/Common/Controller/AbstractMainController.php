<?php

namespace Application\SkeletonApp\Common\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\EventManager\EventManagerInterface;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;

/**
 * Class Abstract
 */
abstract class AbstractMainController extends AbstractActionController
{
    /**
     * Untuk mendapatkan EntityManager
     * 
     * @var EntityManager
     */
    public $em;

    /**
     * Untuk menampung Logger
     * 
     * @var Logger
     */
    public $logger;

    /**
     * Buat Bootstrap controller, jadi untuk manggil resource yang dibutuhkan sebelu class dibuat 
     * 
     * @param EventManagerInterface $events param buat nangkap EventManagerInterface
     *
     * @return AbstractActionController 
     */

    public function setEventManager(EventManagerInterface $events)
    {
        parent::setEventManager($events);

        $controller = $this;
        $events->attach(
            'dispatch',
            function ($e) use ($controller) {
                // Untuk mendapatkan EntityManager
                $controller->em = $controller->getServiceLocator()->get('Doctrine\ORM\EntityManager');

                // Digunakan untuk Logger
                //$controller->logger = new Logger();
                //$writer = new Stream('application-log.log');
                //$controller->logger->addWriter($writer);
            },
            100
        );

        return $this;
    }
}
