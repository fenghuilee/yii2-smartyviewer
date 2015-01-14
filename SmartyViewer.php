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
	function __construct() {
		parent::__construct();
		$this->left_delimiter = '<{';
		$this->right_delimiter = '}>';
	}
}
