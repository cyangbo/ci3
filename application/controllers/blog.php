<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
2015年6月2日PHP
*/


class Blog extends CI_Controller {

	/**
	 * 构造函数:
	 * 这行代码的必要性在于，你此处的构造函数会覆盖掉这个父控制器类中的构造函数，所以我们要手动调用它。
	 * 作用:如果你需要设定某些默认的值或是在实例化类的时候运行一个默认的程序，那么构造函数在这方面就非常有用了。
	 * 构造函数并不能返回值，但是可以用来设置一些默认的功能。
	 */
	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * 处理输出:用来确保你修改的数据会自动被传递给浏览器.
	 * 如果你的控制器包含一个 _output() 方法，那么它将总是被调用，而不是直接输出最终的数据。
	 * 这个方法类似于OO里的析构函数，不管你调用任何方法这个方法总是会被执行。
	 * 
	 * @param unknown $output
	 */
	public function _output($output)
	{
		echo $output;
		echo '处理输出的内容';
		
		//调用私有方法
		$this->_utility();
	}

	/**
	 * 私有方法:某些情况下，你可能想要隐藏一些方法使之无法对外查阅。
	 * 将方法私有化很简单，只要在方法名字前面加一个下划线（“_”）做前缀就无法通过 URL 访问到了
	 */
	private function _utility()
	{
		echo '私有方法被调用';
	}

	public function index()
	{
		echo 'Hello World！';
	}

	public function comments()
	{
		echo '看这里！';
	}
	
	/**
	 * 载入视图
	 */
	public function getview(){
		
		$this->load->view('blogview');
	}
	
	/**
	 * 载入多个视图
	 */
	public function someview(){
		
		$this->load->view('blogview');
		$this->load->view('footer');
	}
	
	/**
	 * 用子文件夹存储视图
	 */
	public function subfolder(){
		$this->load->view('admin/test');
	}
}


/*
End of file
Location:Blog.php
*/