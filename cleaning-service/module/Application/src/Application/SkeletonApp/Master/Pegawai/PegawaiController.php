<?php

namespace Application\SkeletonApp\Master\Pegawai;

use Zend\View\Model\ViewModel;

use Application\SkeletonApp\Common\Controller\AbstractMainController;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject;

use Application\SkeletonApp\Domain\Master\Pegawai;

class PegawaiController extends AbstractMainController
{
    public function indexAction()
    {	
        $page_count = 10;
        $post  = $this->getRequest()->getPost();

        $action = new IndexAction($this->em, $this->params()->fromQuery('page'));
        $result = $action->dispatch($page_count, $post->toArray());

        $result['flashMessages'] = $this->flashMessenger()->getSuccessMessages();

        //\Doctrine\Common\Util\Debug::dump($result);

        return new ViewModel($result);
    }

    public function addAction()
    {
        $post = $this->getRequest()->getPost();

        $model = new Pegawai();

        $action = new EditAction($this->em, $model);
        $action->getEventManager()->attach('postFlush', array($this, 'postFlush'));
        $result = $action->dispatch($post->toArray());

        return $result;   
    }

    public function editAction()
    {
        $post = $this->getRequest()->getPost();

        $model = $this->findRequestedPegawai();

        if (empty($post->toArray())) {
            $post = $this->modelToArray($model);
        } else {
            $post = $post->toArray();
        }

        $action = new EditAction($this->em, $model);
        $action->getEventManager()->attach('postFlush', array($this, 'postFlush'));
        //$action->getEventManager()->attach('constraintViolation', array($this, 'constraintViolation'));
        $result = $action->dispatch($post);

        return $result;   
    }

    public function deleteAction()
    {
        $post = $this->getRequest()->getPost();

        $model = $this->findRequestedPegawai();

        $post = array_merge($this->modelToArray($model), $post->toArray());

        $post['id'] = (int) $this->params()->fromRoute('id', 0);

        $action = new DeleteAction($this->em, $model);
        $action->getEventManager()->attach('deleteFlush', array($this, 'deleteFlush'));
        $result = $action->dispatch($post);

        return $result;      
    }

    public function findRequestedPegawai()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        $model = $this->em->find('Application\SkeletonApp\Domain\Master\Pegawai', $id);

        return $model;
    }

    public function modelToArray(Pegawai $model)
    {
        $hydrator = new DoctrineObject(
            $this->em,
            'Application\SkeletonApp\Domain\Master\Pegawai'
        );

        $pegawai = $hydrator->extract($model);

        return $pegawai;
    }

    public function redirectoToIndex()
    {
        return $this->redirect()->toRoute('pegawai', array('action' => 'index'));
    }

    public function constraintViolation($e)
    {
        $this->messenger()->addErrorMessage('Form yang anda kirim mengandung kesalahan');
    }

    public function postFlush($e)
    {
        $model = $e->getParams();
        $message = 'Pegawai ' . $model['nama'] . ' berhasil disimpan.';

        $this->flashMessenger()->addSuccessMessage($message);

        $this->redirectoToIndex();
    }

    public function deleteFlush($e)
    {
        $model = $e->getParams();
        $message = 'Pegawai ' . $model['nama'] . ' berhasil dihapus.';
        $this->flashMessenger()->addSuccessMessage($message);

        $this->redirectoToIndex();
    }
}
