<?php
use App\Student;

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['php'])){
    $name = $_POST['name'];
    $id = (int) $_POST['id'];
    $php = $_POST['php'];
    $java = $_POST['java'];
    $nodejs = $_POST['nodejs'];
    $ruby = $_POST['ruby'];
    $cplusplus = $_POST['cplusplus'];
    
    $student = new Student($id, $name);
    $student->setMarks((float) $php, (float) $java, (float)$nodejs, (float)$ruby, (float)$cplusplus);
}
