<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Dashboard ::. JPMorgan Chase & Co</title>
  <link rel="shortcut icon" href="images/icon.png" />
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
<style>
a
{
padding: 20px;
}
table
{
width:100%;
}
th,td
{
text-align:center;
}
#content
{
height: 325px;
padding-top: 15px;
}
</style>
	</head>

<body id="www-url-cz">

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header">

        <!-- Logotyp -->
        <h1 id="logo">JPMorgan Chase & Co<span></span></h1>
    <div id="title1"> <!-- /header -->

<?php
session_start();
if(isset($_SESSION['accountno']))
{
$accno=$_SESSION['accountno'];
include('config.php');
$query="SELECT * FROM `bal123@#%` WHERE AccountNo='$accno'";
$result = mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
echo "<br>Last access time : ".$row['LastAccess'];
$query="SELECT * FROM `reg321@#%` WHERE AccountNo='$accno'";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
echo "</div><div id=\"title2\">";
echo "welcome : ".$row['Salutation'].". ".$row['FirstName']." ".$row['LastName'];
?>
    
</div> <!-- /title2 -->

	</div> <!-- /header -->

	<!-- Main menu (tabs) -->
     <div id="tabs" class="">

           <ul class="box">
                <li id="active"><a href="accountsummary.php">My Account<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="accountstmt.php">Account Statement<span class="tab-l"></span><span class="tab-r"></span></a></li> <!-- Active -->
                <li><a href="transfer.php">Transfer Money<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="onlinerech.php">Online recharge<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="account.php">Account Info<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="logout.php">Logout<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">

        <!-- Content -->
    <div id="content">
<?php
$query="SELECT * FROM `bal123@#%` WHERE AccountNo='$accno'";
$result = mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
//echo "<br>Last access time : ".$row['LastAccess'];
echo "<table>
	<tr>
	
		<th>Account No/Nick Name</th>
		<th>Available Balance</th>
		<th>Transactions</th>
	</tr>";
echo "<tr>
	
		<td>".$accno."</td>
		<td>".$row['Balance']."</td>
		<td><a href=\"accsumm2.php\">Click here for last 10 transactions</a></td>
	</tr>";

echo "</table>";
//echo "<br>Your balance : ".$row['Balance']."<br><br>";
}
else
header('Location:internetbanking.php?id=Your session may be expired. You have to login first');
?>
    </div>            
               
  
    </div> <!-- /page -->


    <!-- Footer -->
    <div id="footer">
       <p id="copyright">Copyright &copy; <?php echo date("Y") ?> JPMorgan Chase & Co | All Rights Reserved</p>
     </div> <!-- /footer -->

</div> <!-- /main -->
</body>
</html>
