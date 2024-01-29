<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Kalkulačka</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        form {
            text-align: center;
            margin: 0 auto;
            margin-top: 100px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 40%;
            gap: 40px;
        }

        .NumberText {
            padding: 10px;
            text-align: center;
            width: 50%;
            margin: 0 auto;
        }

        .dropdownlist {
            width: 50%;
            margin: 0 auto;
            padding: 5px;
            text-align: center;
            -webkit-appearance: none;
        }

        .count {
            padding: 5px;
            width: 30%;
            margin: 0 auto;
        }
    </style>

</head>
<body>

    <form action="">
        <input type="text" class="NumberText" placeholder="ČÍSLO1">

        <select name="operations" id="" class="dropdownlist" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value=":">:</option>
        </select>

        <input type="text" class="NumberText" placeholder="ČÍSLO2">

        <input type="submit" value="Spočítač" class="count">
        <h1 id="result">/-_-/</h1>
    </form>



    <?php

    ?>
</body>
</html>