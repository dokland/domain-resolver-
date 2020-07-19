<h5>Domain Resolver</h5>
<form action="" method="post">
	<br><br>
       <input class="textbox" type="text" name="domain">
       <button type="submit" type="submit"><b>GET</b></button>
</form>

<?php
if (isset($_POST['submit'])){
     $domain = $_POST['domain'];
     echo " $domain_ip";
  }
 ?>

 <?php
 $domain = $_POST['domain'];
 $ip = gethostbyname($domain);

    echo "Domain: ".$domain;
    echo "<br>";
    echo "IP: ".$ip;
 ?>
