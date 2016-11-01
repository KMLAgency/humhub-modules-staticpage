<?php
/**
 * StaticPage Module
 * @version 1.0
 *
 * This module allows developers to easily create pages for the global view 
 * without using the database.
 *
 * @author Loky
 * http://stellaris.agency
 *
 */
use humhub\widgets\TopMenu;

return [
    'id' => 'staticpage',
    'class' => '\humhub\modules\staticpage\Module',
    'namespace' => 'humhub\modules\staticpage',
	'urlManagerRules' => [
		'/page' => '/staticpage/page/view',
	],
    'events' => array(
        array('class' => TopMenu::className(), 'event' => TopMenu::EVENT_INIT, 'callback' => array('humhub\modules\staticpage\Module', 'onTopMenuInit')),
    ),   
];
?>