<?php 
use yii\helpers\Html;

$this->registerJsFile('https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js', ['position'=>$this::POS_HEAD]);
$this->registerJsFile('https://blockchain.info/Resources/js/pay-now-button.js', ['position'=>$this::POS_HEAD]);
$this->registerCss(".stage-begin:hover{cursor: pointer;}");

?>
<h1>Donate</h1>

<p><?= Yii::$app->params['name'];?> is a free website. Thousands of people like you help us develop and support this website. We rely on donations to keep information open, free and objective. Will you donate today?</p>

<div style="font-size:14px; margin:0; width:100%; max-width: 500px;" class="blockchain-btn" data-address="3NzSXeGsgGnmaMctigPGKuWhoDYTHzHW1e" data-shared="false">
  <div class="blockchain stage-begin">
      <img class='grayscale' src="https://blockchain.info/Resources/buttons/donate_64.png"/>
  </div>
  <div class="blockchain stage-loading" style="text-align:center">
      <img class="grayscale" src="https://blockchain.info/Resources/loading-large.gif"/>
  </div>
  <div class="blockchain stage-ready">
      <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
      <p align="center" class="qr-code"></p>
  </div>
  <div class="blockchain stage-paid">
      Donation of <b>[[value]] BTC</b> Received. Thank You.
  </div>
  <div class="blockchain stage-error">
      <font color="red">[[error]]</font>
  </div>
</div>

<p>If you have free resources and can help us with hosting <?= Yii::$app->params['name'];?>, please <?= Html::a(Yii::t('app', 'contact us'), ['site/contact'])?>. <br><br><?= Yii::$app->params['name'];?> community will be very grateful to you.</p>