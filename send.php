<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>確認ページ</h1>

<h3><?php echo "この内容でよろしいですか？"; ?></h3>

<p><?php echo "日付：".$_POST["date"]; ?></p>

<p><?php echo "サマリー：".$_POST["summary"]; ?></p>

<p><?php echo "詳細：".$_POST["detail"]; ?></p>


</body>
</html>
