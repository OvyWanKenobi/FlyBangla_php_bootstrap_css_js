<?php
session_start();
if ((!isset($_SESSION['loggedin'])) || $_SESSION['loggedin'] != true) {
    header("location: ../public/index.php");
}
?>


<h1>welcome <br> you are logged in
</h1>
<button>
    <a href="../../partials/_logout.php">logout</a>
</button>

<?php


echo "<br><h3>sessions :: <br>logged = " . $_SESSION['loggedin'];
echo "<br>email=" . $_SESSION['loggedusermail'];
echo  "<br>name=" .  $_SESSION['loggedusername'];
echo   "<br>user_id=" . $_SESSION['loggeduser_id'];
echo "</h3>";
?>




<div style=" background-color:yellow; color:red; padding-left:300px;">
    <h1>The project is not complete yet. <br> Hoping to complete it by 27-12-22. <br> Come and Check again afterwards.</h1>
    <h2>Features will be added include -
        <ul>
            <li>
                Flight checking module
            </li>
            <li>
                Booking module with seat selection feature
            </li>
            <li>
                Check purchase using reference number
            </li>
            <li>
                Print e-Ticket
            </li>
            <li>
                Check history
            </li>
            <li>
                + + and more
            </li>
        </ul>
    </h2>
</div>