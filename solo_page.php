<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=600">
  <title>神経衰弱</title>
  <!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!--bootstrapのjsファイル-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="solo.js"></script>
  <style>
  body {
    background-image: url("haikei.png");
    background-size: cover;
  }
  * {
    margin: 0;
    padding: 0;
    text-align: center;
  }
  </style>
</head>
<body>
  <div>
    <h1 class="myFont">
      タイムアタック
    </h1>
    <div>
      <div> <h3 id="score">TIME: 0  </div>
      <div> <h3 id="time">準備中</div>
    </div>
    <div>
      <canvas id="mainCanvas" width="400" height="480"></canvas>
    </div>
    <a class="btn-lg btn-link" href="suijaku.php">ホーム画面へ戻る</a>
  </div>
</body>
</html>
