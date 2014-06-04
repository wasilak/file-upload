<?php

namespace Wasilak\FileUpload;

class Uploader {
	public function __construct(Wasilak\FileUpload\Endpoint $endpoint)
	{
		return $endpoint->upload();
	}
}
