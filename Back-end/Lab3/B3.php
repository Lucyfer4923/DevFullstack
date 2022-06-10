<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bài 3</title>
    <style>
        body {
            background-color: lightgrey;
        }

        .form-control input {
            width: 500px;
            padding: 10px;
            border: none;
        }

        .form-control {
            text-align: center;
            border: none;
            background-color: lightgrey;
        }

        .form-control .message {
            padding-bottom: 100px;
        }

        .form-control .button {
            background-color: red;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action='' method='post'>
            <div class="form-control">
                <input type='text' name='txtname' size='30' value='<?php if (isset($_POST['txtname']) && $_POST['txtname'] != NULL) {echo $_POST['txtname'];} ?>' placeholder="Your name" />
            </div>
            <div class="form-control">
                <input type='email' name='txtemail' size='30' value='<?php if (isset($_POST['txtemail']) && $_POST['txtemail'] != NULL) {echo $_POST['txtemail'];} ?>' placeholder="Your Email Address" />
            </div>
            <div class="form-control">
                <input type='number' name='txtphone' size='30' value='<?php if (isset($_POST['txtphone']) && $_POST['txtphone'] != NULL) {echo $_POST['txtphone'];} ?>' placeholder="Your Phone Number" />
            </div>
            <div class="form-control">
                <input type='text' name='txturl' size='30' value='<?php if (isset($_POST['txturl']) && $_POST['txturl'] != NULL) {echo $_POST['txturl'];} ?>' placeholder="Your Web Site starts with http://" />
            </div>
            <div class="form-control">
                <input class="message" type='text' name='txtmessage' size='30' value='<?php if (isset($_POST['txtmessage']) && $_POST['txtmessage'] != NULL) {echo $_POST['txtmessage'];} ?>' placeholder="Type your Message Here..." />
            </div>
            <div class="form-control">
                <input class="button" type="submit" value="Submit" name="ok" />
            </div>
        </form>

        <?php
        if (isset($_POST['ok'])) {
            $name = $email = $mesage = $phone = $url = "";
            $name = $_POST['txtname'];
            $email = $_POST['txtemail'];
            $message = $_POST['txtmessage'];
            $phone = $_POST['txtphone'];
            $url = $_POST['txturl'];
            if ($_POST['txtname'] == NULL || $_POST['txtmessage'] == NULL || $_POST['txtemail'] == NULL || $_POST['txtphone'] == NULL) {
                echo "<p style='color:red; font-size:30px;'>Không được để trống các trường!</p>";
            } else if (!filter_var($url, FILTER_VALIDATE_URL)) {
                echo "<p style='color:red; font-size:30px;'>Trường website cần phải có định dạng URL!</p>";
            } else {
                echo "<p style='color:blue; margin-bottom:0px;'>Send contact thành công!</p>";
                $sName = $_REQUEST["txtname"];
                if (isset($sName)) {
                    print "Your Name : $sName <br>";
                }
                $sEmail = $_REQUEST["txtemail"];
                if (isset($sEmail)) {
                    print "Your Email : $sEmail <br>";
                }
                $sPhone = $_REQUEST["txtphone"];
                if (isset($sPhone)) {
                    print "Your Phonenumber : $sPhone <br>";
                }
                $sUrl = $_REQUEST["txturl"];
                if (isset($sUrl)) {
                    print "Your Website : $sUrl <br>";
                }
                $sMessage = $_REQUEST["txtmessage"];
                if (isset($sMessage)) {
                    print "Your Message : $sMessage <br>";
                }
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>