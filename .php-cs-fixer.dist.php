<?php

$finder = PhpCsFixer\Finder::create()
	->exclude('wp-app')
	->exclude('node_modules')
	->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config
	->setRules([
		'@PSR12' => true,
		'strict_param' => true,
		'array_syntax' => ['syntax' => 'short'],
	])
	->setFinder($finder);
