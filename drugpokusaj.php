<!DOCTYPE html>
<html>
    <head>
    <title>SINOVI ADEMOVI</title>
    </head>

    <body>
    <form method="POST" action="drugpokusaj.php">
    <table align="center">
    <tr>
    <th colspan="2" align="center" bgcolor="yellow">Student information</th>
    </tr>

    <tr bgcolor="lightgrey">
    <td align="right">Student name</td>
    <td> <input type=text name="name"></td>
    <td><font color="red"> <?php echo @$_GET["greska1"]; ?></font></td>
    </tr>

    <tr bgcolor="lightgrey">
    <td align="right">Father's name</td>
    <td> <input type=text name="fname"></td>
    <font color="red"> <?php echo @$_GET["greska2"]; ?></font>
    </tr>

    <tr bgcolor="lightgrey">
    <td align="right">School's name</td>
    <td> <input type=text name="sname"></td>
    <font color="red"> <?php echo @$_GET["greska3"]; ?></font>
    </tr>

    <tr bgcolor="lightgrey">
    <td align="right">Roll no</td>
    <td> <input type=text name="rollno"</td>
    <font color="red"> <?php echo @$_GET["greska4"]; ?></font>
    </tr>

    <tr bgcolor="lightgrey">
    <td align="right">Class</td>
    <td>
    <select name="select">
    <option value=-1>Select</option>
    <option value=10>10th</option>
    <option value=9th>9th</option>
    </select>
    <font color="red"> <?php echo @$_GET["greska5"]; ?></font>
    </td>
    </tr>
    <tr bgcolor="lightgrey"><td colspan="2" align="center"><input type="submit" name="submit"</td></tr>
    </table>
    </form>
    
    <?php 

    $connection= mysqli_connect("localhost", "root", "");

    if(!$connection)
    {
        die("Error" .myspli.error());
    }

    $select= mysqli_select_db($connection, "vjezbe");

    if(!$select)
    {
        die("Error" .mysqli.error());
    }

    if(isset($_POST["submit"]))
    {
        $prva= $_POST["name"];
        $druga= $_POST["fname"];
        $treca= $_POST["sname"];
        $cetvrta= $_POST["rollno"];
        $peta= $_POST["select"];

        if($prva == ""){
        echo "<script> window.open('drugpokusaj.php?greska1=error' ,'_self'</script>";
            }   
        if($druga=="")
        echo "<script> window.open ('drugpokusaj.php?greska2=error', '_self'</script>";

        if($treca=="")
        echo "<script> window.open ('drugpokusaj.php?greska3=error', '_self'</script>";

        if($cetvrta=="")
        echo "<script> window.open ('drugpokusaj.php?greska4=error', '_self'</script>";

        if($peta=="")
        echo "<script> window.open ('drugpokusaj.php?greska5=error', '_self'</script>";

        else 
        $query= "INSERT INTO student(student name, father name, school name, rool no, class) VALUES ('$prva', '$druga', '$treca', '$cetvrta', '$peta')";

        $result=mysqli_query($connection, $query);

        
            echo "<table>
            <tr>
            <th>Student name</th>
            <th>Father name</th>
            <th>School name</th>
            <th>Roll no</th>
            <th>Class</th>
            </tr>
            <tr>
            <td>$prva</td>
            <td>$druga</td>
            <td>$treca</td>
            <td>$cetvrta</td>
            <td>$peta</td>
            </tr>
            </table>";
        

            if(!$result)
            {
                echo "ERROR";
            }
    }

    mysqli_close($connection);
    ?>

    $combe= "SELECT * from student";

    $result=mysqli_query($connection, $combe);

    if($result-> num_rows >0 )
    {
        while($row= $result-> fetch_assoc())
        {
            echo "tudent name:".$row['name']. ; 
            echo "father name:".$row['fname']. ;
        }
    }


    $refko= "DELETE FROM student WHERE ID = '11'";

    $result=mysqli_query($connection, $refko);
    if($result)
    {
        echo "DELETED"
    }


if(isset($_POST['delete']))
{
    
}



















    </body>



</html>