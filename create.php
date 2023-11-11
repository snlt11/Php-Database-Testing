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
            <div class="col-5">
                <h3>New Students</h3>
                <form action="store.php" method="post">
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control">
                            <!-- <option value="" disabled selected>Gender</option> -->
                            <option value="gender">Male</option>
                            <option value="gender">Female</option>
                        </select>
                    </div>

                    <div class="form-group mb-2">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="age">Age</label>
                        <input type="number" name="age" class="form-control">
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary">Create New Students</button>
                        <a href="index.php" class="btn btn-danger">Cancle</a>
                    </div>

                </form>


            </div>
        </div>
    </div>
</body>

</html>