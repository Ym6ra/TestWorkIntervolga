<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовые задания</title>
</head>

<body>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $res = [];

            if (!file_exists("data.csv")) {
                    echo '<p>Отсутствует необходимый файл "data.csv"</p>';
            }else{
                if (($file = fopen("data.csv", 'r')) !== false) {
                    while (($data = fgetcsv($file, 1000, ',')) !== false) {
                        $res[] = $data;
                    }
                    fclose($file);

                    $dir = "upload";
                    if (!is_dir($dir)) {
                        mkdir($dir);
                    }
                    $_1col_1str = $res[1][0];
                    $_1col_2str = $res[2][0];
                    $_1col_3str = $res[3][0];
                    $fp_1col_1str = fopen("upload/$_1col_1str", "a");
                    fwrite($fp_1col_1str, $res[1][1]);
                    $fp_1col_2str = fopen("upload/$_1col_2str", "a");
                    fwrite($fp_1col_2str, $res[2][1]);
                    $fp_1col_3str = fopen("upload/$_1col_3str", "a");
                    fwrite($fp_1col_3str, $res[3][1]);
                    echo '<p>Документы созданы!</p>';
                }else{
                    echo '<p>Ошибка открытия файла</p>';
                }
            }
        }
        ?>
    </div>
    <div>
        <form action="upload.php" method="POST">
            <button>Back</button>
        </form>
    </div>
</body>

</html>