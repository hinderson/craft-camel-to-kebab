<?php
namespace Craft;

class CamelToKebabPlugin extends BasePlugin
{

	/* --------------------------------------------------------------
	 * PLUGIN INFO
	 * ------------------------------------------------------------ */

	public function getName()
	{
		return Craft::t('CamelCase to kebab-case filter');
	}

	public function getVersion()
	{
		return '0.1';
	}

	public function getDeveloper()
	{
		return 'Mattias Hinderson';
	}

	public function getDeveloperUrl()
	{
		return 'https://hinderson.com';
	}

	/* --------------------------------------------------------------
	 * HOOKS
	 * ------------------------------------------------------------ */

	/**
	 * Load the TruncateTwigExtension class from our ./twigextensions
	 * directory and return the extension into the template layer
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.cameltokebab.twigextensions.CamelToKebabTwigExtension');
		return new CamelToKebabTwigExtension();
	}

}
