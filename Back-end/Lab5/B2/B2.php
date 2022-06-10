<?php
$img = [];
if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    if (!file_exists('storage')) {
        mkdir('storage');
    }
    foreach ($file['name'] as $key => $item) {
        $filePath = 'storage/' . $file['name'][$key];
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
            move_uploaded_file($file['tmp_name'][$key], $filePath);
            $img[] = $filePath;
        } else {
            echo '<p style="color: red">Cần upload file có định dạng ảnh</p>';
        }
        if (empty($_POST['txtname'])) {
            echo '<p style="color: red">Username không được để trống</p>';
        } else if (empty($_POST['txtemail'])) {
            echo '<p style="color: red">Email không được để trống</p>';
        } else if (!filter_var($_POST['txtemail'], FILTER_VALIDATE_EMAIL)) {
            echo '<p style="color: red">Email không đúng định dạng</p>';
        } else if (empty($_POST['password'])) {
            echo '<p style="color: red">Password không được để trống</p>';
        } else if (empty($_POST['cfpassword'])) {
            echo '<p style="color: red">Confirm password không được để trống</p>';
        } else if ($_POST['password'] != $_POST['cfpassword']) {
            echo '<p style="color: red">Trường confirm password phải giống trường Password</p>';
        }
    }
}
?>
<style>
    body {
        background-color: #132e43;
    }

    .form-control input {
        margin-bottom: 20px;
        width: 500px;
        padding: 10px;
        border: none;
        color: white;
        background-color: #091722;
    }

    .form-control {
        border: none;
        background-color: #132e43;
    }

    .form-group input {
        background-color: #132e43;
    }

    .form-group label {
            color: white;
        }

    .form-control h1 {
        color: white;
        font-size: 50px;
    }

    .file {
        margin-bottom: 20px;
        color: white;
    }

    button {
        background-color: #0785c3;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 20px;
        padding: 5px;
        width: 500px;
        border: none;
    }
</style>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-control">
        <h1>Create an account</h1>
    </div>
    <div class="form-control">
        <input type='text' name='txtname' size='30' value='<?php if (isset($_POST['txtname']) && $_POST['txtname'] != NULL) {
                                                                echo $_POST['txtname'];
                                                            } ?>' placeholder="User Name" />
    </div>
    <div class="form-control">
        <input type='text' name='txtemail' size='30' value='<?php if (isset($_POST['txtemail']) && $_POST['txtemail'] != NULL) {
                                                                echo $_POST['txtemail'];
                                                            } ?>' placeholder="Email" />
    </div>
    <div class="form-control">
        <input type='password' name='password' size='30' value='<?php if (isset($_POST['password']) && $_POST['password'] != NULL) {
                                                                    echo $_POST['password'];
                                                                } ?>' placeholder="Password" />
    </div>
    <div class="form-control">
        <input type='password' name='cfpassword' size='30' value='<?php if (isset($_POST['cfpassword']) && $_POST['cfpassword'] != NULL) {
                                                                        echo $_POST['cfpassword'];
                                                                    } ?>' placeholder="Confirm password" />
    </div>
    <div class="file">
        <label>Select your avatar: </label>
        <input type="file" name="file[]" multiple />
    </div>
    <div class="button">
        <button type="submit" name="upload">Register</button>
    </div>
</form>
<?php
foreach ($img as $item) { ?>
    <p><?php echo "Username: " . $_POST['txtname']; ?></p>
    <p><?php echo "Email: " . $_POST['txtemail']; ?></p>
    <p>Avatar: <img src="<?php echo $item; ?>" alt="" width="200px" height="200px"></p>
    <p><?php echo "Tên file: " . $file['name'][$key]; ?></p>
    <p><?php echo "Định dạng file: " . $ext; ?></p>
    <p><?php echo "Đường dẫn file trên project của bạn: " . $file['tmp_name'][$key]; ?></p>
    <p><?php echo "Kích thước file (tính bằng MB): " . round($file['size'][$key] / 1048576) . "MB"; ?></p>
<?php } ?>