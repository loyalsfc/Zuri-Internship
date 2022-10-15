<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
include 'user_data.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>Demo</title>
    </head>
    <body>
        <div class="formme">
            <form action="" method="post" style="width: 500px;margin: auto;">
                <?php
                if (isset($errors)) {
                    ?>
                    <div class="errors">
                        <?php
                        foreach ($errors as $error) {
                            ?>
                            <p class="text-danger">
                                <?php echo $error; ?>
                            </p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emal" name="emal">
                </div>  

                <div class="mb-3">
                    <label for="dob" class="form-label">Dob</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label d-block">Gender</label>
                    <input type="radio" class="" id="male" name="gender" value="male"> Male
                    <input type="radio" class="" id="female" name="gender" value="female"> Female
                </div>

                <div class="mb-3">
                    <label for="Country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="Country" name="Country">
                </div>

                <input type="submit" name="submit" id="submit" class="btn btn-primary d-block" value="Submit">
            </form>
        </div>
    </body>
</html>