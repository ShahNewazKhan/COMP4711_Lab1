<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php');
            
            $students = array(); //init the students array 
            
            //Init first student object
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            //Init second student object
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(85);
            $second->add_grade(55);
            $students['a456'] = $second;
            
            //Init third student object
            $third = new Student();
            $third->surname = "Khan";
            $third->first_name = "Shah Newaz";
            $third->add_email('home','shah@khan.com');
            $third->add_email('work','skhan@khan.com');
            $third->add_grade(95);
            $third->add_grade(85);
            $third->add_grade(55);
            $students['s123'] = $third;
            
            //Sort students in alphabetical order
            ksort($students);
            
            //Print out all student objects to screen
            foreach($students as $student)
            {
                echo $student->toString();
            }    
        ?>
    </body>
</html>
