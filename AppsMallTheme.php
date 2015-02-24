<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 *
 */
namespace Piwik\Plugins\AppsMallTheme;

use Exception;
use Piwik\Common;
use Piwik\Config;
use Piwik\Cookie;
use Piwik\Db;
use Piwik\Piwik;
use Piwik\Translate;
use Piwik\View;

/**
 *
 */
class AppsMallTheme extends \Piwik\Plugin
{
    /**
     * @see Piwik\Plugin::getListHooksRegistered
     */
    public function getListHooksRegistered()
    {
        return array(
            'Template.footer' => 'addClassification',
            "Template.beforeHeader" => "addClassification"
        );
    }

    public function addClassification(&$str)
    {
    	$settings = new Settings();
        $str .= '<div class="classification">'.$settings->classification->getValue().'</div>';
    }

}
