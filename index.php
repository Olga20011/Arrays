<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = ["Apples" ,"Banana","Cherry"];
    $food= ["Matooke" , "Fish"];

    array_splice($fruits, 2 ,0 ,$food);

    print_r($fruits);

    array_splice($fruits ,1 ,0 ,"Tomato");

    array_push($fruits , "Mango" ,"Guava" ,"Berry");
    print_r ($fruits);
     echo $fruits[5];

    echo $fruits[0];

    $fruits[1]= "orange";

    unset($fruits[1]); 
    array_splice($fruits, 0 ,1);
    echo $fruits[1];

    $tasks = [
        "laundry"=>"Daniel",
        "Trash"=>"Frida",
        "Vaccum"=>"Basse",
        "Dishes"=>"Bella"

    ];

    echo $tasks["laundry"];
    print_r($tasks);
    echo count($tasks);
    sort($tasks);
    print_r($tasks);

    $tasks["dusting"] ="Tara";
    print_r($tasks);
    
    $food = [
       "fruits" =>array("apple", "banana","cherry"),
       "meat" =>array("chicken","fish"),
       "vegetables" =>array("cucumber" , "carrot"),
    ];

    echo $food["vegetables"][0];

    $color = ["white","green","red","blue","black"];

    // echo "The memory of that scene for me is like a frame of a film forever frozen at that moment
    // the $color[2] ,the $color[1] lawn,  the $color[0] house, the leaden sky. The president
    // and his first lady. - Richard M. Nixon"
    
    $color = ["white","green","red"];

    foreach ( $color as $x){
        echo "$x , ";
    };

    sort ($color);
    echo "<ul>";

    foreach ($color as $y){
        echo "<li>$y</li>";
    }
    echo "<ul>";


//     Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

// Sample Output :
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 



    // $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
    // "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    //  "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
    //  "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
    //  "Vienna", "Poland"=>"Warsaw") ;


     foreach ($ceu as $c => $capital){
        echo "The capital of $c is $capital"."\n";
        
     }

    
    // Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
    // Sample Output :

    // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
    // array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

    $x = array(1, 2, 3, 4, 5);

    var_dump($x);

    array_splice($x ,3 );

    var_dump ($x);



    


?>
    

</body>
</html>