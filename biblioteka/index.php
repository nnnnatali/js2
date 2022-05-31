<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />-->

    <title>Библиотека книг</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
    <h1>Библиотека книг</h1>
    <section class="section">
    <div class="oneBlock">
      <div class="myLike">Мои любимые книги</div>
      <div class="container">

      </div>
      <div class="listBook">Список книг</div>
      <div class="container">
        <?php
        require "php/db.php";
        $rt = "SELECT * FROM `books`";
        $start = mysqli_query($connect, $rt);
        while ($privet = mysqli_fetch_array($start)) {
          echo "<a href='?id=$privet[id]' style='text-decoration: none;'><p class='draggable' draggable='true'>$privet[title]</p></a>";
        }

        ?>
      </div>
      <div class="addBook">Добавить книгу</div>
      <div class="add_ways">
			<div class="tabs">
  				<input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
  				<label for="tab-btn-1">Написать самому</label><br>
  				<input type="radio" name="tab-btn" id="tab-btn-2" value="">
  				<label for="tab-btn-2">Загрузить из файла</label>
  				<div id="content-1"><b>Новая книга</b>
  				<form method="POST"> 
				<p>Название</p>
				<input type="text" name="first" class="name"><br>
				<p>Автор</p>
				<input type="text" name="first" class="avtor"><br>
				<p>Содержимое</p>
				<textarea class="text-Book" cols="36" rows="23" placeholder="Напишите вашу книгу" name="second" style="width: 170px; height: auto;"></textarea><br>
				<button type="button" class="class" onclick="reload_interval(2000);"><span>Загрузить</span></button>
      </form>
  				</div>
  				<div id="content-2"><h3>Название</h3>
  				<form method="POST" enctype="multipart/form-data" id="23"> 
				<input type="text" name="" class="name_b"><br>
				<input type="file" name="files[]" multiple style="width: 170px;"><br>
				<input type="submit" name="submit" value="Загрузить"></form>
  				</div>
  			</div>
    </div>
  </div>
    <div class="2block">
      <p>Открытая книга для чтения</p>
      <div class="openBook">
        <?php
      require "php/db.php";
      $id = $_GET['id'];
        $sql = "SELECT * FROM books WHERE id = '$id'";
      $gg = mysqli_query($connect, $sql);
      while ($id= mysqli_fetch_array($gg)) {
        echo "<p class='main1' draggable='true'>$id[title]</p>";
        echo "<p class='main2' draggable='true'>$id[auther]</p>";
        echo "<p class='main3' draggable='true'>$id[content]</p>";
      }
    ?>
      </div>
    </div>
    </section>

    <script src="upload.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="style.js"></script>
  </body>
</html>