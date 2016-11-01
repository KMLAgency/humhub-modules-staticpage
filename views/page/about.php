<?php
use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

// change $this->title to whatever you want as title in browser tab.
$this->pageTitle = 'About';
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
				<div class="panel-heading">
					<!-- This code display the 'page title' you choose, with the 'App name' (name of your website). -->
					<strong><?= Html::encode($this->pageTitle) ?></strong>
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. 
				</div>
			</div>
        </div>
        <div class="col-md-4">
			<!-- This code display the 'global' sidebar. -->
            <?php
            echo \humhub\modules\dashboard\widgets\Sidebar::widget([
                'widgets' => [
                    [
                        \humhub\modules\activity\widgets\Stream::className(),
                        ['streamAction' => '/dashboard/dashboard/stream'],
                        ['sortOrder' => 150]
                    ]
                ]
            ]);
            ?>
        </div>
    </div>
</div>