<?php
require_once "db.php";
$db = new DB();
$student = $db->show($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8 form">
                <h1>Student Information</h1>

                <?php if($student) :?>
                    <p></p>ID : <?php echo $student->id?></p>
                    <p>Name : <?php echo $student->name?></p>
                    <p>Gender : <?php echo $student->gender?></p>
                    <p>Date Of Birth : <?php echo $student->dob?></p>
                    <p>Age : <?php echo $student->age?></p>
                    <a href="index.php" class="btn btn-primary">Home</a>
                    <a href="edit.php?id=<?php echo$student->id?>" class="btn btn-secondary">Edit</a>
                    <a href="destroy.php?id=<?php echo$student->id?>" class="btn btn-danger">Delete</a>
                <?php endif ;?>
                

            </div>
        </div>
    </div>
</body>
</html>



