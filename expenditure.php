<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>NOMAD家計簿｜支出入力画面</title>
</head>
<body>
    <?php 
    include("components/header.html"); 
    ?>

    <main class="section">
        <form id="expenditure" action="write.php" method="post">
            <input id="in-ex" type="radio" name="in-ex" value="支出" checked>

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
                <div class="categories" id="fixed-expenditure">
                    <p>固定費</p>
                    <input type="radio" name="category" value="家賃">家賃
                    <input type="radio" name="category" value="通信費">通信費
                    <input type="radio" name="category" value="保険">保険
                    <input type="radio" name="category" value="サブスク">サブスク
                    <input type="radio" name="category" value="積立">積立
                    <input type="radio" name="category" value="その他">その他
                </div>
                <div class="categories" id="variable-expenditure">
                    <p>変動費</p>
                    <input type="radio" name="category" value="電気代">電気代
                    <input type="radio" name="category" value="水道代">水道代
                    <input type="radio" name="category" value="ガス代">ガス代
                    <input type="radio" name="category" value="食費">食費
                    <input type="radio" name="category" value="交際費">交際費
                    <input type="radio" name="category" value="交通費">交通費
                    <input type="radio" name="category" value="日用品・ドラッグストア">日用品・ドラッグストア
                    <input type="radio" name="category" value="書籍・勉強">書籍・勉強
                    <input type="radio" name="category" value="美容・服飾">美容・服飾
                    <input type="radio" name="category" value="その他">その他
                </div>
            </div>
            <div>
                <p>日付</p>
                <input type="date" name="date">
            </div>
            <div>
                <p>備考</p>
                <input type="text" name="memo">
            </div>

            <button class="register" type="submit" value="登録">登録する</button>
        </form>


    </main>
    
    
    <?php 
    include("components/footer.html"); 
    ?>
    
</body>
</html>