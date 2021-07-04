 <?php
 include("connect.php");
        $name=$_REQUEST['name'];
       $email=$_REQUEST['email'];
       $phone=$_REQUEST['phone']; 
        $address = $_REQUEST['address']; 
 $postcode=$_REQUEST['postcode'];
 $country=$_REQUEST['country'];
 $cardtype=$_REQUEST['cardtype'];
 $cardnumber=$_REQUEST['cardnumber'];
 $secure=$_REQUEST['secure'];
 $namecard =$_REQUEST['namecard'];

 mysql_query("insert into test1(name,email,phone,address,postcode,country,cardtype,cardnumber,sequritycode,nameoncard)values('$name','$email','$phone','$address','$postcode','$country','$cardtype','$cardnumber','$secure','$namecard')");







if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
      echo "Data inserted Successfully";
?>