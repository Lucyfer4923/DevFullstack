<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bài 3</title>
    <style>
        .form-control {
            border: none;
        }

        option {
            width: 100px;
        }
    </style>
</head>

<body>
    <form action='' method='post' enctype='multipart/form-data'>
        <div class="form-control">
            <div class="form-label">Text</div>
            <input type='text' name='text' size='100' value='<?php if (isset($_POST['text']) && $_POST['text'] != NULL) {
                                                                    echo $_POST['text'];
                                                                } ?>' placeholder="Placeholder" />
        </div>
        <div class="form-control">
            <div class="form-label">Checkbox</div>
            <div class="box">
                <input type='checkbox' name='checkbox[]' value='Checkbox1' <?php if (isset($_POST['checkbox']) && in_array('Checkbox1', $_POST['checkbox'])) { ?> checked="checked" <?php } ?> /> Checkbox1
            </div>
            <div class="box">
                <input type='checkbox' name='checkbox[]' value='Checkbox2' <?php if (isset($_POST['checkbox']) && in_array('Checkbox2', $_POST['checkbox'])) { ?> checked="checked" <?php } ?> /> Checkbox2
            </div>
            <div class="box">
                <input type='checkbox' name='checkbox[]' value='Checkbox3' <?php if (isset($_POST['checkbox']) && in_array('Checkbox3', $_POST['checkbox'])) { ?> checked="checked" <?php } ?> /> Checkbox3
            </div>
        </div>
        <div class="form-control">
            <div class="form-label">Textarea</div>
            <textarea name='textarea' cols='102' rows='5'><?php if (isset($_POST['textarea']) && $_POST['textarea'] != NULL) {
                                                                echo $_POST['textarea'];
                                                            } ?></textarea>
        </div>
        <div class="form-control">
            <div class="form-label">Radio button</div>
            <input type='radio' name='radio' value='yep' <?php if (isset($_POST['radio']) && $_POST['radio'] == 'yep') { ?> checked="checked" <?php } ?> /> yep
            <input type='radio' name='radio' value='nope' <?php if (isset($_POST['radio']) && $_POST['radio'] == 'nope') { ?> checked="checked" <?php } ?> /> nope
            <input type='radio' name='radio' value='none' <?php if (isset($_POST['radio']) && $_POST['radio'] == 'none') { ?> checked="checked" <?php } ?> /> none
        </div>
        <div class="form-control">
            <div class="form-label">Select</div>
            <select name='select'>
                <option value='option1' <?php if (isset($_POST['select']) && $_POST['select'] == 'option1') { ?> selected="selected" <?php } ?>>Option 1</option>
                <option value='option2' <?php if (isset($_POST['select']) && $_POST['select'] == 'option2') { ?> selected="selected" <?php } ?>>Option 2</option>
                <option value='option3' <?php if (isset($_POST['select']) && $_POST['select'] == 'option3') { ?> selected="selected" <?php } ?>>Option 3</option>
            </select>
        </div>
        <div class="form-control">
            <div class="form-label">Upload files</div>
            <input type="file" name="file[]" multiple />
        </div>
        <div class="form-control">
            <button type="submit" name="upload">Submit</button>
        </div>
    </form>

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
            if (empty($_POST['text'])) {
                echo '<p style="color: red">Trường text không được để trống</p>';
            } else if (!isset($_POST['checkbox'])) {
                echo '<p style="color: red">Cần check ít nhất 1 trường checkbox</p>';
            } else if (empty($_POST['textarea'])) {
                echo '<p style="color: red">Trường textarea không được để trống</p>';
            } else if (!isset($_POST['radio'])) {
                echo '<p style="color: red">Cần check ít nhất 1 trường radio</p>';
            }
        }
    }
    ?>
    <?php if (isset($_POST['upload'])) { ?>
        <p><?php echo "Text: " . $_POST['text']; ?></p>
        <?php foreach ($_POST['checkbox'] as $item) { ?>
            <p><?php echo "Checkbox: " . $item; ?></p>
        <?php } ?>
        <p><?php echo "Textarea: " . $_POST['textarea']; ?></p>
        <p><?php echo "Radio: " . $_POST['radio']; ?></p>
        <p><?php echo "Select: " . $_POST['select']; ?></p>
        <p>Upload files: <?php foreach ($img as $item) { ?>
            <img src="<?php echo $item; ?>" alt="" width="100" height="100" />
        <?php } ?></p>
    <?php } ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>