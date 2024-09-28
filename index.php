<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>NOMAD家計簿</title>
</head>
<body>
    <?php 
    include("components/header.html"); 
    ?>

    <main class="section top">
        <a href="expenditure.php"><button id="regi-expenditure">支出を登録</button></a>
        <a href="income.php"><button id="regi-income">収入を登録</button></a>
        <a href="list.php"><button id="view-list">収支一覧</button></a>
        <a href="analysis.php"><button id="view-analysis">家計分析</button></a>
    </main>
    
    
    <?php 
    include("components/footer.html"); 
    ?>
    
</body>
</html>