<?php
namespace app\admin\controller;

use app\common\controller\Index as commonIndex;
class Index extends commonIndex
{
	public function index() {
		echo $this->getUser();
		return view();
	}
}