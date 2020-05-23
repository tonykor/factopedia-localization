<?php 
use yii\helpers\Html;

$this->registerJsFile('https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js');
$this->registerJsFile('https://blockchain.info/Resources/js/pay-now-button.js');
$this->registerCss(".stage-begin:hover{cursor: pointer;}");

?>
<h1>Пожертвовать</h1>

<p><?= Yii::$app->params['name'];?> это бесплатный сайт. Тысячи людей таких как ты помогают нам разрабатывать и поддерживать этот сайт. Мы рассчитываем на ваши пожертвования что бы информация на этой сайте оставалась открытой, бесплатной и объективной. Сделаете ли вы пожертвование сегодня?</p>

<div style="font-size:14px; margin:0; width:100%; max-width: 500px;" class="blockchain-btn" data-address="3NzSXeGsgGnmaMctigPGKuWhoDYTHzHW1e" data-shared="false">
  <div class="blockchain stage-begin">
      <img class='grayscale' src="https://blockchain.info/Resources/buttons/donate_64.png"/>
  </div>
  <div class="blockchain stage-loading" style="text-align:center">
      <img class="grayscale" src="https://blockchain.info/Resources/loading-large.gif"/>
  </div>
  <div class="blockchain stage-ready">
      <p align="center">Пожалуйста пожертвуйте на Bitcoin адрес: <b>[[address]]</b></p>
      <p align="center" class="qr-code"></p>
  </div>
  <div class="blockchain stage-paid">
      Пожертвование в <b>[[value]] BTC</b> получено. Спасибо.
  </div>
  <div class="blockchain stage-error">
      <font color="red">[[error]]</font>
  </div>
</div>

<p>Если у вас есть свободные ресурсы и вы можете нам помочь с хостингом <?= Yii::$app->params['name'];?>, пожалуйста <?= Html::a(Yii::t('app', 'contact us'), ['site/contact'])?> сообщество <?= Yii::$app->params['name'];?> будет вам очень благодарно.</p>