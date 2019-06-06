<?php
$file = fopen('users.txt', 'r');

if ($file === false) {
    echo 'Ошибка открытия файла.';
}
echo '<table border="1" cellpadding="12" cellspacing="0">';

while (feof ( $file) === false) {   //проверка конца файла

    $str = fgets($file);
    if (feof ( $file) === true) break;

    //echo $str;
    //echo "<br>";
    $arr = explode("\t", $str);     //разбивка строки по пробелам
    //var_dump($arr);

    $first_name = $arr[0];
    $last_name = $arr[1];
    $email = $arr[2];
    $password = $arr[3];


    echo '<tr> <td>'. $first_name .'</td> <td>'. $last_name .'</td> <td>'. $email .'</td> <td>'. $password .'</td> </tr>';
}   //отрисовка таблицы
fclose($file);

?>