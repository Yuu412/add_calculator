<DOCTYPE html>
  <!--Web上での電卓の作成-->
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Web電卓</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>

  <body>
    <div>

      <?php
      //文字エンコード検証=======================================================
      require_once("util.php");

      if(!cken($_POST)){
        $encoding = mb_check_encoding();
        $err = "Encoding Error! The expected encoding is". $encoding;
        //エラーメッセージを表示して処理を終了させる
        exit($err);
      }
      //HTMLエスケープ(XSS対策)
      $_POST = es($_POST);
      //========================================================================
       ?>

       <?php
       //POSTされた値を取り出す
       $error = [];

       if(isset($_POST["result"])){
         $result = (int)$_POST["result"];
       }
       else{
         $error = '数値を入力してください';
       }
       ?>

       <?php
       //POSTされた値を取り出す(名前)=============================================
       $error =  [];
      //POSTされた値があるかどうかの判定
       if(isset($_POST["one"])){
         $one = $_POST["one"];
         $result = $result + $one;
         $error = '';
         $isError = FALSE;
         }
       else if(isset($_POST["two"])){
         $two = $_POST["two"];
        $result = $result + $two;
         $error = '';
        $isError = FALSE;
         }
       else if(isset($_POST["three"])){
        $three = $_POST["three"];
        $result = $result + $three;
        $error = '';
        $isError = FALSE;
       }
       else if(isset($_POST["four"])){
        $four = $_POST["four"];
        $result = $result + $four;
        $error = '';
        $isError = FALSE;
       }
       else if(isset($_POST["five"])){
        $five = $_POST["five"];
        $result = $result + $five;
        $error = '';
        $isError = FALSE;
       }
       else if(isset($_POST["six"])){
        $six = $_POST["six"];
        $result = $result + $six;
        $error = '';
        $isError = FALSE;
       }
       else if(isset($_POST["seven"])){
        $seven = $_POST["seven"];
        $result = $result + $seven;
        $error = '';
        $isError = FALSE;
       }
       else if(isset($_POST["eight"])){
        $eight = $_POST["eight"];
        $result = $result + $eight;
        $error = '';
        $isError = FALSE;
       }
       else if(isset($_POST["nine"])){
        $nine = $_POST["nine"];
        $result = $result + $nine;
        $error = '';
        $isError = FALSE;
       }
       else if(isset($_POST["zero"])){
        $zero = $_POST["zero"];
        $result = $result + $zero;
        $error = '';
        $isError = FALSE;
       }
       else{
         //POSTされた値がないとき
         $error = '数値を入力してください';
         $isError = TRUE;
       }
       //=======================================================================
       ?>

       <!--入力フォームの作成-->
       <div class="Box">
         <!--現在開いているページにPOSTする-->
      <form method="POST" action="<?php echo es($_SERVER['PHP_SELF'])?>">
        <ul class = "form">
        <?php if($isError): ?>
        <input class="result" type="text" name="result" value="<?php echo $error ?>">
      <?php else: ?>
        <input class="result" type="number" name="result" value="<?php echo $result ?>">
      <?php endif ?>
        <ul>
          <li><input type ="submit" name="one" value ="1"></li>
          <li><input type ="submit" name="two" value ="2"></li>
          <li><input type ="submit" name="three" value ="3"></li>
        </ul>
        <ul>
          <li><input type ="submit" name="four" value ="4"></li>
          <li><input type ="submit" name="five" value ="5"></li>
          <li><input type ="submit" name="six" value ="6"></li>
        </ul>
        <ul>
          <li><input type ="submit" name="seven" value ="7"></li>
          <li><input type ="submit" name="eight" value ="8"></li>
          <li><input type ="submit" name="nine" value ="9"></li>
        </ul>
          <div class="zero"><input type ="submit" name="zero" value ="0"></div>

        </ul>
      </form>
    </div>
  </div>
  </body>

  </html>
