<!DOCTYPE html>
<html>
    <body>
        <h2> Registration Form </h2>
        <hr>
        <form action= "/action_page.php">
            <table>
                <tr>
                    <td> First name: </td>
                    <td> <input type="text" name="fname" > </td>
               </tr>
               <tr>
                    <td> Last name: </td>
                    <td> <input type="text" name="lname" > </td>
               </tr>
               <tr>
                    <td> Age: </td>
                    <td> <input type="number" name="age" > </td>
               </tr>
               <tr>
                    <td> Designation: </td>
                    <td> 
                        <input type="radio" name="des" > Junior Programmer
                        <input type="radio" name="des" > Senior Programmer
                        <input type="radio" name="des" > Project Lead 
                   </td>    
               </tr>
               <tr>
                   <td> Preferred Language: </td>
                   <td> 
                       <input type="checkbox" name="lan" > JAVA
                       <input type="checkbox" name="lan" > PHP
                       <input type="checkbox" name="lan" > C++ 
                   </td> 
                <tr>
                    <td> E-mail: </td>
                    <td> <input type="text" name="mail" > </td>
               </tr> 
               <tr>
                    <td> Password: </td>
                    <td> <input type="password" name="pass" > </td>
               </tr>
               <tr>
                   <td> Please choose a file: </td>
                   <td> <input type="file" name="file" > </td>


</table>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset"value="Reset">

</form>
</body>
</html>




