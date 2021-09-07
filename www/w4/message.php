<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $name = $_POST["fname"];
        // if (empty($name)) {
        //     echo "Name is empty";
        // } else {
        //     echo $name;
        // }
        // echo "\n\n";
        $i = 0;
        foreach ($_POST as $key => $value) {
            echo $i." ".$key." => ".$_POST[$key]."</br>";
            $i++;
        }
    }
?>

<!-- <?php echo $_SERVER['PHP_SELF'];?> -->