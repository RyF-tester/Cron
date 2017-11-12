<?php
// Исходная функция
// $cron_time=filemtime("cron_time");    //получаем время последнего изменения файла
// if (time()-$cron_time>=30) {        //сравниваем с текущим временем - 10 минут
//     file_put_contents("cron_time","");    //перезаписываем файл cron_time
//     include "cronFile.php";                //выполняем скрипты из файла cron.php
// }


include('Cron.php');

function echo_ok(){
	echo 'ok';
}

$c = Cron::App('cronFile.php',1);
$c = Cron::App(echo_ok,1);

?>

