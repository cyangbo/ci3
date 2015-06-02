<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
2015年6月2日PHP
*/


class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo 'Hello World！';
	}

	public function comments()
	{
		echo '看这里！';
	}
}


/*
End of file
Location:Blog.php
*/