<?php
namespace App\Libraries;

class Template{
    
    private $template_data = [];
	private $renderer;

	public function __construct(){

		$this->renderer = \Config\Services::renderer();

	}

	private function set($value){

		$this->template_data = $value;

	}

	public function load($template = '', $view = '' , $view_data = []){

		$this->set($this->renderer->setData($view_data)->render($template.'/'.$view));

		$this->renderer->setVar('contents', $this->template_data);
		
		echo $this->renderer->render($template);

	}

	public function admin($template = '', $modulo = '' , $view = '' , $view_data = []){

		$this->set($this->renderer->setData($view_data)->render($template . '/'  . $modulo . '/' . $view));

		$this->renderer->setVar('contents', $this->template_data);

        echo $this->renderer->render($template);

	}

}