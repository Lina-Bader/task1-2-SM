<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Control Buttons</title>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        margin: 0;
        background-color: #f0f0f0;
    }

    .button-container {
        position: relative;
        width: 300px;
        height: 300px;
        margin-bottom: 20px;
    }

    .button {
        position: absolute;
        width: 80px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        font-size: 16px;
        cursor: pointer;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 20px;
    }

    #stopButton {
        left: 110px;
        top: 190px;
    }

    #leftButton {
        left: 20px;
        top: 90px;
    }

    #rightButton {
        left: 200px;
        top: 90px;
    }

    #forwardButton {
        left: 110px;
        top: 40px;
    }

    #backButton {
        left: 110px;
        top: 130px;
    }

    .last-value-container {
        width: 300px;
        padding: 10px;
        text-align: center;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 10px;
    }
</style>
</head>
<body>
    <div class="button-container">
        <form action="includes/formhandler.inc.php" method="post">
            <input class="button" type="submit" id="leftButton" name="left" value="Left">
            <input class="button" type="submit" id="rightButton" name="right" value="Right">
            <input class="button" type="submit" id="forwardButton" name="Forward" value="Forward">
            <input class="button" type="submit" id="backButton" name="backwards" value="Back">
            <input class="button" type="submit" id="stopButton" name="stop" value="Stop">
        </form>
    </div>
    <div class="last-value-container">
        Last value entered: <span id="lastValue">Loading...</span>
    </div>

    <script>
        async function fetchLastValue() {
            try {
                let response = await fetch('includes/getlastvalue.inc.php');
                let data = await response.text();
                document.getElementById('lastValue').innerText = data;
            } catch (error) {
                document.getElementById('lastValue').innerText = 'Failed to load';
            }
        }

        window.onload = fetchLastValue;
    </script>
</body>
</html>


