<h1>Hands-on Activity</h1>
<?php
$table =array(
    "header"=>array(
        "StudentID",
        "Firstnanme",
        "Middlenanme",
        "Lastname",
        "Section",
        "Course",
        "YearLevel",
    ),
    "body"=>array(
        array(
            "StudentID"=> "studentid",
            "firstname"=>"Firstnanme",
            "middlename"=>"Middlenanme",
            "lastname"=>"Lastname",
            "section"=>"Section",
            "course"=>"Course",
            "yearlevel"=>"YearLevel",
            ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                 ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                ),
            array(
                "StudentID"=> "studentid",
                "firstname"=>"Firstnanme",
                "middlename"=>"Middlenanme",
                "lastname"=>"Lastname",
                "section"=>"Section",
                "course"=>"Course",
                "yearlevel"=>"YearLevel",
                )                                       
    )
            );
?>


<table border="1">

    <thead>
        <?php for (
            $i = 0;
            $i <= count($table['header']) - 1;
            $i++
        ){
            echo "<th>" .$table['header'][$i] . "</th>";
        }
?>
        </thead>
 
 <body>
     <?php for(
      $i = 0; 
      $i <= count($table["body"]) -1; 
      $i++
      ){
            echo "<tr>";
            echo "<td>".$i. "</td>";
            echo "<td>" ,$table ["body"][$i]["firstname"]."</td>";
            echo "<td>" ,$table ["body"][$i]["middlename"]."</td>";
            echo "<td>" ,$table ["body"][$i]["lastname"]."</td>";
            echo "<td>" ,$table ["body"][$i]["section"]."</td>";
            echo "<td>" ,$table ["body"][$i]["course"]."</td>";
            echo "<td>" ,$table ["body"][$i]["yearlevel"]."</td>";
    }
?>
</body>
</table>
