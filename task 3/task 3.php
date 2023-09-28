<?php

$countryList = [
    'CA'        => 'Canada',
    'US'        => 'United States'];

$stateList['CA'] = [
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'MB'        => 'Manitoba',
    'NB'        => 'New Brunswick',
    'NL'        => 'Newfoundland/Labrador',
    'NS'        => 'Nova Scotia',
    'NT'        => 'Northwest Territories',
    'NU'        => 'Nunavut',
    'ON'        => 'Ontario',
    'PE'        => 'Prince Edward Island',
    'QC'        => 'Quebec',
    'SK'        => 'Saskatchewan',
    'YT'        => 'Yukon'];

$stateList['US'] = [
    'AL'        => 'Alabama',
    'AK'        => 'Alaska',
    'AZ'        => 'Arizona',
    'AR'        => 'Arkansas',
    'CA'        => 'California',
    'CO'        => 'Colorado',
    'CT'        => 'Connecticut',
    'DE'        => 'Delaware',
    'DC'        => 'District of Columbia',
    'FL'        => 'Florida',
    'GA'        => 'Georgia',
    'HI'        => 'Hawaii',
    'ID'        => 'Idaho',
    'IL'        => 'Illinois',
    'IN'        => 'Indiana',
    'IA'        => 'Iowa',
    'KS'        => 'Kansas',
    'KY'        => 'Kentucky',
    'LA'        => 'Louisiana',
    'ME'        => 'Maine',
    'MD'        => 'Maryland',
    'MA'        => 'Massachusetts',
    'MI'        => 'Michigan',
    'MN'        => 'Minnesota',
    'MS'        => 'Mississippi',
    'MO'        => 'Missouri',
    'MT'        => 'Montana',
    'NE'        => 'Nebraska',
    'NV'        => 'Nevada',
    'NH'        => 'New Hampshire',
    'NJ'        => 'New Jersey',
    'NM'        => 'New Mexico',
    'NY'        => 'New York',
    'NC'        => 'North Carolina',
    'ND'        => 'North Dakota',
    'OH'        => 'Ohio',
    'OK'        => 'Oklahoma',
    'OR'        => 'Oregon',
    'PA'        => 'Pennsylvania',
    'RI'        => 'Rhode Island',
    'SC'        => 'South Carolina',
    'SD'        => 'South Dakota',
    'TN'        => 'Tennessee',
    'TX'        => 'Texas',
    'UT'        => 'Utah',
    'VT'        => 'Vermont',
    'VA'        => 'Virginia',
    'WA'        => 'Washington',
    'WV'        => 'West Virginia',
    'WI'        => 'Wisconsin',
    'WY'        => 'Wyoming'
    ];

    // 1st Assignment

    // echo 'Nova Scotia' with var_dump()

    echo"<pre>";
    var_dump($stateList['CA']['NS']);
    echo"</pre>";

     // echo 'Nova Scotia' with print_r()

    echo"<pre>";
    print_r($stateList['CA']['NS']);
    echo"</pre>";

    // echo 'Nova Scotia' with var_dump()

    echo"<pre>";
    var_dump($stateList['US']['KS']);
    echo"</pre>";

     // echo 'Nova Scotia' with print_r()

    echo"<pre>";
    print_r($stateList['US']['KS']);
    echo"</pre>";

    ################################################################

    // 2st Assignment


    // We Assign PHP_INT_MAX to variable $max_int to give it the max number system can hold
    $max_int = PHP_INT_MAX ;

    // We Create An Empty Array
    $arr = [];
    // We Assign a string Called 'last name' To index number 1 in The Array We Have Been Created
    $arr[1] = 'last name'; 

    // We Assign a Value Called 'this is max of array ' To The Key $max_int
    $arr[ $max_int ] = 'this is max of array '; 

    // We Assign a string Called 'first name' To index number 0 in The Array We Have Been Created
    $arr[0] = 'first name'; 

    /* We TRy To Reassign Anew Value To The Array we Have Been Created But It Doesn't Work Because The Array Is Not Empty Or occupied
       It Give Us a Message "Fatal error: Uncaught Error: Cannot add element to the array as the next element is already occupied " */
    // $arr[]  = 'this may be at the last of array'; 


    ################################################################

    // 3st Assignment

    //Count
    $arr_count = ["A", "B", "C", "D"];
    echo count ($arr_count);

    echo"<hr>";

    // in_array
    if(in_array("A",$arr_count)){
        echo"We Found The Element";
    }

    echo"<hr>";
    
    // array_key_exists
    $arr_key = ["first name" => "Kareem"];

    if(array_key_exists("first name",$arr_key)){
        echo"We Found The Key";
    }

    echo"<hr>";

    // array_keys

    print_r(array_keys($arr_key));

    echo"<hr>";

    // array_values

    print_r(array_values($arr_key));

    echo"<hr>";

    // array_sum

    $arr_sum = [1, 2, 3, 4];
    echo array_sum($arr_sum);

    echo"<hr>";

    // end

    echo end($arr_count);

    echo"<hr>";

    // array_rand

    echo array_rand($arr_sum);

    echo"<hr>";

    // array_merge

    $arr_merge1 = ["A" => 1, "B" => 2, "C" => 3];
    $arr_merge2 = ["A" => 101, "D" => 4, "E" =>5];

    echo"<pre>";
    print_r(array_merge($arr_merge1,$arr_merge2));

    echo"<hr>";

    // array_replace

    print_r(array_replace($arr_merge2,$arr_merge1));

    echo"<hr>";

    // array_shift

    $arr_edit1 = ["A", "B", "C", "D"];

    $arr_shift = array_shift($arr_edit1);

    print_r($arr_shift);
    echo"<br>";
    print_r($arr_edit1);

    echo"<hr>";
    
    // array_unshift

    $arr_edit2 = ["A", "B", "C", "D"];

    array_unshift($arr_edit2,"E");

    print_r($arr_edit2);

    echo"<hr>";
    
    // array_push

    $arr_edit3 = ["A", "B", "C", "D"];

    array_push($arr_edit3,1,2,3);

    print_r($arr_edit3);

    echo"<hr>";
    
    // array_pop

    $arr_edit4 = ["A", "B", "C", "D"];

    $arr_pop = array_pop($arr_edit4);

    print_r($arr_pop);
    echo"<br>";
    print_r($arr_edit4);

    echo"<hr>";

   //  array_slice

    $nums = [10, 20, 30, 40, 50,];

    print_r(array_slice($nums,3));
    print_r($nums);
    //  array_splice

    $nums = [10, 20, 30, 40, 50,];

    print_r(array_splice($nums,3));
    print_r($nums);









