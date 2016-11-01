<?php
use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

// code to use files from the 'assets' folder.
use humhub\modules\staticpage\Assets;
Assets::register($this);

// change $this->title to whatever you want as title in browser tab.
$this->pageTitle = 'FAQ';
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
				<div class="panel-heading">
					<strong>Frequently Asked Questions</strong>
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
					<div id="va-accordion" class="va-container">
						<div class="va-nav">
							<span class="va-nav-prev">Previous</span>
							<span class="va-nav-next">Next</span>
						</div>
						<div class="va-wrapper">
							<div class="va-slice vas1">
								<div class="va-title">Question 1&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
									<p>Test</p>
									<div class="va-link">
										<a class="btn btn-info" href="#">test</a>
										<a class="btn btn-info" href="#">test</a>
									</div>
								</div>
							</div>
							<div class="va-slice vas2">
								<div class="va-title">Question 2&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
								</div>	
							</div>
							<div class="va-slice vas3">
								<div class="va-title">Question 3&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
								</div>	
							</div>
							<div class="va-slice vas4">
								<div class="va-title">Question 4&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
								</div>	
							</div>
							<div class="va-slice vas5">
								<div class="va-title">Question 5&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
								</div>	
							</div>
							<div class="va-slice vas6">
								<div class="va-title">Question 6&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
								</div>	
							</div>
							<div class="va-slice vas7">
								<div class="va-title">Question 7&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
									<p>Test</p>
									<div class="va-link">
										<a class="btn btn-info" href="#">test</a>
										<a class="btn btn-info" href="#">test</a>
									</div>
								</div>	
							</div>
							<div class="va-slice vas8">
								<div class="va-title">Question 8&ensp;<i class="fa fa-question"></i></div>
								<div class="va-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
								</div>	
							</div>
						</div>
					</div>
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
<!-- This js code 'Init' the Question list. -->
<script type="text/javascript">
	$(function() {
		$('#va-accordion').vaccordion({
			accordionW		: '100%',
			visibleSlices	: 7,
			expandedHeight	: 350,
			animSpeed		: 500,
			animEasing		: 'easeInOutBack',
			animOpacity		: 0.4
		});
	});
</script>