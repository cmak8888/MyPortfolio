<footer>
    <ul style="display:inline-block;">
        <li style="text-align:center;">Linked In: <a href="https://www.linkedin.com/in/cmak0319/"><img src="./images/linkedin_32.png" /></a></li>
        <li style="text-align:center;">GitHub: <a href="https://github.com/cmak8888">><img src="" /></a></li>
        <li style="text-align:center;">><img src="./images/email_32.png" /></li>
    </ul>
    <?php 
		date_default_timezone_set("America/Denver");
		$uDate = date("m/d/y h:ia", filemtime('index.php'));
		
		date_default_timezone_set("America/Denver");
        echo ' <p style="font-size: 15pt;"> This page was last updated '  . $uDate . '</p>';
    ?>
</footer>