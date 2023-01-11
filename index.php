<!doctype html>
<html lang="en">

<head>
  <title>Mandala SPA-салон</title>
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
    <div class="d-flex flex-row p-2 bg-dark">
      <div class="p-2 w-50 text-center fs-2 text-light">SPA-салон</div>
      <div class="p-2"><img src="/image/luxury-mandala.webp" width="450" alt="" srcset=""></div>
      <div class="p-2 w-50 text-center fs-4 text-light">
        <?php
        $userName = $_COOKIE['user'] ?? null;
        if ($userName  != null) {
          echo $loginHeader = 'Привет, ' . $userName . '!';
          echo '<br>';
          $currentTime = $_COOKIE[$userName . '_created'];
          $timeLeft = $currentTime - time();
          if ($timeLeft > 0) {
            $hour = floor($timeLeft / 60 / 60);
            $minute = floor(($timeLeft - $hour * 60 * 60) / 60);
            $second = ($timeLeft - $hour * 60 * 60 - $minute * 60);
            $minute = $minute < 10 ? '0' . $minute : $minute;
            $second = $second < 10 ? '0' . $second : $second;
            echo 'Акция 15% истекает через ';
            echo '<br>';
            echo $hour . ':' . $minute . ':' . $second;
            echo '<br>';
          }

          include 'checkbirthday.php';

          $day = checkbirthday($_COOKIE[$userName . '_birthday']);
          echo $day;
          echo $buttonExit = '<form action="clearCookie.php" method="post" class="m-3 fs-3">
        <button type="submit" name="submit_exit" class="btn btn-warning w-50">Выйти</button>
        </form>';
        }
        ?>
      </div>
    </div>

    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#main">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#menu">SPA-меню</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#discount">Акции</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkLogin.php">Мой кабинет</a>
      </li>
    </ul>
  </header>

  <main>
    <div class="card-main" id="main">
      <div class="card-body-main p-5">
        <p class="text-center fs-3">Главная</p>
        <div class="d-flex p-2">
          <div class="d-flex flex-row bg-light w-100 justify-content-center">
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/a-cozy.webp" class="card-img-top" alt="..." width="300" height="200">
              </div>
            </div>
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/clean.webp" class="card-img-top" alt="..." width="300" height="200">
              </div>
            </div>
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/interior.webp" class="card-img-top" alt="..." width="300" height="200">
              </div>
            </div>
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/cozy.webp" class="card-img-top" alt="..." width="300" height="200">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card-main" id="menu">
      <div class="card-body-spa-menu p-5">
        <p class="text-center fs-3">SPA-меню</p>
        <div class="d-flex p-2">
          <div class="d-flex flex-row bg-light w-100 justify-content-center">
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/beautiful-spa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Массажи</p>
                </div>
              </div>
            </div>
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/natural-elements.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">SPA-программы</p>
                </div>
              </div>
            </div>
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/beautiful-spa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">SPA для двоих</SPan></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card-main" id="discount">
      <p class="text-center fs-3">Акции</p>
      <div class="card-body-spa-stocks p-5">
        <div class="d-flex p-2">
          <div class="d-flex flex-row bg-light w-100 justify-content-center">
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/purple.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Акция на все услуги по случаю дня рождения - 5%</p>
                </div>
              </div>
            </div>
            <div class="p-2">
              <div class="card" style="width: 18rem;">
                <img src="/image/purple.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Акция на все услуги всем клиентам нашего салона - 15%</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div>
          <p>*Внимание! Акции суммирутся.</p>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <!-- place footer here -->
    <div class="d-flex flex-row p-2 bg-dark">
      <div class="p-2 w-50 text-center fs-2 text-light"></div>
      <div class="p-2"><img src="/image/luxury-mandala.webp" width="450" alt="" srcset=""></div>
      <div class="p-2 w-50 text-center fs-2 text-light"></div>
    </div>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>