<!doctype html>
<html lang="en">
    <head> 
        <title></title>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="form.scss" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    </head>
    <body>
        <!--
            Project
                - Title
                - Description
                - Image Array (strings)
                - Project link
                - flags
                - timestamp
                - 
-->
        <?php
            $filter_flags = array("Web","Mobile Apps", "Algorithms", "Computer Graphics", "Operating Systems", "Java", "Kotlin", "C++", "Open GL", "Python", "Racket")
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
            <fieldset class="project">
                <legend> New Project </legend>
                <label for="pname">Project Name:</label> <input type="text" id="name" name="pname" />
                <label for="pdesc">Project Description:</label> <input type="text" id="desc" name="pdesc" />
                <label for="images">Images:</label><input type="file" id="media" name="images" accept="image/*|video/*|audio/*" />
                <label for="link">Link: </label><input type="text" id="link" name="link" /><div class="filter-inline">
                <div class="filter-inline">
                Flags:
                <?php
                    for($x = 0; $x < sizeof($filter_flags);$x++) {
                        echo '<input id="$filter_flags[$x]" type="checkbox" value=$filter_flags[$x]><label></label>';
                    }
                ?>
                </div>
                <label for="timestamp">Timestamp:</label><input type="date" id="timestamp" name="timestamp" />

            </fieldset>
            <input type="submit" value="Submit" id="submit">
            <input type="reset" id="reset">
        </form>
        <?php include 'contacts.php' ?>
    </body>
</html>

        