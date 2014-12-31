<table border="0">
    <tr>
        <td class="side">
            <img src="res/images/logo7.jpg" width="80%" />
        </td>
        <td>
            <h1>ЛАБОРАТОРИЯ ПРОГРАММИРОВАНИЯ</h1>
            <h2>
                Учебно-методический сайт Киевского филиала Компьютерной Академии "Шаг"
            </h2>
            <h3>Направление подготовки - "Разработка программного обеспечения"</h3>
        </td>
        <td class="side">
            <img src="res/images/logo20.gif" width="80%" />
        </td>
    </tr>
</table>
<hr />
<table border="0">
    <tr>
        <td class="side2">
            <?php
                echo '<span style="color: green; font-weight: bold">';
                echo date('Сегодня: d.m.Y');
                echo '</span>';
            ?>
        </td>
        <td>
            <?php
                echo 'Добро пожаловать, ';
                echo '<span style="color: blue">'.$page->user.'</span>';
                echo '. / Вы зачислены в группу ';
                echo '<span style="color: red">';
                if ($page->user == 'Гость') {
                    echo 'Посетители';
                } else {
                    echo 'Пользователи';
                }
                echo '</span> / ';
            ?>
        </td>
        <td class="side2">
            |
            <a href="index.php?id=main">Главная</a>
            |
            <?php
                if ($page->user == 'Гость') {
                    echo '<a href="index.php?id=enter">Вход</a>';
                } else {
                    echo '<a href="index.php?id=leave">Выход</a>';
                }
            ?>
            |
            <?php
                if ($page->user == 'Гость') {
                    echo '<a href="index.php?id=reg">Регистрация</a>';
                } else {
                    echo '<a href="index.php?id=con">Контакты</a>';
                }
            ?>
            |
        </td>
    </tr>
</table>
<hr />
<div id="layer1">
    <img src="res/images/logo19.jpg" id="bg1" />
</div>
