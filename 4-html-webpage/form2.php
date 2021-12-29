<?php
include_once "form2-functions.php";
$fruits = ["mango", "orange", "banana", "Apple", "lemon"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Hello World</title>
</head>
<style>
    body {
        margin-top: 30px;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select/Dropdown</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint quis ullam ipsum quae aliquam inventore facilis aspernatur suscipit quidem officia nihil quo, iure, hic, ratione sed modi obcaecati. Tempore ducimus asperiores delectus in enim, doloremque consequuntur fugiat ea error officiis nihil dolor officia ipsum provident quae sit ipsam illum ipsa!</p>

                <p>
                    <?php
                    // $sfruits = isset($_POST['fruits'])? $_POST['fruits']:array();
                    $sfruits = $_POST['fruits'] ?? array();
                    // $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

                    if(count($sfruits) > 0 ){
                        echo "You have selected: ".join(". ", $sfruits);
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select style="height: 200px;" name="fruits[]" id="fruits" multiple>
                        <option value="" disabled selected>Select Some Fruits</option>
                        <?php
                            displayOptions($fruits, $sfruits);
                        ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>