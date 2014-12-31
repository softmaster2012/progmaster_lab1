<?php
    session_start();
    
    // = 1. Идентификация пользователя =
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        if (filter_input(INPUT_COOKIE, 'user') != NULL) {
            $user = filter_input(INPUT_COOKIE, 'user');
        } else {
            $user = 'Гость';
        }
    }
    
    // = 2. Идентификация страницы =
    if (filter_input(INPUT_GET, 'id') != NULL) {
        $id = filter_input(INPUT_GET, 'id');
    } else {
        $id = 'main';
    }
    
    // = 3. Определение базовых параметров страницы =    
    $title = 'ProgMaster_Lab1 - ';
    $style_path = 'res/styles/'.$id.'.css';
    $script_path = 'res/scripts/'.$id.'.js';
    $content_path = 'app/pages/'.$id.'.php';
    $template_path = 'tpl/builds/base.php';
    
    // = 4. Упаковка параметров страницы в единый массив =
    $page_params = array(
        'id' => $id,
        'user' => $user,
        'title' => $title,
        'style' => $style_path,
        'script' => $script_path,
        'content' => $content_path,
        'template' => $template_path
    );
    
    // = 5. Формирование и загрузка запрашиваемой страницы =
    require 'sys/classes/class_page.php';
    $page = new Page($page_params);
    include($page->content);
    include($page->template);
//-end-