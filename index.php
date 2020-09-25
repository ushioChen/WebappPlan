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
    <style>
        body{
            border: 2px solid;
            text-align:center;
            font-size:16px;
        }

    </style>
    <body>

        <?php
        include('Student.php');
        $students = array();
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $first->status='Senior';
        $students['j123'] = $first;


        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->status='Junior';
        $students['a456'] = $second;

        $third = new Student();
        $third->surname = "Chen";
        $third->first_name = "Jiaxi";
        $third->add_email('home', 'https://github.com/ushioChen/WebappPlan.git');
        $third->add_email('work1', 'JiaxiChen@bcit.ca');
        $third->add_email('work2', 'ushio-x@qq.com');

        $third->add_grade(95);
        $third->add_grade(80);
        $third->add_grade(50);
        $third->status='Senior';
        $students['c123'] = $third;

        $fourth = new Student();
        $fourth->surname = "AGH";
        $fourth->first_name = "HUA";
        $fourth->add_email('home', '846512345@qq.com');
        $fourth->add_email('work1', '000@qq.com');
        $fourth->add_grade(79);
        $fourth->add_grade(70);
        $fourth->add_grade(60);
        $fourth->status='Junior';
        $students['a101'] = $fourth;

        ksort($students);
        foreach ($students as $student)
            echo $student->toString();
        ?>

    </body>
</html>