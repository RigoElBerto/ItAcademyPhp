<?php

include 'resource.php';

$page = new Resource('Pagina', Theme::LARAVEL,'wwww.pagina.com', Type::VIDEO);

echo $page->__tostring();