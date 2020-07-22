<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1>Installing Python 3 On Windows 10</h1>
<p>
	Unlike Macintosh computers, Windows based computers do not come with Python installed by default.  First we need to check and see if Python <em>is</em> already installed.  We are going to use the Command Prompt application in Windows.  Go to the Windows search box and begin typing Command Prompt. The application will appear for you to open. 
</p>
<p>
	After the Command Prompt opens you will then type the following command to see if Python is installed and what version it is.
	<pre>
    python --version
    </pre>
</p>
<p>
	If Python is installed on your computer already you will get a response with the version of python installed, similar to this:
	<pre>
    C:\Users\burhanna>python --version
    Python 3.8.5
    </pre>
    
</p>
<p>
	If Python is <b>not</b> installed on your computer you will get a response similar to this:
	<pre>
    C:\Users\burhanna>python --version
    'python' is not recognized as an internal or external command,
    operable program or batch file.
    </pre>
</p>
<p>
	<b>Note:</b> 
	If you have any version of Python 3.x on your computer already you should be able to use it for this class.
</p>

<p>If your computer does not have Python installed or the version installed is 2.x, please download and install Python 3.x from:</p>
<p><a href="http://www.python.org/download/" target="_blank">http://www.python.org/download/</a></p>
<p><b>As you install Python</b>, make sure to check the box  "Add Python 3.8 to PATH" so that you can 
type <b>python</b> at the command line prompt to run Python.
</p>

<h1>Installing Mu on Windows 10</h1>
<p>Now that we are confident you have Python installed, please download and install the Mu IDE from this site: <a href="https://codewith.mu/en/download" target="_blank">https://codewith.mu/en/download</a>
</p>
<p>
    The Mu site provides detailed installation directions <a href="https://codewith.mu/en/howto/1.0/install_windows" target="_blank">on this page.</a>
</p>


<h1>Starting Mu and testing the Mu IDE</h1>
<p>
    The last step is to check your installation to make sure it works as expected. I have a short
    <a href="https://www.youtube.com/watch?v=aIcLCww_kQM" target="_blank">
    step-by-step video</a> showing how to start Mu and test it with a simple Python program.
</p>


<h1>What about using Mu with CircuitPython?</h1>
<p>
    You will need to do some more prep work before we begin exploring CircuitPython on the Adafruit Feather Sense but we will wait until you have a good handle on Python before adding the necessary files to your system.  We will jump into CircuitPython in Module 3.
</p>



<!--
<b>Installing the Atom Text Editor</b>
<p>Please download and install Atom from this site:
</p>
<p><a href="http://atom.io" target="_blank">http://atom.io</a>

<h1>Writing a Python 3 program with Atom on Windows-10</h1>
<p>
We have a short 
<a href="https://www.youtube.com/watch?v=uZbaYeYGYRQ&index=1&list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p" target="_blank">
step-by-step video</a> showing how to install Python 3 and Atom and write your first program.
<p>
<h1>Some Windows Command Line Notes</h1>
<p>
When the command prompt starts <b style="color:black;background-color:#a0ffff">up</b>, you are in your "home" directory.  Your home directory 
is different for each of the operating systems.  
In each of these examples, your logged in account should be used instead of csev.
<pre>
    Windows XP:             C:\Documents and Settings\csev
    Windows Vista:          C:\Users\csev
    Windows 7:              C:\Users\csev
    Windows 10:             C:\Users\csev
    Windows 10 OneDrive:    C:\Users\csev\OneDrive
</pre>
The command line prompt usually includes some clue as to 
where you are in the folder structure on your hard drive.
<p>
If you want to really figure out where you are, use the cd command with no parameters
<pre>
    C:\Users\csev> cd
    C:\Users\csev
</pre>
<p>
Where can you go?
</p>
<p>
Generally the first thing you want to do when you open a command line 
interface is to navigate to the right folder.  Say you wanted to run a 
file from your desktop.   The command is <b>cd Desktop</b> (or <b>cd OneDrive\Desktop</b>) 
to get into the 
folder that is your Desktop.  You can use the <b>dir</b> command to see 
which files are in the current directory and the 
<b>cd ..</b> command to go "<b style="color:black;background-color:#a0ffff">up</b>" a directory
</p>
<p> 
<b>Nifty Trick:</b>  On the cd command, you can partially type a folder name like
Desktop and then press the TAB key and the system will auto-complete the folder name 
if you have typed enough that the system can accurately guess what you mean to type.
<p>
If you get Lost...
<p>
If you can't figure out what folder you are in and/or cannot figure out how 
to get to the folder you want to get to - simply close and re-open 
the Command Line / Terminal window.  You will be back to 
your "home" directory - so you can start from a known location.
<p>
Some Cool Hints on the Windows Command Line Interface
<p>
If you click on the little icon in the upper-left of the command prompt window 
and select Preferences - you can set many things about the command line - probably 
the most important is to set the Command History Buffer Size to be 999.
<p>
<h1>Running Your Python Program in the Command Line</h1>
<p>
To run your program in the command line you type at the command line prompt.
Windows knows that files that end with a ".py" suffix are Python programs.
<pre>
    python firstprog.py
</pre>
or
<pre>
    firstprog.py
</pre>
Where firstprog.py is the name of the file containing your Python program.  
Make sure to use the cd command to be in the correct directory that contains your program file(s).
</p>
<p> 
You can run your program over and over again in the command window.  
Hint:  You can use the <b style="color:black;background-color:#a0ffff">up</b>-arrow key to scroll back through previous 
commands and re-execute them by pressing enter.  This allows you to quickly 
edit and rerun your program to make and test changes.
</p>
-->

<?php include('footer.php');?>
