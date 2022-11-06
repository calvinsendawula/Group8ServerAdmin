<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/d30f67c531.js" crossorigin="anonymous"></script>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        html, body{
            color: #fff;
            background-color: #000;
        }
    </style>
    <title>Group 8 Server Admin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 my-3">
                <div class="row">
                    <div class="col my-3">
                        <h2>Add New Group 8 Server Admin Member</h2>
                    </div>
                </div>
                <form action="processAdd.php" method="post">
                    <div class="row form-group">
                        <div class="col-4 my-3">
                            <h3>Student No</h3>
                        </div>
                        <div class="col-8 my-3">
                            <input class="form-control" type="number" name="studentID" placeholder="e.g 123456" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-4 my-3">
                            <h3>Student Name</h3>
                        </div>
                        <div class="col-8 my-3">
                            <input class="form-control" type="text" name="studentName" placeholder="e.g John Doe" required>
                        </div>
                    </div>
                    <a class="btn btn-outline-danger" href="index.php">Cancel</a>
                    <button class="btn btn-outline-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>   
</body>
</html>