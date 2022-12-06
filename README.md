# TestWorkIntervolga
Задание: <br>
1. Алгоритм<br>
Вставить $a в индексный (простой) массив целых чисел после всех элементов,<br>
в которых есть цифра 2. Новый массив создавать нельзя. Использовать функцию array_splice нельзя.<br>
<hr>
2. Веб<br>
Создать PHP-страницу upload.php с формой загрузки CSV-файла<br>
В CSV-файле должны быть 2 столбца: название файла, содержимое<br>
Рядом с файлом upload.php требуется создать папку /upload/ и создать в ней файлы, прочитав CSV-файл.<br>
Какие дыры это может создать? Как бороться?<br>
Ограничений на функции и возможности PHP нет.<br>
<br>
Пример файла CSV:<br>
aaa.txt,Привет<br>
bbb.log,Тест<br>
ccc.html,$lth1>Заголовок$lt/h1><br>
<br>
При загрузке такого файла должны быть созданы /upload/1.txt, /upload/2.log, /upload/3.html (с соответствующим содержимым)<br>
<br>
<hr>
3. БД<br>
Нарисовать ER-диаграмму БД для записи результатов соревнований бегунов марафона. <br>
В БД должны храниться Спортсмены, Соревнования, Результаты (спортсмена по соревнованию) и Список призеров (до 3-х на соревновании)<br>
<hr>
4. SQL<br>
Продолжение предыдущего задания. Напишите SQL-запрос для создания таблицы спортсменов (подберите типы подходящие данных):<br>
ФИО, e-mail, телефон (только российские номера мобильных), дата рождения<br>
возраст, дата и время создания записи, номер паспорта,
среднее место на соревнованиях, биография,видеопрезентация.
И выберите из БД топ 5 ФИО спортсменов,<br>
больше остальных посетивших соревнований (одним SQL-запросом и без вложенных SELECT’ов)<br>