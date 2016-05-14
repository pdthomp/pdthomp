<?php

namespace Album\Model;

use Zend\Db\TableGateway;

class AlbumTable
{
	protected $tableGateway;

	public function __construct( TableGateway $tableGateway ) {
		$this->tableGateway = $tableGateway;
	}

	public function fetchAll() {
		$result = $this->tableGateway->select();

		return $result;
	}


	public function getAlbum( $id ) {
		$result = $this->tableGateway->select( $id );

		return $result;
	}

	public function saveAlbum ( Album $album ) {

	}

	public function deleteAlbum ( $id ) {

	}

}