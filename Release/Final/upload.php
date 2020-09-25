<?php
if (($_FILES['fileToUpload']['name']!="")){
        // Where the file is going to be stored
        $target_dir = "upload/";
        $file = $_FILES['fileToUpload']['name'];
        $temp_name = $_FILES['fileToUpload']['tmp_name'];
        $path = pathinfo($file);
        $path_temp = pathinfo($temp_name);
        $filename = $path['filename'];
        $filename_temp = $path_temp["filename"];
        $ext = $path['extension'];
        $ext_temp = $path_temp['extension'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
        $output_u2 = shell_exec("rename $temp_name sheets.xlsx");
        $output_u1 = shell_exec("move C:\\xampp\\tmp\\sheets.xlsx D:\Projects\TechTycoons\HTML\python\Input");
        header("Location: website.html");
}
?>