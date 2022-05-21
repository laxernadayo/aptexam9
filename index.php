
<html>
    <head>
        <title>APTITUDE EXAM NUMBER 9</title>
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="number_input">Please enter a number from 1 to 20:</label>
            <input type="text" name="number_input">
            <input type="submit" value="Submit">
        </form>
        <?php
        /******** Algorithm
        1. Get and validate user input ($maxLength)
        2. Define variables $counter, $previousValue, $nextValue, $total, and $fibonaccis
        3. Check if $counter is less than $maxLength
        4. Get the sum of $previousValue and $nextValue and set to $total.
        For $counter 0 and 1, set $total to the value of $counter. 
        5. Set $previousValue  to $nextValue.
        6. Set $nextValue to $total
        7. Add $total to $fibonaccis array.
        8. Increase $counter;
        9. Do step 3 to 8 until $counter is not less than $maxLength.
        10. Convert $fibonacci to string and display results.
        ***********/
        
            if (isset($_POST['number_input'])) {

                $maxLength = $_POST['number_input'];
                if ($maxLength < 1 || $maxLength > 20) {
                    exit('Error: Please enter number from 1 to 20');
                }

                $counter = $previousValue = $nextValue = 0;
                $fibonaccis = [];
                while($counter < $maxLength) {
                    $total = $previousValue + $nextValue;
                    if ($counter <= 1) {
                        $total = $counter;
                    }
                    $previousValue = $nextValue;
                    $nextValue = $total;
                    $fibonaccis[] = $total;
                    $counter++;
                }
                echo implode(', ', $fibonaccis);
            }
        ?>
    </body>
</html>