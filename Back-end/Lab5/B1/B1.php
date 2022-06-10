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
            if ($file['size'][$key] <= 1000000) {
                move_uploaded_file($file['tmp_name'][$key], $filePath);
                $img[] = $filePath;
            } else {
                echo '<p style="color: red">File upload không được > 1Mb</p>';
            }
        } else {
            echo '<p style="color: red">Cần upload file có định dạng ảnh</p>';
        }
    }
}
?>
<style>
    .file h3 {
        margin: 0;
    }

    .file p {
        color: gray;
        margin-top: 0px;
    }

    .button button {
        padding: 10px;
        color: white;
        font-size: 20px;
        background-color: blue;
        border: none;
        border-radius: 5px;
    }
</style>
<form method="post" action="" enctype="multipart/form-data">
    <div class="file">
        <h3>Select a file to upload</h3>
        <input type="file" name="file[]" multiple />
        <p>Only jpg, jpeg, png and gif file with maximum size of 1 MB is allowed.</p>
    </div>
    <div class="button">
        <button type="submit" name="upload">Upload</button>
    </div>
</form>
<?php
foreach ($img as $item) { ?>
    <img src="<?php echo $item; ?>" />
    <p><?php echo "Tên file: " . $file['name'][$key]; ?></p>
    <p><?php echo "Định dạng file: " . $ext; ?></p>
<?php } ?>