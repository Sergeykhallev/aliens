<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Космические пришельцы похищали меня - сообщение о похищении</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<h2>Космические пришельцы похищали меня - сообщение о похищении</h2>
<p>Расскажите историю о похищении вас космическими пришельцами</p>
<form method="post" action="report.php">
    <div class="ass">
        <label for="firstname">Имя:</label>
        <input type="text" id="firstname" name="firstname"><br>
        <label for="lastname">Фамилия:</label>
        <input type="text" id="lastname" name="lastname"><br>
        <label for="email">Ваш адрес электронной почты:</label>
        <input type="text" id="email" name="email"><br>
        <label for="whenithappend">Когда это произошло?</label>
        <input type="text" id="whenithappend" name="whenithappend"><br>
        <label for="howlong">Как долго вы отсутствовали?</label>
        <input type="text" id="howlong" name="howlong"><br>
        <label for="howmany">Сколько их было?</label>
        <input type="text" id="howmany" name="howmany"><br>
        <label for="aliendescription">Опишите их:</label>
        <input type="text" name="aliendescription" id="aliendescription" size="32"><br>
        <label for="whattheydid">Что они делали?</label>
        <input type="text" name="whattheydid" id="whattheydid" size="32"><br>
        <label for="fangspotted">Видели ли вы мою собаку Фенга?</label>
        да <input type="radio" id="fangspotted" name="fangspotted" value="yes">
        нет <input type="radio" id="fangspotted" name="fangspotted" value="no"><br>
        <img src="scale_1200.jpg" width="100" height="175" alt="Моя похищенная собака Фенг."><br>
        <label for="other">Дополнительная информация</label>
        <textarea name="other" id="other"></textarea><br>
        <input type="submit" value="Сообщение о похищении" name="submit">
    </div>
</form>
</body>
</html>