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
            $name = $_POST['name'];
            $data = array(
                array($_POST['_1col_0str'], $_POST['_2col_0str']),
                array($_POST['_1col_1str'], $_POST['_2col_1str']),
                array($_POST['_1col_2str'], $_POST['_2col_2str']),
                array($_POST['_1col_3str'], $_POST['_2col_3str']),
            );
            $fp = fopen('data.csv', 'w+');
            foreach ($data as $fields) {
                fputcsv($fp, $fields);
            }
            fclose($fp);
        }
        ?>
    </div>
    <div>
        <p>Файл CSV создан!</p>
        <form action="upload.php" method="POST">
            <button>Back</button>
        </form>
    </div>
</body>

</html>