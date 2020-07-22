<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require_once "top.php";
require_once "nav.php";
?>
<h1>Internet of Things OER</h1>

<?php if ( isset($_SESSION['id']) ) { ?>

<p>
Welcome to my Open Education Repository (OER) for my Internet of Things Curriculum. 
Now that you have logged in, you have access to course-style features of this web site.
<!--
<dl>
  <dt>Module 1 - The Internet of Things</dt>
  <dd>- Begin with a background of Internet of Things concepts and systems.</dd>
  <dt>Module 2 - Python</dt>
  <dd>- Learn to solve some problems with the Python programming language.</dd>
  <dt>Module 3 - CircuitPython</dt>
  <dd>- Learn to use CircuitPython on the Adafruit Feather hardware.</dd>
  <dt>Module 4 -IOT Remote Control </dt>
  <dd>- Learn to build an IOT enabled remote control device.</dd>
  <dt>Module 5 - IOT Remote Monitoring</dt>
  <dd>- Learn to remotely monitor and display locally sensor values from an IOT device.</dd>
  <dt>Module 6 - IOT Data Collection</dt>
  <dd>- Learn to analyze mulitple IOT data points to make decisions and changes to a system. </dd>
</dl>
-->
<ul class="list-group">
<li class="list-group-item">
As you go through the <a href="lessons">Modules</a> in the course you now will see additional
links to the autograders in the class.  You can attempt the autograders and get a score.</li>
<li class="list-group-item">
You can track your progress through the course using the <a href="assignments">Assignments</a>
tool and when you complete a group of assignments, you can earn a <a href="badges">Badge</a>.
You can download these badges and host them on your web site or refer the badge URLs on this site.</li>
<li class="list-group-item">
If you want to use these Creative Commons Licensed materials 
in your own classes you can 
<a href="materials.php">download or link</a> to the artifacts on this site,
<a href="tsugi/cc/export.php">export the course material</a> as an
IMS Common Cartridge®, or apply for
an IMS Learning Tools Interoperability® (LTI®)
<a href="tsugi/admin/key/index.php">key and secret</a>
 to launch the autograders from your LMS.
</li>
</ul>

<?php } else { ?>

<p>
Hello and welcome to my Open Education Repository (OER) for my Internet of Things Curriculum. The course is broken down into modules. 

<dl>
  <dt>Module 1 - The Internet of Things</dt>
  <dd>- Begin with a background of Internet of Things concepts and systems.</dd>
  <dt>Module 2 - Python</dt>
  <dd>- Learn to solve some problems with the Python programming language.</dd>
  <dt>Module 3 - CircuitPython</dt>
  <dd>- Learn to use CircuitPython on the Adafruit Feather hardware.</dd>
  <dt>Module 4 -IOT Remote Control </dt>
  <dd>- Learn to build an IOT enabled remote control device.</dd>
  <dt>Module 5 - IOT Remote Monitoring</dt>
  <dd>- Learn to remotely monitor and display locally sensor values from an IOT device.</dd>
  <dt>Module 6 - IOT Data Collection</dt>
  <dd>- Learn to analyze mulitple IOT data points to make decisions and changes to a system. </dd>
</dl>

</p>
<p>
You can use this web site many different ways:
<ul class="list-group">
<li class="list-group-item">
You may browse my videos and course materials under <a href="lessons">Modules</a>.  The materials
I have developed
for this class are all provided with a Creative Commons license so you can download or link to
them to incorporate them into your own teaching if you like.</li>
<li class="list-group-item">
If you <a href="tsugi/login.php">log in</a> to this site
it is as if you have joined a free, global
open and online course.  You have a grade book, autograded assignments, a discussion forum, and can earn
badges for your efforts.</li>
<li class="list-group-item">
If you want to use these materials 
in your own classes you can download or link to the artifacts on this site,
<a href="tsugi/cc/export.php">export the course material</a> as an
IMS Common Cartridge®, or apply for
an IMS Learning Tools Interoperability® (LTI®)
<a href="tsugi/admin/key/index.php">key and secret</a>
 to launch the autograders from your LMS.
</li>
<li class="list-group-item">
The code for this site including the autograders, slides, and course content is all available on
<a href="https://github.com/dburhanna/iot_oer" target="_blank">GitHub</a>.  That means you could make your own
copy of the course site, publish it and remix it any way you like. 
</li>
<li class="list-group-item">
We take your privacy seriously on this site, you can review our
<a href="privacy">Privacy Policy</a> for more details.
</li>
</ul>

<?php } ?>



This site uses <a href="http://www.tsugi.org" target="_blank">Tsugi</a> 
framework to embed a learning management system into this site and
provide the autograders.  
If you are interested in collaborating
to build these kinds of sites for yourself, please see the
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website.
</p>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
<?php $OUTPUT->footer();
