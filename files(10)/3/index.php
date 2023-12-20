<?php

$image_dir_id = opendir($_SERVER['DOCUMENT_ROOT'] . '/photo');

/**
  @var {array} $uploaded_files
 **/

$uploaded_files = [];

$i = 0;


while (($filepath = readdir($image_dir_id)) !== false) {

    if ($filepath !== "." && $filepath !== "..") {
        $uploaded_files[$i] = basename($filepath);
        $i++;
    }
}

closedir($image_dir_id);

sort($uploaded_files);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>

<body>
    <hr />
    <?php for ($i = 0; $i < sizeof($uploaded_files); $i++) : ?>

        <p>
            <a href="./photo/<?php echo $uploaded_files[$i]; ?>" target="_blank"><?php echo $uploaded_files[$i]; ?></a>
        </p>
    <?php endfor; ?>

    <hr />
    <form action="upload.php" method="post" name="upload" enctype="multipart/form-data">
        <input name="uploaded_file" type="file" />
        <button type="submit" name="upload_file">Добавить</button>
    </form>
    <form action="delete.php" method="post" enctype="application/x-www-form-urlencoded">
        <select id="" name="deleted_file">
            <option>Выберете файл</option>
            <?php foreach ($uploaded_files as $uf) : ?>
                <option><?php echo $uf ?></option>
            <?php endforeach; ?>

        </select>
        <button type="submit" name="delete_file">Удалить</button>
    </form>
</body>

</html>