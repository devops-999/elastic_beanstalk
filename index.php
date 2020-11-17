<html>
<head>
   <title>Тест 1</title>
   <?php
      require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';
   ?>
</head>

<body>
   <div class="shapka">
      <?php
         require_once $_SERVER['DOCUMENT_ROOT'].'/top.php';
      ?>
   </div>
   <div class="page">
      <div class="sidebar_left">
         <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/sidebar1.php';
         ?>
      </div>
      <div class="content">
         ... Основная часть сайта...
      </div>
      <div class="sidebar_right">
         <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/sidebar2.php';
         ?>
      </div>
      <div class="footer">
         <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
         ?>
      </div>
   </div>
</body>
</html>
