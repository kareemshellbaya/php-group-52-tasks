<?php

    // First Task

    function factorial_number($num)
    {
        echo"<pre> ";
        echo abs($num);
        echo"</pre>";
    }

    factorial_number(10*-10);

    // Second Task

    function rev_Input($input)
    {
        echo"<pre> ";
        echo strrev($input);
        echo"</pre>";
    }

    rev_Input("Kareem");

    // Third Task
    
    function display($number)
    {
        if($number <= 5){
            echo"<br>$number";
            display($number + 1);
        }
    }

    display(1);



    function display_numbers($n) {
        if ($n > 0) {
            display_numbers($n -1);
            echo $n . "  ";
        }
    }
    
    display_numbers(5);

    ?>
    <?php
    // Fourth Task

    function help($first_Letter)
    {
        echo"<pre>";
        print_r(($first_Letter[0]));
        echo"</pre>";
    }

        help("Hello Guy's My Name Is Kareem");



    ?>

    <?php
    // Fifth Task

        
     
           
    function password_Generate($chars) 
    {
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    echo substr(str_shuffle($data), 0, $chars);
    }
    password_Generate(10);

    
    ?>


    <?php
    // Sixth Task

    
    function helper(array $arr)
    {
        echo"<pre>";
        print_r($arr);
        echo"</pre>";
    }
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        helper($arr);

    // Anther Answer

        function count10($number)
    {
        if($number <= 10){
            echo"<br>$number";
            count10($number + 1);
        }
    }

    count10(1);
    ?>