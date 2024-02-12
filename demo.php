<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <form action="" method="post">
        <input type="text" name="NumberText1" class="NumberText NumberText1" placeholder="ČÍSLO1">

        <select name="operations" id="" class="dropdownlist" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="text" name="NumberText2" class="NumberText NumberText2" placeholder="ČÍSLO2">

        <input type="submit" value="Spočítač" class="count">

        <h1 id="result"></h1>
    </form>

    <script>
        let input = document.querySelector("count")
        input.addEventListener("submit", (event) => {
            event.preventDefault();
        })
    </script>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = isset($_POST["NumberText1"]) ? $_POST["NumberText1"] : 0;
            $number2 = isset($_POST["NumberText2"]) ? $_POST["NumberText2"] : 0;
            $operation = isset($_POST["operations"]) ? $_POST["operations"] : '+';

            switch ($operation) {
                case '+':
                    $result = $number1 + $number2;
                    break;
                case '-':
                    $result = $number1 - $number2;
                    break;
                case '*':
                    $result = $number1 * $number2;
                    break;
                case '/':
                    $result = ($number2 != 0) ? ($number1 / $number2) : "Cannot divide by zero!";
                    break;
                default:
                    $result = "Invalid operation";
            }

            echo '<h1 id="result">' . $result . '</h1>';
        }
            
    ?>
</body>
</html>