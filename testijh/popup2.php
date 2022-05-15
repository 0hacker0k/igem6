<head>
<title>跳出視窗</title>
<meta charset="UTF-8">
<!-- 響應式網站 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boostrap 導入程式 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<link href="<?php echo cssfile;?>/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
<script src="<?php echo jsfile;?>/bootstrap.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <!-- 按鈕 -->
<!-- 
<a href="#" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">More about me</a> -->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
More about me
</button>

<!-- 跳出視窗內容 -->

<div class="modal fade" id="loginModal">
<div class="modal-dialog">
<div class="modal-content">
<!-- Header -->
<div class="modal-header">
<h3>profile</h3>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<!-- Body -->
<div class="modal-body">
<!-- 登入表單 -->
<form>
<!-- email -->
<div class="form-group">
<input type="email" class="account form-control" placeholder="Email">
</div>
<!-- password -->
<div class="form-group">
<input type="password" class="password form-control" placeholder="Password">
</div>
<!-- checkbox -->
<div class="form-group">
<input type="checkbox" class="remember">記住我的密碼
</div>
<!-- 送出按鈕 -->
<button type="button" class="btn btn-info"> 登入 </button>
</form>

</div>
<!-- Footer -->
<div class="modal-footer">
<div class="signup">
<span>尚未成為會員</span>
<a href="#" type="button" class="member"> 立即加入 </a>
</div>
</div>


</div>
</div>
</div>
</body>