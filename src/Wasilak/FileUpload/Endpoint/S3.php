<?php

namespace Wasilak\FileUpload\Endpoint;

class S3 extends Endpoint {

	private $_params = array();

	public function __construct(array $params)
	{
		$this->_params = $params;
	}

	public function upload(array $params)
	{
		// Instantiate an S3 client
		$aws = Aws::factory($this->_params);

		$s3 = $aws->get('s3');

		$path = false;

		try {
		    $path = $s3->upload(
		    	$params['bucket'],
		    	$params['folder'] . $params['filename'],
		    	fopen($params['orgFilename'], 'r'),
		    	$params['permissions']
		    );

		} catch (S3Exception $e) {
			throw new \Exception('Error: ' . $e->getMessage());
		}

		return $path['ObjectURL'];
	}

}
