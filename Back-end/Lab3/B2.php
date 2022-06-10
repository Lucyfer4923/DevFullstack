<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bài 2</title>
</head>
<style type="text/css">
    .bod {

        line-height: 30px;
        min-width: 50px;
        min-height: 100px;
        border-bottom: 1px solid lightgrey;
        border-right: 1px solid lightgrey;
        border-radius: 8px;
    }

    .bod2 {
        line-height: 30px;
        min-width: 50px;
        min-height: 100px;
        border-bottom: 1px solid lightgrey;
        border-right: 1px solid lightgrey;
        border-radius: 8px;
        border: 1px solid lightgrey;
    }

    .title {
        background-color: lightgrey;
        border-bottom: 1px solid grey;
        font-weight: 600;
        padding: 15px;
    }

    .formcontrol {
        padding: 10px;
    }

    .saver {
        background-color: #5da8d9;
        border: none;
        border-radius: 5px;
        padding: 7px;
        margin: 10px;
        color: white;
    }

    .res {
        border: none;
        padding: 7px;
        margin: 10px;
        background-color: white;
    }

    .fname {
        width: 95%;
        border: 1px solid lightgrey;
        border-radius: 5px;
    }

    .lname {
        width: 95%;
        border: 1px solid lightgrey;
        border-radius: 5px;
    }

    .mail {
        width: 95%;
        border: 1px solid lightgrey;
        border-radius: 5px;
    }

    .state {
        width: 95%;
        border: 1px solid lightgrey;
        border-radius: 5px;
        padding: 6px;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="bod">
                    <div class="title">
                        <h5>Registration Form</h5>
                    </div>
                    <form action='' method='post'>
                        <div class="formcontrol">
                            <label>Firstname</label><br>
                            <input class="fname" type='text' name='txtname' size='30' value='<?php if (isset($_POST['txtname']) && $_POST['txtname'] != NULL) {
                                                                                                    echo $_POST['txtname'];
                                                                                                } ?>' />
                        </div>
                        <div class="formcontrol">
                            <label>Last name</label><br>
                            <input class="lname" type='text' name='txtlastname' size='30' value='<?php if (isset($_POST['txtlastname']) && $_POST['txtlastname'] != NULL) {
                                                                                                        echo $_POST['txtlastname'];
                                                                                                    } ?>' />
                        </div>
                        <div class="formcontrol">
                            <label>Email</label><br>
                            <input class="mail" type='text' name='txtemail' size='30' value='<?php if (isset($_POST['txtemail']) && $_POST['txtemail'] != NULL) {
                                                                                                    echo $_POST['txtemail'];
                                                                                                } ?>' />
                        </div>
                        <div class="formcontrol">
                            <label>Gender</label>
                            Male <input type='radio' name='gender' size='30' value='Male' <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Male') { ?> checked="checked" <?php } ?> />
                            Female <input type='radio' name='gender' size='30' value='Female' <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Female') { ?> checked="checked" <?php } ?> />
                        </div>
                        <div class="formcontrol">
                            <label>State</label><br>
                            <select class='state' name='state'>
                                <option value='Johor' <?php if (isset($_POST['state']) && $_POST['state'] == 'Johor') { ?> selected="selected" <?php } ?>>Johor</option>
                                <option value='Massachusetts' <?php if (isset($_POST['state']) && $_POST['state'] == 'Massachusetts') { ?> selected="selected" <?php } ?>>Massachusetts</option>
                                <option value='Washington' <?php if (isset($_POST['state']) && $_POST['state'] == 'Washington') { ?> selected="selected" <?php } ?>>Washington</option>
                            </select>
                        </div>
                        <div class="formcontrol">
                            <div class="form-label">Hobbies</div><br>
                            <input type='checkbox' name='hobbies[]' value='Badminton' <?php if (isset($_POST['hobbies']) && in_array('Badminton', $_POST['hobbies'])) { ?> checked="checked" <?php } ?> /> Badminton
                            <input type='checkbox' name='hobbies[]' value='Football' <?php if (isset($_POST['hobbies']) && in_array('Football', $_POST['hobbies'])) { ?> checked="checked" <?php } ?> /> Football
                            <input type='checkbox' name='hobbies[]' value='Bicycle' <?php if (isset($_POST['hobbies']) && in_array('Bicycle', $_POST['hobbies'])) { ?> checked="checked" <?php } ?> /> Bicycle
                        </div>
                        <div class="formcontrol">
                            <input class="saver" type="submit" value="Saver record" name="ok">
                            <input class="res" type="reset" value="Reset" name="reset">
                        </div>
                    </form>
                </div>

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
                <div class="bod2">
                    <div class="title">
                        <h5>Featured</h5>
                    </div>
                    <div class="container">
                        <h5>Special title treatment</h5>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                        <div class="formcontrol">
                            <input class="saver" type="submit" value="Go somewhere" name="ok">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>