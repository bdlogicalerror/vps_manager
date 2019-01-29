<?php
/**
 * FileName: HomeController.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 8:21 PM
 */

class HomeController extends Controller
{
	public function index(){
		$this->render('index','');
	}
}