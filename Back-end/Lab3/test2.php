<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bài 2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="title">
                    <h1>Registration Form</h1>
                </div>
                <form action='' method='post'>
                    <div class="form-control">
                        <label>Firstname</label>
                        <input type='text' name='txtname' size='30' value='<?php if (isset($_POST['txtname']) && $_POST['txtname'] != NULL) {
                                                                                echo $_POST['txtname'];
                                                                            } ?>' />
                    </div>
                    <div class="form-control">
                        <label>Last name</label>
                        <input type='text' name='txtlastname' size='30' value='<?php if (isset($_POST['txtlastname']) && $_POST['txtlastname'] != NULL) {
                                                                                    echo $_POST['txtlastname'];
                                                                                } ?>' />
                    </div>
                    <div class="form-control">
                        <label>Email</label>
                        <input type='text' name='txtemail' size='30' value='<?php if (isset($_POST['txtemail']) && $_POST['txtemail'] != NULL) {
                                                                                echo $_POST['txtemail'];
                                                                            } ?>' />
                    </div>
                    <div class="form-control">
                        <label>Gender</label>
                        Male <input type='radio' name='gender' size='30' value='Male' <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Male') { ?> checked="checked" <?php } ?> />
                        Female <input type='radio' name='gender' size='30' value='Female' <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Female') { ?> checked="checked" <?php } ?> />
                    </div>
                    <div class="form-control">
                        <label>State</label>
                        <select name='state'>
                            <option value='Johor' <?php if (isset($_POST['state']) && $_POST['state'] == 'Johor') { ?> selected="selected" <?php } ?>>Johor</option>
                            <option value='Massachusetts' <?php if (isset($_POST['state']) && $_POST['state'] == 'Massachusetts') { ?> selected="selected" <?php } ?>>Massachusetts</option>
                            <option value='Washington' <?php if (isset($_POST['state']) && $_POST['state'] == 'Washington') { ?> selected="selected" <?php } ?>>Washington</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <div class="form-label">Hobbies</div>
                        <input type='checkbox' name='hobbies[]' value='Badminton' <?php if (isset($_POST['hobbies']) && in_array('Badminton', $_POST['hobbies'])) { ?> checked="checked" <?php } ?> /> Badminton
                        <input type='checkbox' name='hobbies[]' value='Football' <?php if (isset($_POST['hobbies']) && in_array('Football', $_POST['hobbies'])) { ?> checked="checked" <?php } ?> /> Football
                        <input type='checkbox' name='hobbies[]' value='Bicycle' <?php if (isset($_POST['hobbies']) && in_array('Bicycle', $_POST['hobbies'])) { ?> checked="checked" <?php } ?> /> Bicycle
                    </div>
                    <div class="form-control">
                        <input type="submit" value="Saver record" name="ok" />
                        <input type="reset" value="Reset" name="reset" />
                    </div>
                </form>

                <?php
                if (isset($_POST['ok'])) {
                    $firstname = $lastname = $email = $gender = $state = $hobbies = "";
                    $fistname = $_POST['txtname'];
                    $lastname = $_POST['txtlastname'];
                    $email = $_POST['txtemail'];
                    $state = $_POST['state'];
                    $errors = [];
                    if ($_POST['txtname'] == NULL) {
                        echo "<p style='color:red; font-size:30px;'>Firstname không được để trống!</p>";
                    } else if ($_POST['txtlastname'] == NULL) {
                        echo "<p style='color:red; font-size:30px;'>Lastname không được để trống!</p>";
                    } else if (!filter_var($_POST['txtemail'], FILTER_VALIDATE_EMAIL)) {
                        echo "<p style='color:red; font-size:30px;'>Email không được để trống!</p>";
                    } else {
                        $sName = $_REQUEST["txtname"];
                        if (isset($sName)) {
                            print "First name : $sName <br>";
                        }
                        $sLastname = $_REQUEST["txtlastname"];
                        if (isset($sLastname)) {
                            print "Last name : $sLastname <br>";
                        }
                        $sEmail = $_REQUEST["txtemail"];
                        if (isset($sEmail)) {
                            print "Email : $sEmail <br>";
                        }
                        $sGender = $_REQUEST["gender"];
                        if (isset($sGender)) {
                            print "Gender : $sGender <br>";
                        }
                        $sState = $_REQUEST["state"];
                        if (isset($sState)) {
                            print "State : $sState <br>";
                        }
                        $sHobbies = $_REQUEST["hobbies"];
                        if (isset($sHobbies)) {
                            print "Hobbies : ";
                            foreach ($sHobbies as $key => $value) {
                                print "$value ,";
                            }
                            print "<br>";
                        }
                    }
                }
                ?>
            </div>
            <div class="col-lg-4">
                <div class="title">
                    <h1>Featured</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>