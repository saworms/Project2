<?php
function  writeLink($linkLocation){
	echo "<br><a class='btn btn-default page-scroll' href='#" . $linkLocation . "'>";
}
?>

<h1>Spencer Worms</h1>
<br>
<p>This is a website made by Spencer Worms for a grade in their CS 1520 class that will also be used to advertise my skills to a potential employer.</p>

<p>Use the buttons at the top of the screen, the buttons below, or scroll down to see the other sections.</p>

<?php writeLink("about") ?> Find out general information about me</a>
<br>
<?php writeLink("skills") ?>Find out some of my skills</a>
<br>
<?php writeLink("experience") ?>See some of my projects and real world experience</a>
<br>
<?php writeLink("contact") ?>Contact me</a>
