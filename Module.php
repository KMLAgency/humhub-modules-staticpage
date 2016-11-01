<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\staticpage;

use Yii;
use yii\helpers\Url;
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
class Module extends \humhub\components\Module
{

    /**
     * On build of the TopMenu, check if module is enabled
     * When enabled add a menu item.
     *
     * @param type $event
     */
    public static function onTopMenuInit($event)
    {
		// The ID of each items have to be the name of the php page!
	    	$event->sender->addItem(array(
			'label' => 'About',
			'url' => Url::to(['/staticpage/page/view', 'id' => 'about']),
			'icon' => '<i class="fa fa-info-circle"></i>',
			'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'staticpage' && Yii::$app->controller->id == 'page' && Yii::$app->request->get('id') == 'about'),
			'sortOrder' => 800,
		));
		
		$event->sender->addItem(array(
			'label' => 'FAQ',
			'url' => Url::to(['/staticpage/page/view', 'id' => 'faq']),
			'icon' => '<i class="fa fa-question-circle"></i>',
			'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'staticpage' && Yii::$app->controller->id == 'page' && Yii::$app->request->get('id') == 'faq'),
			'sortOrder' => 810,
		));
		
		/* $event->sender->addItem(array(
			'label' => 'Legal',
			'url' => Url::to(['/staticpage/page/view', 'id' => 'legal']),
			'icon' => '<i class="fa fa-copyright"></i>',
			'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'staticpage' && Yii::$app->controller->id == 'page' && Yii::$app->request->get('id') == 'legal'),
			'sortOrder' => 820,
		)); */
    }
}
