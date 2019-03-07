<!DOCTYPE html>
<html>
    <head>
               <style>
      a {
            color:white
        }
        body {
            background-image:url("back.jpg");
            background-size:1500px 800px;
        }
    p{
        color:white}
    li{
        color:white
           
    }
    h1{
        color:white
    }
    td{
        color:white
    }
    div{
        color:white
    }
    </style>
    </head>
<body>
    <!-- //Starting the session to get the session variable from the last page-->
    <div>
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameVal = $_POST['txtName'];
        $NumberVal = $_POST['txtNum'];
        echo "The name is: ".$fullNameVal.".";
        echo "<br></br>";
        echo "The phone number is: ".$NumberVal.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
    ?>
    </div>
</body>
</html>

