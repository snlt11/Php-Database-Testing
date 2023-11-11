<?php
require_once "db.php";
$db = new DB();
$students = $db->index();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
            <div class="col-10">
                <a href="create.php" class="btn btn-primary">Create New Student</a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-10 mt-4">
                <?php if ($students) : ?>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($students as $student) : ?>
                            <tr>
                                <td><?php echo $student->id?></td>
                                <td><?php echo $student->name?></td>
                                <td><?php echo ucfirst($student->gender)?></td>
                                <th>
                                    <a href="show.php?id=<?php echo$student->id?>" class="btn btn-primary">Detail</a>
                                    <a href="destroy.php?id=<?php echo$student->id?>" class="btn btn-danger">Delete</a>
                                </th> 
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    
                <?php else : ?>
                    <p>No Students found in Database</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>