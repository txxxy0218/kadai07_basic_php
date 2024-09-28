<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>NOMAD家計簿｜出入金一覧</title>
</head>
<body>
    <?php 
        include("components/header.html"); 
    ?>

    <main class="section">


        <table class="list">
            <tr class="label">
                <th>日付</th>
                <th>収支</th>
                <th>金額</th>
                <th>カテゴリ</th>
                <th>備考</th>
            </tr>

            <?php
                // ファイルを変数に格納
                $filename = 'data.csv';
                
                // fopenでファイルを開く（'r'は読み込みモードで開く）
                $fp = fopen($filename, 'r');
                
                // whileで行末までループ処理
                while (!feof($fp)) {
                    // fgetsでファイルを読み込み、変数に格納
                    $data = fgets($fp);
                    // 空行をスキップ
                    if (trim($data) == '') {
                        continue;
                    }
                    //読み込んだデータを配列に変換
                    $array = explode(",",$data);

                    if($array[1]=='収入'){
                        // ファイルを読み込んだ変数を出力
                        echo '<tr class="row income"><th>'.$array[0].'</th><th>'.$array[1].'</th><th>'.$array[2].'</th><th>'.$array[3].'</th><th>'.$array[4].'</th></tr>';
                    }else{
                        // ファイルを読み込んだ変数を出力
                        echo '<tr class="row expenditure"><th>'.$array[0].'</th><th>'.$array[1].'</th><th>−'.$array[2].'</th><th>'.$array[3].'</th><th>'.$array[4].'</th></tr>';
                    }
                    
                }
                
                // fcloseでファイルを閉じる
                fclose($fp);
            ?>
            
        </table>

        <table class="result">
            <tr class="label">
                <th>収入合計</th>
                <th>支出合計</th>
                <th>収支</th>
            </tr>

            <?php
                // ファイルを変数に格納
                $filename = 'data.csv';
                
                // fopenでファイルを開く（'r'は読み込みモードで開く）
                $fp = fopen($filename, 'r');

                // whileで行末までループ処理
                while (!feof($fp)) {
                    // fgetsでファイルを読み込み、変数に格納
                    $data = fgets($fp);
                    // 空行をスキップ
                    if (trim($data) == '') {
                        continue;
                    }
                    //読み込んだデータを配列に変換
                    $array = explode(",",$data);

                    // 収入・支出を判定し、各配列に追加
                    if ($array[1] == '収入') {
                        // income配列にデータを保存（数値として保存）
                        $income[] = (float) $array[2];
                    } else {
                        // expenditure配列にデータを保存（数値として保存）
                        $expenditure[] = (float) $array[2];
                    }
                }

                // 配列の合計を計算
                $totalIncome = array_sum($income);           // 収入の合計
                $totalExpenditure = array_sum($expenditure); // 支出の合計
                $balance = $totalIncome - $totalExpenditure; // 収支（収入 - 支出）

                // 結果をテーブルで表示
                echo '<tr class="total"><th>'.$totalIncome.'円</th><th>'.$totalExpenditure.'円</th><th>'.$balance.'円</th></tr>';
                
                // fcloseでファイルを閉じる
                fclose($fp);
            ?>
        </table>
        

    </main>
    
    
    <?php 
        include("components/footer.html"); 
    ?>
    
</body>
</html>