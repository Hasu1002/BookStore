<!DOCTYPE html>
<html>
    <head>
        <title>Comics Books</title>
        <link rel="stylesheet" href="start.css">
        <link rel="stylesheet" href="table.css">
        <link rel="icon" href="icon.png" >
    </head>
    <body>
        <div class="topnav">
            <a href="start.html">Home</a>
            <a href="Comics.php">Comics</a>
            <a class="active" href="Author.php">Author</a>
            <a href="About.html">Contact us</a>
        </div>
        <div class="Card" style="Width: 90%"  ><br />
            <h3>Authors</h3>          
            <table>  
                <tr>
                    <th>Author ID</th>
                    <th>Author Name</th>
                    <th>Date of birth</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Specialized</th>
                    <th>Post</th>
                    <th>Contact</th>
                    <th>City</th>
                </tr>
                <?php
                    $con = mysqli_connect('localhost', 'root', '','comic');
                    $qryAuthors = "Select * from author order by AuthorName";
                    $rstAuthors = mysqli_query($con, $qryAuthors);
                    while ($rowAuthors = mysqli_fetch_assoc($rstAuthors)) {
                        echo '<tr>';
                        echo '<td>' . $rowAuthors['AuthorID'] . '</td>';
                        echo '<td>' . $rowAuthors['AuthorName'] . '</td>';
                        echo '<td>' . $rowAuthors['DOB'] . '</td>';
                        echo '<td>' . $rowAuthors['Age'] . '</td>';
                        echo '<td>' . $rowAuthors['Gender'] . '</td>';
                        echo '<td>' . $rowAuthors['Specialized'] . '</td>';
                        echo '<td>' . $rowAuthors['Post'] . '</td>';
                        echo '<td>' . $rowAuthors['ContactNumber'] . '</td>';
                        echo '<td>' . $rowAuthors['City'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <p>.....</p>
        </div>
        <center class="butt">
            <button ><a href="Addauthor.html">Add Author</a></button>
        </center>
    </body>
</html>