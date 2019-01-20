<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Student Grades</title>
</head>
<body>

<div class="container" style="margin-top: 1rem">
    <h2>Student Results</h2>

        <form action="" method="post">
            <div class="form-row">
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>

                <div class="col">        
                    <input type="text" name="id" class="form-control" placeholder="Student ID">
                </div>

                <div style="margin-top: 1rem">
                    <h4>Courses</h4>
                    <div class="form-row">

                        <div class="form-group col-md-2">
                            <label for="php">PHP</label>
                            <input type="text" name="php" class="form-control" id="php">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="java">Java</label>
                            <input type="text" name="java" class="form-control" id="java">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="nodejs">NodeJS</label>
                            <input type="text" name="nodejs" class="form-control" id="nodejs">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="ruby">Ruby</label>
                            <input type="text" name="ruby" class="form-control" id="ruby">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="cplusplus">C++</label>
                            <input type="text" name="cplusplus" class="form-control" id="cplusplus">
                        </div>
                    </div>

                    <button id="submit" type="submit" class="btn btn-primary">Compute</button>
                    </div>
                </div>
            </div>
        </form>

       <?php if(isset($student) && $student instanceof \App\Student) : ?>
         <h2 style="margin-top: 1.2rem;">ABC College Final Exam Scores Results</h2>
            <table class="table">
                <tr><th>#ID</th><td><?= $student->getId();?></td></tr>
                <tr><th>Name</th><td><?= $student->getName();?></td></tr>
                <tr><th>PHP</th><td><?= $php ?></td></tr>
                <tr><th>JAVA</th><td><?= $java ?></td></tr>
                <tr><th>C++</th><td><?= $cplusplus ?></td></tr>
                <tr><th>Ruby</th><td><?= $ruby ?></td></tr>
                <tr><th>NodeJS</th><td><?= $nodejs ?></td></tr>
                <tr><th>Total Score</th><td><?= $student->totalScore(); ?></td></tr>
                <tr><th>Average Score</th><td><?= $student->averageScore(); ?></td></tr>
                <tr><th>Grade</th><td><?= $student->getGrade(); ?></td></tr>
                <tr><th>Final Result</th><td><?= $student->finalResult(); ?></td></tr>
                <tr><th>Remarks</th><td><?= $student->getRemark(); ?></td></tr>
            </table>
        <?php  endif ?>
</div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>