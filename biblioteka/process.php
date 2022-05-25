<?php print_r($_FILES);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_FILES['files'])){
        $errors =[];
        $path = 'uploads/';
        $extensions = ['txt'];

        $all_files = count($_FILES['files']['tmp_name']);
    }
}
?>