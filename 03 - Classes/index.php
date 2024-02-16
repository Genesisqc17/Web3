<?php
    require_once("User.php");
    require_once("Student.php");

    $u1 = new User("John", "Smith");
    $u2 = new Student("Jane", "Doe", "H2024");
    $u2 = new Student("Jane", "Doe", "H2024");
    $u2 = new Student("Jane", "Doe", "H2024");
    $u2 = new Student("Jane", "Doe", "H2024");
    $u2 = new Student("Jane", "Doe", "H2024");

    $u1->show();
    $u2->show();