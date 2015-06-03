<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
2015年6月3日PHP
*/

/**
 * 简单的将你自己的类命名为与原始类一样就能使CodeIgniter使用这个新类．
 * 要使用这个特性，文件名与类声明必须与原始类完全一致。
 * 例如，要替换原始的 Email 类库。你必须创建一个文件application/libraries/Email.php
 * 
 * @author Administrator
 *
 */
class CI_Email {
	
	public function myoverwrite(){
		echo "重写邮件原始类";
	}

}

/*
End of file
Location:Email.php
*/