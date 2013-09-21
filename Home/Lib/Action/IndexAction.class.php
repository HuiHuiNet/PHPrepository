<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
	public function show(){
//		$db = new Model('user');
		$db = M('user');
		$array = $db -> select();//所有数据
//		$array = $db -> find(2);//单条数据
//		$array = $db->where('id = 2')->getField('username');//条件查询
//		$db->username='Jack';
//		$db->add();//添加数据
//		$db->where('id=1')->delete();

		var_dump($array);
		//$name = 'devil';
		$this->assign('name' , $array);
		$this->display();
	}
}
?>