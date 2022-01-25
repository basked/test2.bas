<?php
require 'vendor/autoload.php';
//\Classes\Bas::basHelp();
//\Helpers\basHelp();
//\Lessons\L01\Lesson_01::getInfo();
//

$l01 = new  \Lessons\L01\Lesson_01();
$l01->getInfo( true);
$query = (isset($_GET['q'])?$_GET['q']:'');
dd($l01->getAllMethods(signat: $query));


