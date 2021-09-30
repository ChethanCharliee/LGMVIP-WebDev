<!DOCTYPE html>
<html>
<head>
    <title>View Result</title>
    <link rel="stylesheet" type="text/css" href="css/view-result.css">
</head>
<body>
    <div >
        <?php include('leftbar.php');?>
    </div>

<div style="margin-left:15%;margin-right:5%;padding:1px 16px;height:1000px;">
    <br><br><br><br>
    <br><br>
    <div class="box" style="height:250px">
      <center>
        <font color="#B739FE"><H1>STUDENTS DETAILS</H1></font><hr><br>
        <?php include('query-result.php');?>
        </center>
        
    </div>
    
</div>


</body>
</html>