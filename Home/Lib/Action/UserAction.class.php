<?php 
	/**
	 * DEVIL
	 * 这是一个User的Action类，用于封装对于User的操作
	 */
	class UserAction extends Action{
		/**
		 * 用于显示数据库内所有的用户
		 */
		public function showAll(){
			$userDB = M('user');
			$userList = $userDB->select();
			$this->assign('userList', $userList);
			$this->display();
		}
		/**
		 * 删除一个用户
		 */
		public function delete(){
			$id = $_GET['id'];
			$userDB = M('user');
			$flag = $userDB->delete($id);
//			echo $flag;
			if($flag > 0){
				$this->success('数据删除成功');
			}else{
				$this->error('数据删除失败');
			}
		}
		/**
		 * 用于显示单个用户信息页面
		 */
		public function showModify(){
			$id = $_GET['id'];
			$userDB = M('user');
			$user = $userDB->find($id);
			$this->assign('user', $user);
			$this->display();
		}
		/**
		 * 用于修改单个用户信息
		 */
		public function modify(){
			$userDB = M('user');
			$user['id'] = $_POST['id'];
			$user['username'] = $_POST['username'];
			$user['sex'] = $_POST['sex'];
			dump($user);
			$flag = $userDB->save($user);
			if($flag > 0){
				$this->success('数据修改成功','showAll');
			}else{
				$this->error('数据修改失败');
			}
		}
		public function add(){
			$this->display();
		}
		/**
		 * 用于添加一个用户
		 */
		public function addUser(){
			$userDB = M('user');
			$user['username'] = $_POST['username'];
			$user['sex'] = $_POST['sex'];
			dump($user);
			$flag = $userDB->add($user);
			if($flag > 0){
				$this->success('数据添加成功','showAll');
			}else{
				$this->error('数据添加失败');
			}
		}
	}
?>