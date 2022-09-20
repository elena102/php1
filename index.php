<?php
// Задание 2

$name = readline("Привет, как тебя зовут?\n");
$age = readline("Сколько тебе лет?\n");
echo "Меня зовут $name, мне $age лет\n";

// Задание 3
$name = readline("Привет, как тебя зовут?\n");
$taskString = (string)readline("Какая задача стоит перед вами сегодня?\n");
$timeInteger = (integer)readline("Сколько примерно времени эта задача займет?\n");

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n";
echo"$taskString ($timeInteger ч)\n";
