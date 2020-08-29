<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sky tours</title>
	<link rel="icon" type="image/png" href="slike/ikona.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    
	<link href="style.css" rel="stylesheet" type="text/css">
	
  </head>
  <body>
	<!--   Navigacija  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-dark sticky-top">
		<div class="container-fluid">
			
			<a href="index.html" class="navbar-brand"> <img src="slike/logo.svg" alt="logo" height="50px"></a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
				</span> 
			</button>
			
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Naslovna</a>
					</li>
					<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ponuda</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="brodice.html">Brodice</a>
          					<a class="dropdown-item" href="jedrilice.html">Jedrilice</a>
    				</li>
					<li class="nav-item">
						<a class="nav-link" href="cjenik.html">Cjenik</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="kontakt.html">Kontakt</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="recenzije.php?action=read">Recenzije</a>
					</li>
				</ul>
			</div>
		</div>
    </nav>
	  
	<div class="container contents">
            <br>    
            <?php
            if(!empty($params)){
				echo'<div class="col-md-12">
					<hr width="90%">
					<table class="text-center tablica">';
                	foreach ($params as $key => $value) {   
						echo'<tr>';
							if($value['ocjena']==1){
								echo'<td colspan="3"><img src="slike/1_zvijezda.png" alt="jedna zvijezda" height="25px" width="133px"></td>';
							}else if($value['ocjena']==2){
							   echo'<td colspan="3"><img src="slike/2_zvijezda.png" alt="dvije zvijezde" height="25px" width="133px"></td>';
							}else if($value['ocjena']==3){
							   echo'<td colspan="3"><img src="slike/3_zvijezda.png" alt="tri zvijezde" height="25px" width="133px"></td>';
							}else if($value['ocjena']==4){
								echo'<td colspan="3"><img src="slike/4_zvijezda.png" alt="četiri zvijezde" height="25px" width="133px"></td>';
							}else if($value['ocjena']==5){
								echo'<td colspan="3"><img src="slike/5_zvijezda.png" alt="pet zvijezda" height="25px" width="133px"></td>';
							}
							echo'<td colspan="2">'.$value['ime'].'</td>
							<td colspan="7">'.$value['opis'].'</td>
						</tr>
						<tr><td colspan="12"><hr></td></tr>';
					}
                    echo'</table>    
                </div>';
			}
			?>
		<table class="text-center tablica"><tr><td>
			<a href="recenzije.php?action=read&a=insert" class="btn btn-primary btn-sm btn_boja">UNESI RECENZIJU</a>
			</td></tr></table>
		<br><hr width="87%">
		
		<?php
			if(isset($_GET['a']) && $_GET['a']==='insert'){ ?>
				<div class="col-md-12">
				<table class="text-center tablica2" width="50%">
					<form method="post" action="recenzije.php?action=create">
						<tr><td>Ime: </td><td><input type="text" name="ime"></td></tr>
						<tr><td>Ocjena: (1-5)</td><td><input type="text" name="ocjena"></td></tr>
						<tr><td>Opis: </td><td><textarea name="opis"></textarea></td></tr>
						<tr><td colspan="2"><input type="submit" name="submit" value="UNOS" class="btn btn-primary btn-sm btn_boja"></td></tr>
					</form>
				</table>
			</div>
			<br><hr width="87%">
		<?php
			}
        ?>    
		

		<!-- recenzije slika -->
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-12">
					<img src="slike/recenzije.PNG" alt="recenzije" width="50%">
				</div>
				
		</div>
		<hr width="87%"><br>


		<!-- link za kontakt -->
		<div class="row align-items-center text-center">
			<div class="col-12">
				<p>Kontaktirati nas možete <a href="kontakt.html">ovako</a>.</p>
			</div>
		</div>
		<br>
	</div>
	
	
	<footer>
		<div class="container bg-light">
			<div class="row text-center">
				<div class="col-12 footer_moj">
					<p>&copy; Marina Kaluža</p>
				</div>
			</div>
		</div>
	</footer>
	  
	  
	  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>