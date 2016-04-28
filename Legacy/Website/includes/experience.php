<h1>Real World Experience and Major Projects</h1>
<br>
<p> Other than the framework, this website was made entirely by me.  This shows that I am proficient with the creation of websites and can effectively uses CSS, HTML, PHP, and SQL.  Some of the PHP used includes functions, arrays, and include files.  The contact form below is made by using SQL.

<p><br>During my 2015 summer internship, I worked on updating some parts of the University of Pittsburgh's Computer Science website.  The major parts of the website that I worked on were <a href="https://cs.pitt.edu/about">About</a>, <a href="https://cs.pitt.edu/undergrads">Undergraduate</a>, and <a href="https://cs.pitt.edu/News">News</a>
<br>
This further highlights my skills with CSS, HTML, PHP, and SQL.  The news section especially used PHP and SQL extensively, giving me more experience in them.
(Notice: the website may be changed at any time, so I cannot garentee that I worked on the most recent version of that website)


<p><br>In some of my classes, I have done some large projects that may be able to show you my programming style, so I have included them below, each of the projects were turned in for a grade, and each of them have the rubric in the zipped file.
<br>

<?php
$opener = @fopen("projectFiles.txt", "r");
if ($opener) {
    while (($projects = fgets($opener, 4096)) !== false) {
        echo $projects . '<br>';
    }
    if (!feof($opener)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($opener);
}
?>

<p><br>As mentioned previously in my skills section of the website, I have experience working on a team, under time constraints, and under financial constraints.  To read more about this, 
<?php writeLink('skills'); ?>Go back to that section.</a>
