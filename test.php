$link = new mysqli("localhost", "root", "", "aliendatabase");

$link->query("Insert Into alien_abduction(first_name, last_name, when_it_heppend, how_long, how_many, alien_description, what_they_did,"."
fang_spotted, other, email VALUE ('$name','$when_it_heppend',"."
'$how_long','$how_many','$alien_description','$what_they_did',"."
'$fang_spotted','$other','$email')");

$result = mysqli::query($abc, $query)


$abc = mysqli_connect("localhost", "root", "", "aliendatabase")

or die ('Ошибка соединения с MySQL-сервером');

$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_heppend, how_long, how_many, alien_description, "."
what_they_did, fang_spotted, other, email) VALUES ('Салли', 'Джонс', '3 дня назад', '1 день', 'четыре','зеленые с шестью"."
щупальцами', 'мы просто разговаривали и играли с собакой','да', 'ВОЗМОЖНО, я видела вашу собаку, "."
свяжитесь со мной','sal1y@gregs-1ist.net')";

$result = mysqli::query($abc, $query)
or die ($status ="Ошибка при выполнении запроса к базе данных");

mysqli::close($abc);

$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_heppend, how_long, how_many, alien_description, "."
what_they_did, fang_spotted, other,) VALUES ('$first_name','$last_name', '$when_it_heppend', '$how_long', '$how_many', '$alien_description', '$what_they_did', '$fang_spotted', '$other' )";

$database = $link = new mysqli("localhost", "root", "", "aliendatabase")
or die ('Ошибка соединения с MySQL-сервером');


$subject = 'Космические пришельцы похищали меня - сообщение о похищении';
$to = 'sergey.khaleev@gmail.com';
$msg = "$first_name $last_mane был похищен $when_it_heppend  и отсутствовал $how_long\n" .
"Количество космических пришельцев: $how_many\n" .
"Описание космических пришельцев: $alien_description\n" .
"Что они делали? $what_they_did\n" .
" Френк замечен?  $fang_spotted\n" .
"Дополнительная информация: $other";
mail($to, $subject, $msg, 'От:' . $email);