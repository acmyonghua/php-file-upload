<?php

	require_once __DIR__.'/../../../lib/Faultier/FileUpload/File.php';

	class FileTest extends PHPUnit_Framework_TestCase {
	
		protected $file;
		
		protected function setUp() {
			$this->file = new File();
		}
		
		public function testFileCreated() {
			$this->assertInstanceOf('File', $this->file);
		}
	
	}

?>