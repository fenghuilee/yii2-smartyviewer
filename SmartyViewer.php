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
	 * @var string the yii2 theme path.
	 */
	public $themePath = '@app/themes/';
	/**
	 * @var string the yii2 theme name.
	 */
	public $themeName = 'default';
	/**
	 * @var string the directory or path alias pointing to where Smarty common plugins.
	 */
	public $commonPluginsPath = '@app/common/smartyplugins';
	/**
	 * @var string the directory or path alias pointing to where Smarty cache will be stored.
	 */
	public $cachePath = '@runtime/Smarty/cache';
	/**
	 * @var string the directory or path alias pointing to where Smarty compiled templates will be stored.
	 */
	public $compilePath = '@runtime/Smarty/compile';
	/**
	 * @var array additional Smarty options
	 * @see http://www.smarty.net/docs/en/api.variables.tpl
	 */
	public $options = [];
	/**
	 * Instantiates and configures the Smarty object.
	 */
	function init() {
		$this->setTemplateDir(Yii::getAlias($this->themePath.$this->themeName.'/templates'))
			 ->addPluginsDir(Yii::getAlias($this->commonPluginsPath))
			 ->addPluginsDir(Yii::getAlias($this->themePath.$this->themeName.'/plugins'))
			 ->setConfigDir(Yii::getAlias($this->themePath.$this->themeName.'/configs'))
			 ->setCompileDir(Yii::getAlias($this->compilePath))
			 ->setCacheDir(Yii::getAlias($this->cachePath));
		foreach ($this->options as $key => $value) {
			$this->$key = $value;
		}
	}
}
