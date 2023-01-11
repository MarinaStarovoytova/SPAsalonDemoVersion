<?php

$login = $_POST['login'] ?? null;
$password = crypt($_POST['password'], 'secret_key') ?? null;
$created = 0;

function getCurrentUser()
{
    return $_POST['login'] ?? null;
}

function getUsersList()
{
    $json = file_get_contents('dataStorage.json');
    $result = json_decode($json, true);
    return  $result;
}

function existsUser($name)
{
    $arrayUser = getUsersList();
    foreach ($arrayUser as $key => $value) {
        if (in_array($name, $value)) {
            return true;
        }
    }
    return false;
}

function checkPassword($name, $code)
{
    $arrayUser = getUsersList();
    if (existsUser($name) === true) {
        foreach ($arrayUser as $key => $value) {
            if ($name === $value['name'] && $code === $value['password']) {
                return true;
            }
        }
    }
    return false;
}

function getCreated($name, $code)
{
    $arrayUser = getUsersList();
    if (existsUser($name) === true) {
        foreach ($arrayUser as $key => $value) {
            if ($name === $value['name'] && $code === $value['password']) {
                return $value['created'];
            }
        }
    }
    return 0;
}

function getBirthday($name, $code)
{
    $arrayUser = getUsersList();
    if (existsUser($name) === true) {
        foreach ($arrayUser as $key => $value) {
            if ($name === $value['name'] && $code === $value['password']) {
                return $value['birthday'];
            }
        }
    }
    return 0;
}

// возвращает массив всех пользователей и хэшей их паролей
$allUsers = getUsersList();
// var_dump($allUsers); 

// проверяет, существует ли пользователь с указанным логином
$userTrueORfalse = existsUser($login);

// возвращает true, когда существует пользователь с указанным логином и введенный им пароль прошел проверку, 
// иначе - false
$trueORfalsePassword = checkPassword($login, $password);

// возращает либо имя вошедшего на сайте пользователя, либо null ?????????
$nameUser = getCurrentUser();

$created = getCreated($login, $password);
$birthday = getBirthday($login, $password);

session_start();
if ($trueORfalsePassword === true) {
    setcookie(name: $login . '_created', value: $created);
    setcookie(name: 'user', value: $login);
    setcookie(name: $login . '_birthday', value: $birthday);
    header('Location: index.php');  // перенаправление на нужную страницу
    setcookie('ErrorLogin', '', time() - 1);
    exit();
} else {
    setcookie(name: 'ErrorLogin', value: "login");
    header('Location: login.php');
}
