<!DOCTYPE html>
<link rel="stylesheet" href="css/index.css"></link>



<body>
    <div id="header">
    <?php
echo readfile("./html/header.html");
?>
    </div>
    <div class="container">

        <?php 
 
        echo "Hello World";

        ?>
        <a href="test.php">to php test</a>
    </div>
    
    <div id="footer">
    <?php
echo readfile("./html/footer.html");
?>
    </div> 
</body>