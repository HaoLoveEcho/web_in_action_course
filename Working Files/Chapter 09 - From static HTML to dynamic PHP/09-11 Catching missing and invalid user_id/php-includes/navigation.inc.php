<?php

$testUsers = testUsers();

switch($testUsers) {
    
    case "no_id":
        $showUsers = showUsers('all');
        $heading = "<h2><a>Choose a movie-goer</a></h2>";
        $loggedState = "logged_out";
        break;
    
    case "invalid_id":
        $showUsers = showUsers('all');
        $heading = "<h2><a>Choose a movie-goer</a></h2>";
        $loggedState = "logged_out";
        break;        
        
    case "id_set":
        $showUsers = showUsers('others');
        $heading = showUsers('current');
        $loggedState = "logged_in";
        break;   
    
}

?>

        <nav class="navigation">
            <div class="select_users">
                <?php echo $heading; ?>
            </div>
            
            <div class="profile <?php echo $loggedState; ?>"></div>
            <div class="admin_button"></div>
            
            <ul class="users_menu">
                <?php echo $showUsers; ?>
            </ul>
            
            <ul class="admin_menu">
                <li><a href="admin.php?page=users">Manage users</a></li>
                <li><a href="admin.php?page=movies">Manage movies</a></li>
            </ul>
        </nav>
        
<?php

if ($testUsers=="no_id") {
    echo "<div class='message'>";
    echo "<h2>Choose one of the movie-goers from the menu on the right</h2>";
    echo "</div>";
    include 'footer.inc.php';
    exit;
}

if ($testUsers=="invalid_id") {
    echo "<div class='message alert'>";
    echo "<h2>Invalid user ID: Choose one of the movie-goers from the menu on the right</h2>";
    echo "</div>";
    include 'footer.inc.php';
    exit;
}

?>