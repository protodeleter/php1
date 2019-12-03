<?php

if ( isset( $_GET ) ) {

    if ( isset( $_GET['number_one'] ) && !empty( $_GET['number_one'] ) ) {
        $number_one = $_GET['number_one'];
    } else {
        $number_one = null;
    }

    if ( isset( $_GET['number_two'] ) && !empty( $_GET['number_two'] ) ) {
        $number_two = $_GET['number_two'];
    } else {
        $number_two = null;
    }

    if ( isset( $_GET['math_sign'] ) && !empty( $_GET['math_sign'] ) ) {
        $math_sign = $_GET['math_sign'];
    } else {
        $math_sign = null;
    }

}

?>

<html>

<head>

</head>

<body>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

    число
    <input type="number" value="<?php echo $number_one; ?>" name="number_one" placeholder=""/>
    число
    <input type="number" value="<?php echo $number_two; ?>" name="number_two" placeholder=""/>
    знак
    <input type="text" value="<?php echo $math_sign; ?>" name="math_sign" placeholder=""/>

    <input type="submit" value="равно" name="" /> <?php echo calculator_php( $number_one,$number_two,$math_sign ); ?>

</form>


<div >

    <?php

    function calculator_php($a, $b, $char ) {

        $result = false;
        switch($char) {
            case '-': return $result = $a - $b;
            case '*': return $result = $a * $b;
            case '+': return $result = $a + $b;
            case '/': return $result = $a / $b;
        }
        return $result;
    }

//    echo calculator_php( $number_one,$number_two,$math_sign );
//    $result = (int)$number_one . $math_sign . (int)$number_two;
//    echo $result;


    ?>

</div>

</body>

</html>