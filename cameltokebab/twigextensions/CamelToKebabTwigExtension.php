<?php
namespace Craft;

class CamelToKebabTwigExtension extends \Twig_Extension
{

	public function getName()
	{
		return Craft::t('CamelCase to kebab-case filter');
	}

	public function getFilters()
	{
		return array(
			'cameltokebab' => new \Twig_Filter_Method($this, 'camelToKebab')
		);
	}

	public function camelToKebab($str)
	{
		if (strlen($str))
		{
			$str = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $str));
		}
		return $str;
	}

}
