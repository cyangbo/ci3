<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
2015年6月3日PHP
*/

class Myclass{
	
	public function myfunction(){
		echo "我的类库方法";
		//$this, 只直接作用在你自己的控制器,模型和视图中.当你在自定义类中想使用CodeIgniter原始类时,你可以这样做:

		//首先,定义CodeIgniter对象赋给一个变量:
		$CI =& get_instance();
		
		//一旦定义某个对象为一个变量,你就可以使用那个变量名 取代 $this:
		$CI->load->helper('url');
		$CI->load->library('session');
		$CI->config->item('base_url');
		
	}
	
}

/*
End of file
Location:Myclass.php
*/