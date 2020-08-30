<?php

// Сообщение

$message = "сережа петушок";

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()

$message = wordwrap($message, 70);

// Отправляем

mail('djek1893@mail.ru,gamepad.x.play@gmail.com', 'My Subject', $message);
Echo проверочка;

?>