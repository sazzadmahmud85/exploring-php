<?php
header( 'X-XSS-Protection:0');
include_once "functions.php";
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
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum tenetur illum sint odit porro eligendi modi laudantium, ab perspiciatis nihil.</p>
                <p>
                    <?php 
                    $fname = '';
                    $lname = '';
                    $checked = '';

                    if(isset($_REQUEST['cb1']) && ($_REQUEST['cb1'] == 1)){
                        $checked = 'checked';
                    }
                    ?>

                    <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        // $fname = htmlspecialchars($_REQUEST['fname']);
                        // $fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_STRING);
                    } ?>
                    <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        // $lname = htmlspecialchars($_REQUEST['lname']);
                        // $lname = filter_input(INPUT_POST,'lname', FILTER_SANITIZE_STRING);
                    } ?>
                </p>
            </div>
        </div>
        <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label class="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                <label class="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                <div class="">
                    <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                    <label for="cb1" class="label-inline">Some Checkbox</label>
                </div>
                
                <label for="" class="label">Select Some Fruits</label>

                <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange') ?>>
                <label class="label-inline">Orange</label><br>
                <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('mango') ?>>
                <label class="label-inline">Mango</label><br>
                <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana') ?>>
                <label class="label-inline">Banana</label><br>
                <input type="checkbox" name="fruits[]" value="lemon"<?php isFruitChecked('lemon') ?>>
                <label class="label-inline">Lemon</label><br>

                <button type="submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>