<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
	
	<div class="row">
		<div class="col-md-8">
			I can't catch all the bugs (although I try), so if you do run into a nasty error or a slight annoyance please let me know. 
			<br><br>
			The goal of the StationMap program is to make the process of location HAM stations and repeaters as easy as possible and relies a great deal on the feedback I receive from the community.
		</div>
	</div>
	
	<br><br>
	
	<div class="row">
		<div class="col-md-4">
			<p><a class="btn btn-default" href="mailto: jthoward.mech@gmail.com">Email Me &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<p><a class="btn btn-default" href="https://github.com/jamesthoward/stationmap">Comment on GitHub &raquo;</a></p>
		</div>
	</div>
</div>
