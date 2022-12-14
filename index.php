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
                        <h2>Group 8 Server Admin Members ICS 3.2A</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 my-3">
                        <h3>Student No.</h3>
                    </div>
                    <div class="col-9 my-3">
                        <h3>Name</h3>
                    </div>
                </div>
                <?php
                    require_once("phpMethods.php");

                    $sql="SELECT * FROM tbl_member";
                    $result = getDataRows($sql);
                    if(!empty($result)){
                        $varRows = count($result);
                        for($i=0; $i<$varRows; $i++){
                            $varStudentNo = $result[$i]['studentID'];
                            $varStudentName = $result[$i]['studentName'];
                            ?>            
                                <div class="row">
                                    <div class="col-3 my-3">
                                        <h3><?php echo($varStudentNo); ?></h3>
                                    </div>
                                    <div class="col-9 my-3">
                                        <h3><?php echo($varStudentName); ?></h3>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
                <a class="btn btn-outline-warning" href="add.php">Add member</a>
            </div>
        </div>
    </div>   
</body>
</html>