
<h3>
Calculator
</h3>

<form action="/php/validation/calculator.php" method="POST">
    <h5>Enter value 1</h5>
    <input type="text" name="val1" id="val1">
    <h5>Enter value 2</h5>
    <input type="text" name="val2" id="val2">
    <br>
    <br>

    <input type="radio" name="operation" id="add" value="add">
    :Add <br>
    <input type="radio" name="operation" id="substract" value="substract">
    :Substract <br>
    <input type="radio" name="operation" id="divide" value="divide">
    :Divide <br>
    <input type="radio" name="operation" id="multiply" value="multiply">
    :Multiply <br>
    
    <br>
    <button type="submit">Calculate</button>
</form>

    <h5>Result:</h5>
    <?php
        $num1 = $_POST['val1'];
        $num2 = $_POST['val2'];
        $opr = $_POST['operation'];
        
        if(!isset($opr)){
            echo "No operation is defined <br>";
        }

        $result = 0;

        if( $opr == 'add' ){
            $result = $num1 + $num2;
        }elseif( $opr == 'substract' ){
            $result = $num1 - $num2;
        }elseif( $opr == 'divide' ){
            $result = $num1 / $num2;
        }elseif( $opr == 'multiply' ){
            $result = $num1 * $num2;
        }

        echo '<input type="text" name="result" id="result" value='.$result.'>';
        echo "<br>";
    ?>