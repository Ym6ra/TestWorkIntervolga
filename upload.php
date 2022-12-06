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
    <div>Создать PHP-страницу upload.php с формой загрузки CSV-файла
        <p>В CSV-файле должны быть 2 столбца: название файла, содержимое
        <p>Рядом с файлом upload.php требуется создать папку /upload/
        <p>и создать в ней файлы, прочитав CSV-файл.</p>
    </div>
    <div>
        <p>Решение:</p>
        <p>*Файл каждый раз перезаписывается, нет нужды удалять предыдущий файл.</p>
        <table>
            <caption>
            <tr>
                <th>Создать файл CSV</th>
                <th>Использовать имеющися</th>
                <th>Код</th>
            </tr>
            </caption>
            <tr>
                <th>
                    <form action="create.php" method="post">
                        <p><input name="_1col_0str" value="Название файла" readonly>
                            <input name="_2col_0str" value="Содержимое" readonly>
                        </p>
                        <p><input name="_1col_1str" value="aaa.txt">
                            <input name="_2col_1str" value="Привет">
                        </p>
                        <p><input name="_1col_2str" value="bbb.log">
                            <input name="_2col_2str" value="Тест">
                        </p>
                        <p><input name="_1col_3str" value="ccc.html">
                            <input name="_2col_3str" value="<h1>Заголовок</h1>">
                        </p>
                        <button>Create</button>
                    </form>
                </th>
                <th><?php
                    if ($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK) {
                        if ($_FILES["filename"]["type"] == 'text/csv') {
                            $name = 'data.csv';
                            move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
                            echo "<p>Файл загружен</p>";
                        } else {
                            echo '<p>неверный формат файла, подходящий "csv"</p>';
                        }
                    }
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        Выберите файл: <input type="file" name="filename" size="10" /><br /><br />
                        <input type="submit" value="Загрузить" />
                    </form>
                </th>
                <th>
                    <Code>
                        if ($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK) {<br>
                            if ($_FILES["filename"]["type"] == 'text/csv') {<br>
                                $name = 'data.csv';<br>
                                move_uploaded_file($_FILES["filename"]["tmp_name"], $name);<br>
                                echo "&ltp>Файл загружен&lt/p>";<br>
                            } else {<br>
                            echo '&ltp>неверный формат файла, подходящий "csv"&lt/p>';<br>
                            }
                        }
                    </Code>
                </th>
            </tr>
        </table>
        <p>Загрузка и обработка данных из файла CSV</p>
        <form action="data_processing.php" method="post">
            <button>Load</button>
        </form>
    </div>
    <a href="index.php">К заданиям</a>
</body>

</html>