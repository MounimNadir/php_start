<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator - Beginner</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .calculator-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            animation: fadeIn 0.5s ease-in-out;
        }

        h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            font-size: 3.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }

        .calculator-title {
            color: #764ba2;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input, select {
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        input:focus, select:focus {
            border-color: #764ba2;
            outline: none;
            box-shadow: 0 0 0 3px rgba(118, 75, 162, 0.2);
        }

        button {
            background-color: #764ba2;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: bold;
            letter-spacing: 1px;
        }

        button:hover {
            background-color: #5d3a7e;
            transform: translateY(-2px);
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            font-size: 1.2rem;
            text-align: center;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-left: 5px solid #764ba2;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2.5rem;
            }
            
            .calculator-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <h1>PHP Calculator</h1>
    
    <div class="calculator-container">
        <h2 class="calculator-title">Beginner's Calculator</h2>
        
        <form method="GET">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>

            <select name="operator">
                <option value="None">Select operation</option>
                <option value="Add">Addition (+)</option>
                <option value="Subtract">Subtraction (-)</option>
                <option value="Multiply">Multiplication (×)</option>
                <option value="Divide">Division (÷)</option>
            </select>
            
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>

        <div class="result">
            <?php
                if(isset($_GET['submit'])){
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $operator = $_GET['operator'];

                    switch($operator){
                        case "None": 
                            echo "Please select an operation!";
                            break;
                        case "Add": 
                            echo "$result1 + $result2 = " . ($result1 + $result2);
                            break;
                        case "Subtract": 
                            echo "$result1 - $result2 = " . ($result1 - $result2);
                            break;
                        case "Multiply": 
                            echo "$result1 × $result2 = " . ($result1 * $result2);
                            break;
                        case "Divide": 
                            if ($result2 == 0) {
                                echo "Cannot divide by zero!";
                            } else {
                                echo "$result1 ÷ $result2 = " . ($result1 / $result2);
                            }
                            break;        
                    }
                } else {
                    echo "Your result will appear here";
                }
            ?>
        </div>
    </div>
</body>
</html>