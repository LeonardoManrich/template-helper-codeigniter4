<?php

namespace App\Libraries;

class Template
{
	private static $template_data = [];
	private static $renderer;

	public function __construct()
	{
		self::$renderer = \Config\Services::renderer();
	}

	private static function set($value)
	{
		self::$template_data = $value;
	}

	public static function load(String $template = "", String $view = "", array $view_data = []): void
	{
		self::set(self::$renderer->setData($view_data)->render($view));
		self::$renderer->setVar("contents", self::$template_data);
		echo self::$renderer->render($template);
	}
}
