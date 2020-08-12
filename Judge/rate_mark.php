<?php include 'helper.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Rate</title>
</head>

<body>
   
    <?php if (!$user) {
        $error = "you cant see your submit your mark rating on question without log in";
        header('location: login.php?error=' . urlencode($error));
        exit();
    } ?>

    <h1> Rate a mark </h1>


        <h3>Mark given by : Username</h3>


        <h3>Rate the mark submission</h3>

        <label for="rating">Your rating:</label>


        <br>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<input type=\"radio\"  name=\"rating\" value=" . $i . ">";
            echo "<label for=\"" . $i . "\">" . $i . "</label>";
        }
        ?>

        <br>
        <br>

        <input type="submit" value="submit" name="submit">



    </form>

</body>

</html>