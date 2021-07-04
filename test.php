<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="reg.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <label>name:
  <input type="text" name="name" />
  </label>
  <p>
    <label>address:
    <textarea name="address"></textarea>
    </label>
  </p>
  <p>
    <label>gender
    <input name="gender" type="radio" value="male" />
   Male </label>
   <label>
    <input name="gender" type="radio" value="female" />
   Female </label>
  </p>
  <p>
    <label>qualification
    <input type="checkbox" name="chk1[]"  value="  S.S.C " />
   S.S.C </label>
   
   <label>
    <input type="checkbox" name="chk1[]"  value="H.S.C" />
   H.S.C </label>
    <label>
    <input type="checkbox" name="chk1[]"  value="M.S.C" />
   M.S.C </label>
  </p>
  <p>
    <label>File
    <input type="file" name="file" />
    </label>
  </p>
  <p>
    <input type="submit" name="Submit" value="Submit" />
    </label>
    <label>
    <input type="reset" name="reset" value="Clear" />
    </label>
  </p>
</form>
</body>
</html>
