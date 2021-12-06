<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$when_it_heppend = $_POST['whenithappend'];
$how_long = $_POST['howlong'];
$alien_description = $_POST['aliendescription'];
$how_many = $_POST['howlong'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$what_they_did = $_POST['whattheydid'];
$other = $_POST['other'];

echo 'Спасибо за выполнение формы.<br>';
echo 'Вы были похищены:' . ' ' . $when_it_heppend . '<br>';
echo 'и отсутствовали в течение:' . ' ' . $how_long . '<br>';
echo 'количество космических пришельцев:' . ' ' . $how_many . '<br>';
echo 'Опишите их:' . ' ' . $alien_description . '<br>';
echo 'что они делали:' . ' ' . $what_they_did . '<br>';
echo 'Вы видели моя собаку Френка?' . ' ' .$fang_spotted . '<br>';
echo 'Дополнительная информация' . ' ' . $other . '<br>';
echo 'Ваш почтовый адрес' . ' ' .  $email . '<br>';

$DB = mysqli_connect("localhost", "root", "", "aliendatabase")
    or die ('Ошибка соединения с MySQL-сервером');

$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_heppend, how_long, how_many, alien_description, what_they_did, fang_spotted, other) 
VALUES ('$first_name','$last_name', '$when_it_heppend', '$how_long', '$how_many', '$alien_description', '$what_they_did', '$fang_spotted', '$other' )";

$result = mysqli_query($DB, $query);
