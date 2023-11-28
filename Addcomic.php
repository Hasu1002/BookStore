<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Comics</title>
    <link rel="stylesheet" href="table.css">
    <link rel="icon" href="icon.png" >
    <style>
        td {
          text-align: left;  
        }
    </style>
</head>
<body>
    <script src="Addcomic.js"></script>
    <div class="Card"><br />
        <h3>Add Comic</h3>          
            <table>  
                <tr>
                    <td>Comic Name</td>
                    <td><input type="text" name="Cname" id="Cname" onkeypress="return isAlphabet(event)" /></td>
                </tr>
                <tr>
                    <td>Author Name</td>
                    <td><select id="Aname" >
                        <option value=0>Select Author</option>
                        <?php
                            $con = mysqli_connect('localhost', 'root', '','comic');
                            $qryAuthors = "select AuthorID, AuthorName from author order by AuthorName";
                            $rstAuthors = mysqli_query($con, $qryAuthors);
                            while ($rowAuthors =  mysqli_fetch_assoc($rstAuthors)) {
                                echo "<option value = " .  $rowAuthors['AuthorID'] . ">" . $rowAuthors['AuthorName'] . "</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cover Photo</td>
                    <td><input type="file" name="Cimg" id="Cimg" /></td>
                </tr>
                <tr>
                    <td>Comic Type</td>
                    <td><input type="Text" name="Ctype" id="Ctype" /></td>
                </tr>
                <tr>
                    <td>Published Date</td>
                    <td><input type="date" name="Pdate" id="Pdate" /></td>
                </tr> 
                <tr >
                    <td>Price</td>
                    <td><input type="number" name="Price" id="Price" onkeypress="return isNumber(event)"/></td>
                </tr>
            </table>
            <center>
                <button name="Submit" id="Submit" value="Submit" onclick="submitForm()">Done</button>
                <button ><a href="Comics.php">Back</a></button>
            </center>
        </div>
</body>
</html>