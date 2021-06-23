<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>スライドのコード</title>
</head>
<body>
 <div class="slide"> 
  
    <img src="main_visual_2-0x0.jpg" alt="">
    <img src="main_visual_6-0x0.jpg" alt="">
    <img src="main_visual_7-0x0.jpg" alt="">
    <img src="main_visual_13-0x0.jpg" alt="">
    <img src="main_visual_111-0x0.jpg" alt="">
  </div>

  <nav>
    <ul>
      <li><a href="#">top</a></li>
    </ul>
  </nav>
  <p>
    <!-- 表示時間 -->
    <input type="range" id="slide_speed" value="2000" min="100" max="10000">
    <!-- また、一応スライドショーの切り替え速度をその場で変更できるように、input要素のtype=”range”でレンジバー（スライドバー）を表示しています。 -->
  </p>
</div>
  <script src="js/main.js"></script>
</body>
</html>