<?php

    $br = "<br>";
    $hr ="<hr>";

    // string data type
    $x = 'Kareem';
    echo $x ,$br ,gettype($x) ,$br;     // Kareem, string
    var_dump($x) ;                      // string(6) "Kareem"
    echo $br;
    print_r($x);                        // Kareem
    echo $hr;


    # integer data type
    $i = 52;
    echo $i ,$br ,gettype($i) ,$br;     // 52, integer 
    var_dump($i) ;                      // int(52)
    echo $br;
    print_r($i);                            
    echo $hr;

    /* 
     Float data type
    */
    $f = 52.52;
    echo $f ,$br ,gettype($f) ,$br;     // 52.52, double
    var_dump($f) ;                      // float(52.52)
    echo $br;
    print_r($f);                        // 52.52
    echo $hr;

    /**  
    *  Boolean data type
    */
    $b = true;
    echo $b ,$br ,gettype($b) ,$br;     // 1, boolean
    var_dump($b) ;                      // bool(true)
    echo $br;
    print_r($b);                        // 1
    echo $hr;


    // Different Between Variable in Global Scope & Local Scope & Constant

    $k = "Global Scope";
    
    #invoke Variable From Global Scope

    function testVarGlobal()
    {
        global $k ;
        echo '<br>';
        echo $k;
    }
    
    testVarGlobal(); 

     #invoke Variable From Global Scop

    function testVarLocal()
    {
        $k = "Local Scope";
        echo '<br>';
        echo $k;
    }
    testVarLocal();

    # invoke constant

    define('POST', "Constant");

    function testConst()
    {
        echo '<br>';
        echo POST;
    }
    
    testConst();