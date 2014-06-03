<?php

namespace Wasilak\FileUpload;

class Uploader {
	public function __construct($exit = false)
	{
		echo __CLASS__;
		if ($exit) exit();
	}
}
