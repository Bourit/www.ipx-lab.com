<?php
  session_start();
  ?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head> 


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta name="DESCRIPTION" content="IPX / Internet eXchange Point"/>
<meta name="description" content="IPX / Internet eXchange Point" />
<meta name="keyword" content="IPX, Internet eXchange Point, Ecole, Edition, Logiciel, Plateforme, Echange, Partage, Numérique, Art, Lyon, Rhone-Alpes  "/>
<meta name="keywords" content="IPX, Internet eXchange Point, Ecole, Edition, Logiciel, Plateforme, Echange, Partage, Numérique, Art, Lyon, Rhone-Alpes"/>
<meta name="SUBJECT" content="IPX, Internet eXchange Point, Ecole, Edition, Logiciel, Plateforme, Echange, Partage, Numérique, Art, Lyon, Rhone-Alpes "/>
<meta name="RATING" content="IPX, Internet eXchange Point, Ecole, Edition, Logiciel, Plateforme, Echange, Partage, Numérique, Art, Lyon, Rhone-Alpes"/>

<meta name="EDITORS" content="ipx-lab.com"/>

<meta name="REVISIT-AFTER" content="10 DAYS"/>
<meta name="ROBOTS" content="All"/>




<title>IPX / Internet eXchange Point</title>


<!-- 

.....__              
	|__|________  ___
	|  \____ \  \/  /
	|  |  |_> >    < 
	|__|   __/__/\_ \
	   |__|        \/

 -->

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

<link href="css/ipx.css" rel="stylesheet" type="text/css" />










<style type="text/css">
body {

	color: #333;
}


a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	color: #FFF;
	text-decoration: none;
}
a:hover {
	color: #FFF;
	text-decoration: none;
}
a:active {
	text-decoration: none;
}


.Bouton_IPX {
	background-color:#F9DF14;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:14px;
	padding:10px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #c9c5c9;
}
.Bouton_IPX:hover {
	background-color:#dedade;
}
.Bouton_IPX:active {
	position:relative;
	top:1px;
}


.Bouton_Modules {
	background-color:#F9DF14;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:12px;
	padding:16px 6px;
	text-decoration:none;
	text-shadow:0px 1px 0px #c9c5c9;
}
.Bouton_Modules:hover {
	background-color:#dedade;
}
.Bouton_Modules:active {
	position:relative;
	top:1px;
}


.lienipx{
	color:#FFED68;
}



.container .content table {
	text-align: center;
}

</style>





</head>

<body>





<div class="container">
  <div class="sidebar1"><br /> <br /> <br /> 
    <table width="100%" border="0" cellspacing="0">
  <tr>
    <th scope="col"><a class="Bouton_IPX"  href="../index.html">IPX</a></th>
    <th scope="col"><a href="contact.php"><img src="img/logo.png" style="opacity: 0.4;" width="40%"></a></th>
  </tr>
</table>

  </div>


<div class="content">




<p><br />
  </p>
   <div class="titre"></div>
   <p><br />

   <div class="titre"><span class="Titre_partie"></span></div>
   <p>&nbsp;</p>
   <div class="titre">
      <p align="center" style="font-size:2.5em; color:#F9DF14;">Internet eXchange Point<br />
     </p>

     <p align="center">Contact<br />
     </p>
    
      <p><em class="sous_titre"></em><br />
 </p>

<p style="text-align:center;"><br /><br /><a href="mailto:contact@ipx-lab.com"><span class="lienipx">contact[at]ipx-lab[dot]com</a></p>

				</div>
                
  

  <div class="content">
  	
    <span style="text-align:center;">
    
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>
<form action="contact/send_form.php" method="post">
  <div class="row">
<div class="col-md-6">
  <div class="form-group">
  <label for="inputname"><p style="color:#CCC; font-size:1em; text-align:left;">Votre nom</p></label>
  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-6">
  <div class="form-group">
  <label for="inputemail"><p style="color:#CCC; font-size:1em; text-align:left;">Votre email</p></label>
  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-12">
  <div class="form-group">
  <label for="inputmessage"><p style="color:#CCC; font-size:1em; text-align:left;">Votre message</p></label>
  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
  </div><!--/*.form-group-->
  </div><!--/*.col-md-12-->


<div class="col-md-12">
  <button type='submit' class='btn btn-primary'>Envoyer</button>
  </div><!--/*.col-md-12-->
</div><!--/*.row-->
  </form>
  
  </span>
  
                 




   <p>&nbsp;<br /><br /><br /><br /><br /></p>
 <table width="100%" border="0">
     <tr>
       <td><span class="titre"><span class="Titre_partie"><a class="Bouton_Modules" href="ecole.php">&nbsp;école&nbsp;</a></span></span></td>
       <td><span class="titre"><span class="Titre_partie"><a class="Bouton_Modules"  href="logiciel.php">logiciel</a></span></span></td>
       <td><span class="titre"><span class="Titre_partie"><a class="Bouton_Modules"  href="edition.php">édition</a></span></span></td>
      </tr>
   </table>
   <p>&nbsp;</p>
   <div class="titre"></div>
   <p><br />
 </p>
</div>


<!-------------------------------------------------------->


  <!--PARTIE II - EXPERIENCES -->
  
  
  
  
  <div class="sidebar2"></div>
 
  
  
<!-- end .container --></div>
</body>
</html>

  <?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);

