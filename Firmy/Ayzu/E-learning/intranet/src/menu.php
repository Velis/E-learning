<div id="header">&nbsp;</div>
<div id="menu-horni">
<ul id="menu" class="polozky">
        <li <?php if (basename($_SERVER["REQUEST_URI"]) == "index.php" ) echo " class='active' ";?> <a href="index.php">Domů</a></li>
        <li <?php if (basename($_SERVER["REQUEST_URI"]) == "learning.php") echo " class='active_link' ";?> <a href="learning.php">E-learning</a></li>
        <li <?php if (basename($_SERVER["REQUEST_URI"]) == "aboutme.php") echo " class='active_link' ";?> <a href="aboutme.php">About me</a></li>
        <li <?php if (basename($_SERVER["REQUEST_URI"]) == "blog.php") echo " class='active_link' ";?> <a href="blog.php">Blog</a></li>
        <li <?php if (basename($_SERVER["REQUEST_URI"]) == "contact.php") echo " class='active_link' ";?> <a href="contact.php">Contact</a></li>
</ul>
</div>