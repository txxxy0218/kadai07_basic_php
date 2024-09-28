<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>NOMAD家計簿｜収入登録画面</title>
</head>
<body>
    <?php 
    include("components/header.html"); 
    ?>

    <main>
        <div class="section">
            <form id="income" action="write.php" method="post">
                <input id="in-ex" type="radio" name="in-ex" value="収入" checked>
                
                <div>
                    <p>金額</p>
                    <input type="text" name="balance" required>
                    <select name="currency" id="" required>
                        <option value="円">円</option>
                        <option value="アメリカドル">アメリカドル</option>
                        <option value="カナダドル">カナダドル</option>
                        <option value="元">元</option>
                        <option value="ウォン">ウォン</option>
                        <option value="オーストラリアドル">オーストラリアドル</option>
                    </select>
                </div>
                <div>
                    <p>カテゴリ</p>
                    <div class="categories">
                        <input type="radio" name="category" value="給与" required>給与
                        <input type="radio" name="category" value="ボーナス" required>ボーナス
                        <input type="radio" name="category" value="配当金" required>配当金
                        <input type="radio" name="category" value="副業" required>副業
                        <input type="radio" name="category" value="不動産" required>不動産
                        <input type="radio" name="category" value="贈与" required>贈与
                        <input type="radio" name="category" value="臨時収入" required>臨時収入
                        <input type="radio" name="category" value="その他" required>その他
                    </div>
                </div>
                <div>
                    <p>日付</p>
                    <input type="date" name="date" required>
                </div>
                <div>
                    <p>備考</p>
                    <input type="text" name="memo">
                </div>

                <button type="submit" value="登録">登録する</button>
            </form>
        </div>
    </main>
    
    
    <?php 
    include("components/footer.html"); 
    ?>
    
</body>
</html>