<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>NOMAD家計簿｜データ登録</title>
</head>
<body>

    <main class="section">
        <?php 

            // エラーメッセージの表示を有効化
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $inEx      = $_POST["in-ex"];
            $balance   = $_POST["balance"];
            $currency  = $_POST["currency"];
            $category  = $_POST["category"];
            $date      = $_POST["date"];
            $memo      = $_POST["memo"];
            $c         = ",";
            $str       = $date.$c.$inEx.$c.$balance.$currency.$c.$category.$c.$memo;

            $file = fopen("data.csv", "a");
            fwrite($file, $str."\n");
            fclose($file);

            header("Location: list.php");
            exit;
        ?>

    </main>
    
    
</body>
</html>