<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>TeleComm</title>
</head>
<body>
<header>
    <div class="p-4 p-md-5 text-light bg-dark d-flex align-items-center justify-content-center" bis_skin_checked="1">
        <div class="col-md-6 px-0" bis_skin_checked="1">
            <h1 class="display-4 fst-italic d-flex align-items-center justify-content-center">TeleComm</h1>
        </div>
    </div>
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="<?= app()->route->getUrl('/') ?>" class="nav-link link-dark px-2">Главная</a></li>
            </ul>
                <?php
                if (!app()->auth::check()):
                    ?>
                    <ul class="nav">
                        <li class="nav-item"><a href="<?= app()->route->getUrl('/login') ?>" class="nav-link link-dark px-2">Вход</a></li>
                        <li class="nav-item"><a href="<?= app()->route->getUrl('/signup') ?>" class="nav-link link-dark px-2">Регистрация</a></li>
                    </ul>
                <?php
                else:
                    ?>
                    <ul class="nav">
                        <li class="nav-item"><span href="#" class="nav-link link-dark px-2"><?= app()->auth::user()->name ?></span></li>
                        <span class="d-flex align-items-center">|</span>
                        <li class="nav-item"><a href="<?= app()->route->getUrl('/logout') ?>" class="nav-link link-dark px-2">Выход</a></li>
                    </ul>
                <?php
                endif;
                ?>
        </div>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

<div class="container">
    <footer class="row row-cols-5 py-5 border-top d-flex justify-content-center">
        <div class="col">
            <h5 class="d-flex justify-content-center">Lorem ipsum</h5>
            <div class="d-flex justify-content-center">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                </ul>
            </div>
        </div>

        <div class="col">
            <h5 class="d-flex justify-content-center">Lorem ipsum</h5>
            <div class="d-flex justify-content-center">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                </ul>
            </div>
        </div>

        <div class="col">
            <h5 class="d-flex justify-content-center">Lorem ipsum</h5>
            <div class="d-flex justify-content-center">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Lorem ipsum</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
