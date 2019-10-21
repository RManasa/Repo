<?php
    session_start();
    if(isset($_SESSION["demographic"])){
        if($_SESSION["demographic"]=="filled"){
            header("Location: Task1info.php");
        }
    }
?>
<!DOCTYPE html>
<html>

<body>

    <h1>Demographic Information</h1>
    <h3>Please answer the following questions: </h3>

    <form action="phpFiles/demographic.php" method="POST">
        <br>
        <ul style="list-style-type:none;">

            <table>
                <tr>
                    <td>
                        a) Name:
                    </td>
                    <td>
                        <input type="text" name="name" value="" required>
                    </td>
                </tr>
                <!-- extra line space -->
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>
                        b) Gender:
                        <br><br>
                        <input type="radio" name="gender" value="male" checked> Male<br>
                        <input type="radio" name="gender" value="female"> Female<br>
                        <input type="radio" name="gender" value="other"> Other
                    </td>
                </tr>
                <!-- extra line space -->
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>
                        c) Age:
                    </td>
                    <td>
                        <select name="age">
          <option value="Select" >Select</option>
          <option value="<18" > less than 18</option>
          <option value="18-20" >18-20</option>
          <option value="21-25" >21-25</option>
          <option value=">25" >greater than 25</option>
        </select>
                    </td>
                </tr>
                <!-- extra line space -->
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>
                        d) Undergraduate<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Classification:
                        <!--  &nbsp; is used for spacing -->
                    </td>
                    <td>
                        &nbsp;<select name="Undergraduate" required>
                        <option value="Select">Select</option>
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                </select>
                    </td>
                </tr>
                <!-- extra line space -->
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit">
                    </td>
                </tr>
            </table>

    </form>

</body>

</html>