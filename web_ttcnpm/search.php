<?php
	require("conection.php");
    require_once ('component.php');
	session_start();
	
	if(isset($_POST['btnSearch'])){
        $search = $_POST['txtSearch'];
   
		if($search != ""){
            $output = 55;
            $sql="SELECT * FROM menu where dishname like '%$search%'";

            $res=$conn->query($sql);
    
            while($row=$res->fetch_assoc()){
                $dishname_ = $row['dishname'];
                $price_ = $row['price'];
                $img_ = $row['img'];
                $id_ = $row['id'];
                $vendor_ = $row['vendor'];
                } 
            
		} 
    }
     
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <!--<script src="store.js" async></script>-->     
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    </head>
    <body>
        
        <?php require_once ("header.php"); ?>
        <div style="font-family: tahoma; font-size: 12px; color: green;">
			<form action="#" method="POST">
			<h4>Search for the name of dish you want:</h4>
				<input type="text" name="txtSearch" placeholder="Enter your keyword..."/>
				<input type="submit" name="btnSearch" valuer="Search"/>
			</form>
			
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <?php
                    if(isset($price_)){
                        component($dishname_, $price_, $img_, $id_, $vendor_ );
                    }
                ?>
            </div>
        </div>";
        <?php
				
		?>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">BK Food Court</h3>
                <ul class="nav footer-nav">
                    
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>

    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>