<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    .text {
        font-size: 60px;
        font-weight: 700;
        letter-spacing: 8px;
        margin-bottom: 20px;
        position: relative;
        animation: text 3s 1;
    }

    .text1 {
        font-size: 60px;
        font-weight: 700;
        letter-spacing: 8px;
        margin-bottom: 20px;
        position: relative;
    }

    @keyframes text {
        0% {
            color: black;
            margin-bottom: -40px;
        }
        30% {
            letter-spacing: 25px;
            margin-bottom: -40px;
        }
        85% {
            letter-spacing: 8px;
            margin-bottom: -40px;
        }

    }
</style>
<body>
<div class="container">
    <span>Think about a random number from 1 to 100</span>
    <span>Click Play!</span>
    <form action="main.php" method="post" style="margin-top: 30px">
        <button type="submit" name="btn_play" class="btn btn-outline-primary">Play</button>
    </form>

</div>
<script>
    function display() {
        document.getElementById('panel').style.display = "none";
    }
</script>
</body>
</html>
