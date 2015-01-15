<?php
/**
 * @link http://www.fenghuilee.com/
 * @copyright Copyright (c) 2015 FenghuiLee
 * @license https://github.com/fenghuilee/yii2-smartyviewer/blob/master/LICENSE
 */

namespace yii\smartyviewer;

use Yii;
use Smarty;

class SmartyViewer extends Smarty
{
	/**
	 * @var string the directory or path alias pointing to where Smarty cache will be stored.
	 */
	public $cachePath = '@runtime/Smarty/cache';
	/**
	 * @var string the directory or path alias pointing to where Smarty compiled templates will be stored.
	 */
	public $compilePath = '@runtime/Smarty/compile';
	/**
	 * @var array Add additional directories to Smarty's search path for plugins.
	 */
	public $pluginDirs = [];
	/**
	 * @var array Add additional directories to Smarty's search path for config.
	 */
	public $configDirs = [];
	/**
	 * @var array Add additional directories to Smarty's search path for template.
	 */
	public $templateDirs = '@runtime/Smarty/template';
	/**
	 * @var array additional Smarty options
	 * @see http://www.smarty.net/docs/en/api.variables.tpl
	 */
	public $options = [];
	/**
	 * Instantiates and configures the Smarty object.
	 */
	function __construct() {
		parent::__construct();
		
		$this->setTemplateDir(Yii::getAlias($this->templateDirs))
			 ->setCompileDir(Yii::getAlias($this->compilePath))
			 ->setCacheDir(Yii::getAlias($this->cachePath));
		
		foreach ($this->options as $key => $value) {
			$this->$key = $value;
		}
	}
}
