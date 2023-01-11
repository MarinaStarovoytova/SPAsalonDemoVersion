<!doctype html>
<html lang="en">

<head>
  <title>Регистрация нового пользователя</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="icon" href="data:;base64,=">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

  <main>
    <div class="card-main">
      <div class="d-flex flex-column align-items-center">
        <p class="fs-3 m-0">Добро пожаловать в регистрацию</p>
        <form class="d-flex flex-column justify-content-center w-50 m-4 p-8" action="registrProcess.php" method="post">
          <div class="mb-3 p-3">
            <input type="text" name="newLogin" placeholder="Придумайте свой логин" class="form-control">
          </div>
          <div class="mb-3 p-3">
            <input type="password" name="newPassword" placeholder="Придумайте свой пароль" class="form-control">
          </div>
          <div class="mb-3 p-3">
            <input type="date" name="birthday" placeholder="Дата рождения" class="form-control">
          </div>
          <div class="mb-3 p-3 d-flex justify-content-center">
            <button type="submit" name="register" class="btn btn-primary w-50">Регистрация</button>
          </div>
          <div class="mb-3 p-3">
            <a href="index.php">вернутся на Главную</a>
          </div>
        </form>
      </div>
    </div>  
  </main>

  <footer>
    <!-- place footer here -->
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>