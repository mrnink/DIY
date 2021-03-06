<?php

require_once('tests/php/base.php');

class CashSeedTests extends UnitTestCase {
	function testS3Seed(){
		$settings = new S3Seed(1,1);
		$this->assertIsa($settings, 'S3Seed');
	}
	function testTwitterSeed(){
		$user_id      = 1;
		$connection_id  = 1;
		$twitter      = new TwitterSeed($user_id,$connection_id);
		$this->assertIsa($twitter, 'TwitterSeed');
	}
}
?>
