<?php

namespace Application\SkeletonApp\Master\Pegawai;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerAwareInterface;

use Application\SkeletonApp\Domain\Master\Pegawai;

class EditAction implements EventManagerAwareInterface
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
            if (isset($params['submit'])) {
                $this->model->setNama(strtoupper($params['nama']));
                $this->model->setAlamat($params['alamat']);
                $this->model->setNomorTelepon($params['nomorTelepon']);
                $this->model->setEmail($params['email']);

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
