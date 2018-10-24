<?php 

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\bootstrap\Nav;

?>

  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <?= Html::tag('li', Html::a('HOME', ['/site/index'])); ?>
          <?= Html::tag('li', Html::a('ABOUT US', ['/site/about'])); ?>
          <?= Html::tag('li', Html::a('CONTACT US', ['/site/contact'])); ?>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, Pambayang Dalubhasaan ng Marilao
    </div>
  </footer>