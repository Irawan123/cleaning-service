<?php

namespace Application\SkeletonApp\Master\Customer;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerAwareInterface;

use Application\SkeletonApp\Domain\Master\Customer;

class EditAction implements EventManagerAwareInterface
{
    protected $objectManager;

    protected $model;

    protected $events;

    public function __construct(
        $objectManager,
        Customer $model
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
            if (isset($params['submit'])) {
                $this->model->setNama(strtoupper($params['nama']));
                $this->model->setPerusahaan($params['perusahaan']);
                $this->model->setNomorTelepon($params['nomorTelepon']);
                $this->model->setWebsite($params['website']);

                $this->objectManager->persist($this->model);
                $this->objectManager->flush();

                $this->getEventManager()->trigger('postFlush', $this, $params);
            }

        }

        return array(
            'request' => $params,
        );
    }

}
