<?php
namespace Application\SkeletonApp\Master\Pegawai;

use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use Zend\Paginator\Paginator;

class IndexAction
{
	private $objectManager;
	private $param_page;

	public function __construct($om, $param_page)
	{
		$this->objectManager = $om;
		$this->param_page = $param_page;
	}

	public function dispatch($page_count, $request)
	{
		
		$qb = $this->objectManager->createQueryBuilder()
                   ->select("pegawais")
                   ->from("Application\SkeletonApp\Domain\Master\Pegawai", "pegawais")
                   ->orderBy("pegawais.nama", "ASC");

		if($request != null){
			if(!empty($request['filter_cari'])){
				$param_name = $request['filter_nama'];	
				$param_telp = $request['filter_telp'];

				$qb->where('pegawais.nama LIKE :name AND pegawais.nomorTelepon LIKE :telp')
                   ->setParameter('name','%'.$param_name.'%')
                   ->setParameter('telp','%'.$param_telp.'%')
                   ;
			}
		}
		
        $paginator = new Paginator(new DoctrineAdapter(new ORMPaginator($qb->getQuery())));

		$page = 1;
		if ($this->param_page) $page = $this->param_page;
		$paginator->setCurrentPageNumber((int)$page)
				  ->setItemCountPerPage($page_count);		
				  
		return array(
			'pegawais' => $paginator,
			'page_number' => ($page-1)*$page_count +1
		);	
	}

}

?>