<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\staticpage\controllers;
use Yii;
use yii\helpers\Url;
/**
 * StaticPage Module PageController
 * @version 1.0
 *
 * @author: Loky
 * http://stellaris.agency
 *
 * @contributor: Julian Harrer
 *
 */
class PageController extends \humhub\components\Controller
{
	// To allow displaying pages for 'non-members', comment or delete the 'behaviors' function.
	public function behaviors(){
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className()
            ]
        ];
    }
	
	public function actionView(){
		$page = Yii::$app->request->get('id');
	return $this->render($page);
	}
}
