<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
2015年6月2日PHP
*/

class Blog_controller extends CI_Controller {

	function blog()
	{
		$this->load->model('blogmodel');
		$data['query'] = $this->blogmodel->get_last_ten_entries();
		
		//第二个参数可以对模型类目重命名
		//$this->load->model('blogmodel','myblog');
		//$this->myblog->get_last_ten_entries();

		$this->load->view('blog', $data);
	}
}

/*
End of file
Location:blog_controller.php
*/