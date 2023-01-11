<?php 

$login = $_POST['newLogin'] ?? null;
$password = $_POST['newPassword'] ?? null;
$birthday = $_POST['birthday'] ?? null;


$file = file_get_contents('dataStorage.json');  // Открыть файл data.json   
$taskList = json_decode($file, true);        // Декодировать в массив                 
unset($file);                               // Очистить переменную $file  
$taskList[] = array(
    'name'=> $login, 
    'password' => crypt($password, 'secret_key'), 
    'birthday' => $birthday, 
    'created' => time() + 86400);// Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
file_put_contents('dataStorage.json', json_encode($taskList));  // Перекодировать в формат и записать в файл. 
unset($taskList); 

include 'login.php';

?>