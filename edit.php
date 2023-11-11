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
    <title>Create Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                
                <?php if($student) :?>

                    <h3 class="mb-4">Edit Student</h3>
                    <form action="update.php" method="post">

                        <input type="hidden" name="id" value="<?php echo $student->id ;?>">

                        <div class="form-group mb-2">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="<?php echo $student->name ;?>" class="form-control">
                        </div>
    
                        <div class="form-group mb-2">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?php echo $student->email ;?>" class="form-control">
                        </div>
    
                        <div class="form-group mb-2">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="male" name="male" <?php if ($student->gender == "male") { echo "selected"; } ?> >Male</option>
                                <option value="female" name="female" <?php if ($student->gender == "female") { echo "selected"; } ?> >Female</option>
                            </select>
                        </div>
    
                        <div class="form-group mb-2">
                            <label for="dob">Date of Birth</label>
                            <input type="date" value="<?php echo $student->dob ;?>" name="dob" class="form-control">
                        </div>
    
                        <div class="form-group mb-2">
                            <label for="age">Age</label>
                            <input type="number" value="<?php echo $student->age ;?>" name="age" class="form-control">
                        </div>
    
                        <div class="text-center">
                            <button class="btn btn-primary">Edit Student</button>
                            <a href="index.php" class="btn btn-danger">Cancel</a>
                        </div>
    
                    </form>

                <?php else:?>
                    <p>Student Not Found</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>