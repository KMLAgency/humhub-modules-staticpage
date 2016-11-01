<?php

Yii::app()->moduleManager->register(array(
    'id' => 'staticpage',
    'class' => 'application.modules.staticpage.Module',
    'import' => array(
        'application.modules.staticpage.*',
    ),
    'events' => array(
        array('class' => TopMenu::className(), 'event' => TopMenu::EVENT_INIT, 'callback' => array(humhub\modules\staticpage\Module::className(), 'onTopMenuInit')),
));
?>
