<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="assets/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>اس ام اس بمبر</title>
</head>
<body>
<form action="sms.php" class="bomber-form" method="POST">
    <?php
    if (isset($_GET['number']) && $_GET['number'] == 0) { ?>
        <div class="error">!فرمت شماره وارد شده اشتباه می باشد</div>
    <?php } ?>
    <h3>اس ام اس بمبر 💣</h3>
    <label for="phone">شماره تلفن(با صفر)</label>
    <input id="phone" name="phone" placeholder="09XXXXXXXXX" type="text">
    <button name="submit">ارسال</button>
    <a href="https://github.com/amirmalek0" target="_blank"><img alt="AmirMalek-Github" class="git" src="assets/img/github.png"></a>
</form>
</body>
</html>