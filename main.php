<?php session_start(); ?>

<?php
if (isset($_POST['btn_play'])) {
    $_SESSION['low'] = 1;
    $_SESSION['high'] = 100;
    $_SESSION['result'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2);
} elseif (isset($_POST['btn_bigger'])) {
    $_SESSION['low'] = $_SESSION['result'] + 1;
    $_SESSION['result'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2);
} elseif (isset($_POST['btn_smaller'])) {
    $_SESSION['high'] = $_SESSION['result'] - 1;
    $_SESSION['result'] = floor(($_SESSION['low'] + $_SESSION['high']) / 2);
}
if (isset($_POST['btn_replay'])) {
    header("location:index.php");
}
?>
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
    <?php if (isset($_POST['btn_correct'])) {
        $_SESSION['result'] = null;
        echo '<span class="text">Game Over!!!</span>';
//        header("location:index.php");
    } elseif (isset($_SESSION['result'])) {
        echo '<span class="text1"> Your number is: ' . $_SESSION['result'] . '</span>';
    } ?>
    <form action="#" method="post" style="margin-top: 30px">
        <button type="submit" name="btn_bigger" class="btn btn-outline-danger">Too low</button>
        <button type="submit" name="btn_smaller" class="btn btn-outline-danger">Too high</button>
        <button type="submit" name="btn_correct" class="btn btn-outline-success">Correct</button>
        <button type="submit" name="btn_replay" class="btn btn-outline-primary">Replay</button>
    </form>

</div>
<script>
    function display() {
        document.getElementById('panel').style.display = "none";
    }
</script>
</body>
</html>
