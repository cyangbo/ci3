<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
2015年6月3日PHP
*/

/**
 * 新继承的类所在的文件必须以 MY_ 为前缀(这个选项是可配置的:
 * 要设定你自己的子类前缀,请打开 application/config/config.php 文件并找到这一项:
 * $config['subclass_prefix'] = 'MY_';
 * @author Administrator
 *
 */
class MY_Email extends CI_Email {

	public function __construct()
	{
		parent::__construct();
		echo "email的继承类被调用了 - ";
	}
	
	public function test_emial(){
		echo "- 继承email的类被调用了 -";
	}
	
	public function cc(){
		echo "ccss";
	}
}

/*
End of file
Location:MY_Email.php
*/