<?php

namespace Application\SkeletonApp\Master\Pegawai;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerAwareInterface;

use Application\SkeletonApp\Domain\Master\Pegawai;

class DeleteAction implements EventManagerAwareInterface
{
    protected $objectManager;

    protected $model;

    protected $events;

    public function __construct(
        $objectManager,
        Pegawai $model
    ) {
        $this->objectManager = $objectManager;
        $this->model = $model;
    }

    public function setEventManager(EventManagerInterface $events)
    {
        $events->setIdentifiers(array(__CLASS__, get_called_class()));
        $this->events = $events;
    }

    public function getEventManager()
    {
        if (null === $this->events) {
            $this->setEventManager(new EventManager());
        }
        return $this->events;
    }

    
    public function dispatch($params)
    {
        if (!empty($params)) {
            if (isset($params['Yes'])) {
                $this->objectManager->remove($this->model);
                $this->objectManager->flush();

                $this->getEventManager()->trigger('deleteFlush', $this, $params);
            }

        }

        return array(
            'request' => $params,
        );
    }
}
