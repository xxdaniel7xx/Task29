<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../../css/template.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
    <link href="../../css/portfolio.css" rel="stylesheet">
    <link href="../../css/contacts.css" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="row">
        <ul class="col-8 offset-2 d-flex flex-row justify-content-between">
            <li class="nav_link" id="main">
                <a href="http://task29/?url=main">Главная</a>
            </li>
            <li class="nav_link" id="portfolio">
                <a href="http://task29/?url=portfolio">Портфолио</a>
            </li>
            <li class="nav_link" id="contacts">
                <a href="http://task29/?url=contacts">Контакты</a>
            </li>
        </ul>
    </div>
</header>
<main class="container" id="content">
    <?php include 'application/views/'.$content_view; ?>
</main>
<footer class="footer">

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>