<?php

$content = $_POST['content'];

?>


<form action="form.php" method="post">
    <input type="text" name="content">
        <button type="submit">Submit</button>
</form>

<br><br>

<p>The content you entered was <?php echo $content; ?></p>