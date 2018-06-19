    <!DOCTYPE html>
<html>
    <head>
        <meta charser='UTF-8'>
        <title>COMBREROOO</title>
    </head>

    <body>

        <form method="POST" action="prvipokusaj.php">
        <table align='center'>
            <tr>
                <th colspan="2" align='center' bgcolor='yellow'>STUDENTS</th>
            </tr>
            <tr bgcolor='lightgrey'>
                <td align='right'>
                    Student's name
                </td>
                <td>
                    <input type=text placeholder='Enter name' name='name'>
                    <font color="red" > <?php echo@$_GET["greska1"] ?>  </font>
                 </td>
            </tr>
            <tr bgcolor='lightgrey'>
                <td align='right'>
                        Father's name
                </td>
                <td>
                    <input type=text placeholder='Enter father name' name='fname'>
                    <font color="red" > <?php echo@$_GET["greska2"] ?>  </font>
                </td>
            </tr>

            <tr bgcolor='lightgrey'>
                <td align='right'>
                    School's name   
                </td>
                <td>
                    <input type=text placeholder=' Enter school name' name='sname'>
                    <font color="red" > <?php echo@$_GET["greska3"] ?>  </font>
                </td>
            </tr>

            <tr bgcolor='lightgrey'>
                <td align='right'>
                    Roll no
                </td>
                <td>
                    <input type="text" placeholder='Enter roll no' name='rollno'>
                    <font color="red"> <?php echo @$_GET["greska4"] ?> </font>
                </td>
            </tr>
            
            <tr bgcolor='lightgrey'>
                <td align='right'>
                    class
                </td>
                <td>
                    <select name="select">
                        <option value=-1>Select</option>
                        <option value=10>10th</option>
                        <option value=9>9th</option>                       
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2" align='center'>
                    <input type="submit" name="submit"
                </td>
            </tr>
        </table>
        </form>

        <?php
        $connection = mysqli_connect("localhost", "root", "");
        if(!$connection)
        {
            die("Error" .mysqli_error());
        }

        $select = mysqli_select_db($connection, "vjezbe");
        if(!$select)
        {
            die("Error" .mysqli_eror());
        }


        if(isset($_POST["submit"]))
        { 
            $prva = $_POST["name"];
            $druga = $_POST["fname"];
            $treci = $_POST["scname"];
            $cetvrta = $_POST["rollno"];
            $peta = $_POST["select"];

            if($prva= "")
            {
            echo "<script>windows.open ('prvipokusaj.php?greska1=ERROR', '_self') </script>";
            return false;
            }

            if($druga="")
            {
                exho "<script>windows.open ('prvipokusaj.php?name=ERROR', _self') </script>";
            }

            else 
            $query= "INSERT INTO student(abu, combe, refko) VALUES ('$prva', '$druga', '$treca') ";
            $result= mysqli_query($connection, $query);

            
        }


        ?>

        </body>
</html>
