if($isset($_POST['submit']))
{
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message']." August427";

$mailTo = "jessecb@hey.com";
$headers =  "From: ".$mailFrom;

mail($mailTo, $name, $message, $headers);

header("Location: index.html");
}
?>