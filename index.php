<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовые задания</title>
    <style>
        code {
            display: flex;
            text-align: left;
        }

        table {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="first__task">
        <span>Задание №1:
            <p>Условие:</p>
            Вставить $a в индексный (простой) массив целых чисел,
            после всех элементов, в которых есть цифра 2.
            Новый массив создавать нельзя.
            Использовать функцию array_splice нельзя.
        </span>
        <span>
            <p>Исходный массив:</p>
        </span>
        <table>
            <caption>
            <tr>
                <th>Вывод на страницу</th>
                <th>Код</th>
            </tr>
            </caption>
            <tr>
                <th>
                    <?php
                    $array = array(2, 4, 6, 8, 12, 24, 48, 96, 192);
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                    ?>
                </th>
                <th>
                    <code>
                        $array = array(2, 4, 6, 8, 12, 24, 48, 96, 192);<br>
                        print_r($array);<br>
                    </code>
                </th>
            </tr>
        </table>
        <span>
            <p>Решение:</p>
            <table>
                <caption>
                <tr>
                    <th>Вывод на страницу</th>
                    <th>Код</th>
                </tr>
                </caption>
                <tr>
                    <th>
                        <?php
                        $a = 2;
                        $lenght = count($array);
                        for ($i = 0; $i < $lenght; $i++) {
                            if (strrpos($array[$i], "2") !== false) {
                                $lenght++;
                                for ($j = $lenght - 1; $j > $i; $j--) {
                                    $array[$j] = $array[$j - 1];
                                }
                                $i++;
                                $array[$i] = $a;
                            }
                        }
                        echo '<pre>';
                        print_r($array);
                        echo '</pre>';
                        ?>
                    </th>
                    <th>
                        <code>
                            $a = 2;<br>
                            $lenght = count($array);<br>
                            for ($i = 0; $i < $lenght; $i++) {<br>
                                    if (strrpos($array[$i], "2" ) !==false) {<br>
                                        $lenght++;<br>
                                        for ($j=$lenght - 1; $j> $i; $j--) {<br>
                                            $array[$j] = $array[$j - 1];<br>
                                        }<br>
                                        $i++;<br>
                                        $array[$i] = $a;<br>
                                    }<br>
                                }<br>
                                print_r($array);<br>
                        </code>
                    </th>
                </tr>
            </table>
        </span>

    </div>
    <hr>
    <div class='second__task'>
        <span>Задание №2:
            <p>Условие:</p>
            Создать PHP-страницу upload.php с формой загрузки CSV-файла
            В CSV-файле должны быть 2 столбца: название файла, содержимое
            Рядом с файлом upload.php требуется создать папку /upload/
            и создать в ней файлы, прочитав CSV-файл.<br>
            Пример файла CSV:<br>
            aaa.txt,Привет<br>
            bbb.log,Тест<br>
            ccc.html, &lth1> Заголовок &lt/h1><br>
        </span>
        <span>
            <p>Решение:</p>
            Пройдя по данной ссылке вам буде предложено создать свой файл CSV или загрузить готовый, а после выполнить работу с ним согласно задания<br>
            <a href="upload.php">Upload.php</a>
        </span>
    </div>
    <hr>
    <div class="third__task">
        <>Задание №3:
            <p>Условие:</p>
            Нарисовать ER-диаграмму БД для записи результатов соревнований бегунов марафона.
            В БД должны храниться Спортсмены, Соревнования,
            Результаты (спортсмена по соревнованию) и Список призеров (до 3-х на соревновании)
            <p>Решение:</p>
            <div><img src="mySQL.JPG" alt="ER-диаграмма"></div>
            <span>
                <p>Файл в формате 'mwb' лежит в корне проекта под именем '3_task.mwb'</p>
            </span>
            </span>
    </div>
    <hr>
    <div class="fourth__task">
        <span>Задание №4:
            <p>Условие:</p>
            Продолжение предыдущего задания.
            Напишите SQL-запрос для создания таблицы спортсменов (подберите типы подходящих данных):
            <p>ФИО, e-mail, телефон (только российские номера мобильных),</p>
            <p>дата рождения, возраст, дата и время создания записи,</p>
            <p>номер паспорта, среднее место на соревнованиях,</p>
            <p>биография, видеопрезентация.</p>
            И выберите из БД топ 5 ФИО спортсменов,
            больше остальных посетивших соревнований (одним SQL-запросом и без вложенных SELECT’ов)
        </span>
        <span>
            <p>Решение:</p>
            <p>Код sql запроса создание таблицы</p>
            <Code>
                CREATE database somename<br>
                <br>
                use somename<br>
                CREATE TABLE `спортсмены` (<br>
                `id Спортсмена` INT AUTO_INCREMENT NOT NULL UNSIGNED,<br>
                `ФИО` VARCHAR 50 NOT NULL ,<br>
                `е-mail` VARCHAR 50 NOT NULL ,<br>
                `Телефон` VARCHAR 15 NOT NULL ,<br>
                `Дата рождения` DATE NOT NULL ,<br>
                `Возраст` INT(3) NOT NULL UNSIGNED,<br>
                `Дата и время создания записи` TIMESTAMP NOT NULL ,<br>
                `Номер паспорта` VARCHAR 50 NOT NULL ,--С учетом что серия паспорта будет указана здесь же<br>
                --`Номер паспорта` INT NOT NULL ,--С учетом что серия паспорта будет указана отдельно<br>
                `Среднее место на соревнованиях` INT NOT NULL UNSIGNED,<br>
                `Биография` TEXT NOT NULL ,<br>
                `Видео презентация` LONGBLOB ,<br>
                PRIMARY KEY(`id Спортсмена`)<br>
                )<br>
            </code>
            <p>Код sql запроса выборки из таблицы</p>
            <code>
                use somename<br>
                <br>
                SELECT `Среднее место на соревнованиях` FROM `спортсмены`<br>
                ORDER BY `Среднее место на соревнованиях` ASC<br>
                LIMIT 5;<br>
            </Code>
        </span>
        <span>
            <p>Файл в формате 'sql' лежит в корне проекта под именем '4_task.sql'</p>
        </span>

    </div>

</body>

</html>