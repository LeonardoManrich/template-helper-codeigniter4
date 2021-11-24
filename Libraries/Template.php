<?php

namespace App\Libraries;

class Template
{
	private $template_data = [];
	private $renderer;

	public function __construct()
	{
		$this->renderer = \Config\Services::renderer();
	}

	private function set($value)
	{
		$this->template_data = $value;
	}

	public function load(String $template = "", String $view = "", array $view_data = []): void
	{
		$this->set($this->renderer->setData($view_data)->render($view));
		$this->renderer->setVar("contents", $this->template_data);
		echo $this->renderer->render($template);
	}
}
