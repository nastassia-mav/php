<?php
//EXERCISE 1
$str = 'php';
echo strtoupper($str);

//EXERCISE 6
$str = 'LONDON';
echo  ucfirst(strtolower($str));

//EXERCISE 8
$password = 'LONDON';
if(strlen($password) < 10 and strlen($password) > 5){
    echo 'Пароль подходит';
}else{
    echo 'Пароль не подходит';
}

//EXERCISE 15
$password = 'LONDON';
if(strlen($password) > 5){
    echo substr($password, 1, 5).'...';
}else{
    echo $password;
}
