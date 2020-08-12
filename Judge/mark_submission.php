<?php include 'helper.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

   
    <?php if (!$user) {
        $error = "you cant give marks without log in";
        header('location: login.php?error=' . urlencode($error));
        exit();
    } ?>

   <fieldset><legend><h1>Judge</h1></legend>

    <form action="" method="post">
        <fieldset><legend>Mark Submission</legend>
        <label for="MarkSubmission"></label>
        <input type="text" name="MarkSubmission" id="MarkSubmission">
        <br>
        <br>
        </fieldset>
        <fieldset><legend>Question With Answer</legend>
        <label for="QuestionWithAns"></label>
        <input type="text" name="QuestionWithAns" id="QuestionWithAns">
        <br>
    </fieldset>
        

        <fieldset><legend>Delete Given Mark</legend>

        <label for="DeleteMarks"></label>
        <input type="text" name="DeleteMarks" id="DeleteMarks" >
        <br>
        </fieldset>


        <fieldset><label for="AddMark">Add Mark:</label><br>
        <input type="text" name="AddMark" id="AddMark"></p>
        <br>
        </fieldset>
    

       <fieldset><legend>Anonymous Question Creation</legend>
        <label for="AnonymousQuestion"></label>
        <input type="text" name="AnonymousQuestion" id="AnonymousQuestion">
        <br>
        </fieldset>
        

       <fieldset><legend>Duduct Mark For Coping</legend>
        <input type="text" name="obtainedMarks">
    </fieldset>


     <fieldset><legend>Bonus Mark</legend>
        <input type="text" name="bonusMark">
    </fieldset>

        <fieldset><legend>Ask for mark review</legend>
            <input type="text" name="Ask for mark review" id="Ask for mark review"><br>
        </fieldset>

      <fieldset> <label for="description">Additional Comment:</label>
        <textarea type="text" name="description" cols="100" rows="10"></textarea>
        <br>
        </fieldset> 
         
         <fieldset><legend>Rate the mark submission</legend>

        <label for="rating">Your rating:</label> <br>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<input type=\"radio\"  name=\"rating\" value=" . $i . ">";
            echo "<label for=\"" . $i . "\">" . $i . "</label>";
        }
        ?>

        <br>
    </fieldset>


<input type="submit" value="submit" name="submit">
</form>
</fieldset>

    
</body>

</html>