<?php

$recepient = "nersisyan21@mail.ru";
$sitename = "DeBul";

$name = trim($_POST["email"]);
$phone = trim($_POST["name"]);
$text = trim($_POST["surname"]);
$message = "Name: $name \nEmail: $phone \nSurname: $text";

$pagetitle = "New request \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");