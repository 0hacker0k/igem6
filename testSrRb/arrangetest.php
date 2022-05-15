<head>
  <?php include "./config.php";?>
  <?php include "../sub/head.php";?>
  
</head>


<body>
  

<h1>flexbox排版入門</h1>
<hr>
<div class="flexrow">
  <div>
    <h2>使用flex控制份數</h2>
    <div class="flexcard">
      <div class="left">L 6</div>
      <div class="mid">M 120px</div>
      <div class="right">R 4</div>
    </div>
  </div>
  <div>
    <h2>flex-direction控制軸向</h2>
    <div class="flexcard flexcard2">
      <div class="left">L 6</div>
      <div class="mid">M 120px</div>
      <div class="right">R 4</div>
    </div>
  </div>
</div>
<h3>flex-grow 控制膨脹分配</h3>
<div class="flexcard flexcard3">
  <div class="left">L 400px</div>
  <div class="mid">M 300px</div>
  <div class="right">R 200px (flex-grow: 0)</div>
</div>
<h3>flex-shrink 控制縮減分配</h3>
<div class="flexcard flexcard4">
  <div class="left">L 400px (flex-shrink: 0)</div>
  <div class="mid">M 300px</div>
  <div class="right">R 200px</div>
</div>

<hr>
<h2>順序 flex-direction: column-reverse / row-reverse</h2>
<div class="flexrow">
  <div>
    <h3>row-reverse</h3>
    <div class="flexcard flexcard5">
      <div class="left">L 400px</div>
      <div class="mid">M 300px</div>
      <div class="right">R 200px</div>
    </div>
  </div>
  <div>
    <h3>column-reverse</h3>
    <div class="flexcard flexcard6">
      <div class="left">L 400px</div>
      <div class="mid">M 300px</div>
      <div class="right">R 200px</div>
    </div>
  </div>
</div>
<hr>
<h2>物件排列</h2>

<!-- justify -->
<div class="flexrow">
  <div>
    <h4>justify-content: flex-start<br>align-items:flex-start </h4>
    <div class="items">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
  <div>
    <h4>justify-content: center<br>align-items: flex-start </h4>
    <div class="items jCenter">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
  
  <div>
    <h4>justify-content: flex-end<br>align-items: flex-start </h4>
    <div class="items jEnd">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
</div>


<!-- justify | align center-->
<div class="flexrow">
  <div>
    <h4>justify-content: flex-start<br>align-items:center </h4>
    <div class="items aCenter">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
  <div>
    <h4>justify-content: center<br>align-items: center </h4>
    <div class="items jCenter aCenter">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
  
  <div>
    <h4>justify-content: flex-end<br>align-items: center </h4>
    <div class="items jEnd aCenter">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
</div>



<!-- justify | align end-->
<div class="flexrow">
  <div>
    <h4>justify-content: flex-start<br>align-items: flex-end </h4>
    <div class="items aEnd">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
  <div>
    <h4>justify-content: center<br>align-items: flex-end </h4>
    <div class="items jCenter aEnd">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
  
  <div>
    <h4>justify-content: flex-end<br>align-items: flex-end </h4>
    <div class="items jEnd aEnd">
      <div class="mainAxis">主軸 (justify)</div>
      <div class="subAxis">副軸 (align)</div>
      <div class="item">1</div>
      <div class="item">2</div>
      <div class="item">3</div>
    </div>
  </div>
</div>
<hr>
<h2>空間排列space-between / space-around</h2>
<div>
  <h4>space between</h4>
  <div class="items jBetween aCenter">
    <div class="mainAxis">主軸 (justify)</div>
    <div class="subAxis">副軸 (align)</div>
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
  </div>
</div>
<div>
  <h4>space around</h4>
  <div class="items jAround aCenter">
    <div class="mainAxis">主軸 (justify)</div>
    <div class="subAxis">副軸 (align)</div>
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
  </div>
</div>

<div>
  <h4>space evenly</h4>
  <div class="items jEvenly aCenter">
    <div class="mainAxis">主軸 (justify)</div>
    <div class="subAxis">副軸 (align)</div>
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
  </div>
</div>




</body>