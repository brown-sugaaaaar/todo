<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>TODO</title>
</head>
<body>

<h1>TODO</h1>

<div class="main">
  <div>
    <h3>フォーム</h3>
    <div class="main_form">
      <div class="col-md-8">
        <form method="post" action="send.php">
          <div class="mb-3">
            <label for="date" class="form-label">日付</label>
            <input type="date" name="date" class="form-control" id="date">
          </div>
          <div class="mb-3">
            <label for="summary" class="form-label">サマリー</label>
            <input type="text" name="summary" class="form-control" id="summary">
          </div>
          <div class="mb-3">
            <label for="detail" class="form-label">詳細</label>
            <textarea class="form-control" name="detail" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <div>
    <h3>スケジュール</h3>
    <div class="main_form">
      <ul>
        <li>aaa</li>
        <li>aaa</li>
        <li>aaa</li>
      </ul>
    </div>
  </div>
</div
</body>
</html>