<footer>
    <ul style="display:inline-block;">
        <li style="text-align:center;"><a href="https://www.linkedin.com/in/cmak0319/"><img src="./images/linkedin_32.png"  width="32px" height="32px"/></a></li>
        <li style="text-align:center;"><a href="https://github.com/cmak8888"><img src="./images/github_32.png" width="32px" height="32px"/></a></li>
        <li style="text-align:center;"><img src="./images/email_32.png"  width="32px" height="32px"/></li>
    </ul>
    <?php 
		date_default_timezone_set("America/Denver");
		$uDate = date("m/d/y h:ia", filemtime('index.php'));
		
		date_default_timezone_set("America/Denver");
        echo ' <p style="font-size: 15pt;"> This page was last updated '  . $uDate . '</p>';
    ?>
</footer>