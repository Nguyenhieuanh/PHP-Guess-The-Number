<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess number</title>
</head>
<style>
    .container {
        width: 500px;
        margin-left: 20px;
        line-height: 30px;
    }
    .container label {
        width: 50px;
        float: left;
    }
</style>
<body>
<form action="#">
    <div class="container">
        <label for="high">High</label><input type="number" id="high" value="100">
        <br>
        <label for="low">Low</label><input type="number" id="low" value="1">
        <br>
        <label for="result"><strong>Result</strong></label><input type="number" id="result">
        <br>
        <button onclick="binarySearch()">Play</button>
        <button onclick="biggerSearch()" id="bigger">Bigger</button>
        <button onclick="smallerSearch()" id="smaller">Smaller</button>
        <button onclick="alert('Game Over')" type="reset">Correct</button>
    </div>
</form>
</body>
<script>
    let low = document.getElementById('low');
    let high = document.getElementById('high');
    let result = document.getElementById('result');

    function binarySearch() {
        result.value = Math.floor((1 + 100) / 2);
    }

    function biggerSearch() {
        if (document.getElementById('bigger').onclick) {
            low.value = parseFloat(document.getElementById('result').value) + 1;
            console.log(low.value);
            result.value = Math.floor((parseFloat(low.value) + parseFloat(high.value)) / 2);
        }
    }

    function smallerSearch() {
        if (document.getElementById('smaller').onclick) {
            high.value = parseFloat(document.getElementById('result').value) - 1;
            console.log(low.value);
            result.value = Math.floor((parseFloat(low.value) + parseFloat(high.value)) / 2);
        }
    }

</script>
</html>
