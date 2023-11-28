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
            <a class="active" href="Comics.php">Comics</a>
            <a href="Author.php">Author</a>
            <a href="About.html">Contact us</a>
        </div>
        <div class="Card" style="width:90%"><br />
            <h3>Comics</h3>          
            <table >  
                <tr>
                    <th>Comic ID</th>
                    <th>Comic Name</th>
                    <th>Author ID</th>
                    <th>Comic Type</th>
                    <th>Published Date</th>
                    <th>Price</th>
                </tr>
                <tr>
                <?php
                    $con = mysqli_connect('localhost', 'root', '','comic');
                    $qryComics = "Select * from comics order by Comic_Name";
                    $rstComics = mysqli_query($con, $qryComics);
                    while ($rowComics = mysqli_fetch_assoc($rstComics)) {
                        echo '<tr>';
                        echo '<td>' . $rowComics['Comic_id'] . '</td>';
                        echo '<td>' . $rowComics['Comic_Name'] . '</td>';
                        echo '<td>' . $rowComics['Author_ID'] . '</td>';
                        echo '<td>' . $rowComics['Comic_Type'] . '</td>';
                        echo '<td>' . $rowComics['Published_Date'] . '</td>';
                        echo '<td>' . $rowComics['Price'] . '</td>';
                        echo '</tr>';
                    }
                ?>
                </tr>
            </table>
            <p>.....</p>
        </div>
        <center class="butt">
            <button ><a href="Addcomic.php">Add Comic</a></button>
        </center>
    </body>
</html>