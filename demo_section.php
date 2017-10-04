<?php
$connection = mysqli_connect('localhost', 'root', 'Rvm@i[9)0?~=');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
	
	
	<?php
	// ajax refresh code
function autoRefresh()
{
    var url    = "../../../support/ajaxTest.txt";
    var target = document.getElementById("statusRefresh");

    var doRefresh = function() 
    {
        loadXMLDoc(url, function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                target.innerHTML=xmlhttp.responseText;
            }
        }
    });

    setInterval( doRefresh, 5000 );  
} 	

//ajax  onclick function

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
?>