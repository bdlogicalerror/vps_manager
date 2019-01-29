<?php
/**
 * FileName: Controller.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 1:22 PM
 */

require_once ROOT."classes/dmap.php";
class Controller extends dmap
{

	private $layout="default";
	public $vars=[];



	private function set($d)
	{
		$this->vars = array_merge($this->vars, $d);
	}

	public function render($filename,$data){
		$this->set($data);
		extract($this->vars);
		ob_start();
		require ROOT. "Views/" .$filename.".php";
		$content_for_layout = ob_get_clean();

		if ($this->layout == false)
		{
			$content_for_layout;
		}
		else
		{
			require(ROOT . "Views/Layouts/" . $this->layout . '.php');
		}

	}


}