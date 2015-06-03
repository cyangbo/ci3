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
	
	/**
	 * 给视图添加动态数据
	 */
	public function postdata(){
		$data = array(
				'title' => 'My Title',
				'heading' => 'My Heading',
				'message' => 'My Message'
		);
		
		$this->load->view('blogview', $data);
	}
	
	/**
	 * 创建循环
	 */
	public function loop(){
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		
		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";
		
		$this->load->view('loop', $data);
	}
	
	/**
	 * 获取视图内容
	 */
	public function viewcontent(){
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		
		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";
		
		//视图内容不输出到浏览器,而是保存在变量$buffer中
		$buffer = $this->load->view('loop', $data,true);
	}
	
	public function mylibrary(){
		//libraries文件夹中的文件名,首字母不需要大写,不需要扩展名
		$this->load->library('myclass');
		
		//调用myclass类的方法
		$this->myclass->myfunction();
		
		//当初始化类库时，你可以通过第二个参数动态的传递数组到类的构造函数中去:
		//$params = array('type' => 'large', 'color' => 'red');
		//$this->load->library('Someclass', $params);
		//当你使用这个特性时,你必须为类的构造函数加上参数:
		
	}
	
	/**
	 * 邮件类重写
	 */
	public function overwrite_email(){
		
		//先载入libraries文件夹中的Email类,如果有就不载入system的Email类
		$this->load->library('email');
		//调用email类的方法
		$this->email->myoverwrite();
		
	}
	
}


/*
End of file
Location:Blog.php
*/