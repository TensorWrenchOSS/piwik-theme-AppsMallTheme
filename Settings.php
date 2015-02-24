<?php

namespace Piwik\Plugins\AppsMallTheme;

use Piwik\Settings\SystemSetting;

class Settings extends \Piwik\Plugin\Settings
{

    protected function init()
    {
        $this->classification = $this->createTextSetting('classification','Classification', 'Enter the classification of the site', 'UNCLASSIFIED');
        
        $this->addSetting($this->classification);
    }

    private function createTextSetting($id, $name, $description, $default) {
    	$setting = new SystemSetting($id, $name);
	    $setting->type = self::TYPE_STRING;
	    $setting->description   = $description;
	    $setting->defaultValue = $default;
        $setting->readableByCurrentUser = true;

	    return $setting;
    }
}