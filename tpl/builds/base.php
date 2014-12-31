<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?=$page->title?></title>
        <link rel="stylesheet" href="res/styles/base.css" />
        <link rel="stylesheet" href="<?=$page->style?>" />
        <link rel="shortcut icon" href="res/images/favicon.ico" />
        <script src="res/scripts/jquery-1.11.2.js"></script>
        <script src="res/scripts/jquery.hoverIntent.js"></script>
        <script src="<?=$page->script?>"></script>
        <meta name="author" content="Владимир Иванович Попов" />
        <meta name="copyright" content="Компьютерная Академия Шаг - Киев, 2015" />
        <meta name="description" content="Лаборатория программирования №1" />
        <meta name="subject" content="IT, программирование, компьютерные науки" />
        <meta name="keywords" content="IT, программирование, компьютерные науки" />
        <meta name="robots" content="all" />
    </head>
    <body>
        <div id="main_panel">
            <header><?php include 'tpl/panels/header.php'; ?></header>
            <article><?php include 'tpl/panels/article.php'; ?></article>
            <footer><?php include 'tpl/panels/footer.php'; ?></footer>
        </div>
    </body>
</html>