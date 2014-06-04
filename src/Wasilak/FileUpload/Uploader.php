<?php

namespace Wasilak\FileUpload;

class Uploader {
	private $_endpoint = false;

	public function __construct(\Wasilak\FileUpload\Endpoint $endpoint)
	{
		$this->_endpoint = $endpoint;
	}

	public function upload(array $params)
	{
		return $this->_endpoint->upload($params);
	}
}
