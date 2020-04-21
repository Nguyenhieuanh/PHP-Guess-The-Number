<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Game đoán số</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    * {
        padding: 0;
        margin-bottom: 0;
        font-family: sans-serif;
    }

    .container {
        text-align: center;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }

    .container span {
        text-transform: uppercase;
        display: block;
    }

</style>
<body>
<div class="container">
    <span>Think about a random number from 1 to 100</span>
    <span>Click Guess!</span>
    <form action="main.php" method="post" style="margin-top: 30px">
        <button type="submit" name="btn_play" class="btn btn-outline-primary" style="width: 100px;">Guess</button>
    </form>
</div>
</body>
</html>
