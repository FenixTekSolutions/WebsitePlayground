<?php
    require_once "checklogin.php";
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Home | FenixTek</title>
        <?php include "headcomp.php" ?>
    </head>
    
    <body onload="SelectMode()">
    <?php include "header.php"?>
    
    <div id="mainContent">
        <br>
        <article class="mainArt">
            <h1 class="artHeading">FenixTek</h1><br>
            <h3 class="artHeading">Software Developer</h3><br>
            <hr>
            <h2 class ="artHeading">Skills</h2>
            <br>
            <table>
                <tr>
                    <td>Programming</td>
                    <td>Software</td>
                    <td>Transferable</td>
                    
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>C++</li>
                            <li>C#</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>SQL</li>
                            <li>PHP</li>
                            <li>Python</li>
                        </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Unity</li>
                                <li>Unreal</li>
                                <li>Visual Studio</li>
                                <li>VS Code</li>
                                <li>GIMP</li>
                                <li>Blender</li>
                                <li>3DS Max</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Communication</li>
                                <li>Fast Learner</li>
                                <li>Attention to Detail</li>
                                <li>Problem Solving</li>
                                <li>...</li>
                                <li>...</li>
                                <li>...</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <br>
                <hr>
                <h2 class="artHeading">Experience</h2>
                <p><h3>Job 1</h3><br>Job Description</p>
            </article>
        </div>
        
    </div>
    
    <?php include "footer.php" ?>
</body>
</html>