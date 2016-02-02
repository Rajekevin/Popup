<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		
		
		<title>COOPTEA Pop up</title>
				
		<meta name="author" content="Rajekevin" />
		<link rel="shortcut icon" href="../favicon.ico">
		<!--CSS file -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		<!--Include Animatecss.html -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">

		<!--Modernizr : JavaScript librairies for test -->
		<script src="js/modernizr.custom.js"></script>		

		<!-- jQuery Librairies -->
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>	

		 <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

		<link href='https://fonts.googleapis.com/css?family=Vollkorn:700' rel='stylesheet' type='text/css'>

        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	</head>



	<body onLoad="init()">
    
		
		<!-- CONTENU DE LA PAGE -->
		<div class="container">
			<div class="content">				

				<h1>ABOUT LEA SOFTWARE</h1>
				<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				
				<button class="popup-button" id="demo01" href="#animatedModal" data-modal="popup">En savoir plus</button>
			</div><!-- .content -->				
		</div><!-- .container -->

		<!-- FIN DU COTENU DE LA PAGE -->



    <!--POP UP-->
    <a id="demo01" class="hidden" href="#animatedModal">DEMO01</a>
<div class="container">
    <div class="row">
    <!--CONTENU DU POP UP-->
    <div id="animatedModal" >
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
       
        <div class="modal-content" id="back">
                  <!--Your modal content goes here-->



            <div class="col-lg-12 text-center">
                    <H1 class"title">WELCOME</h1> 
                    <p class="content title"></p><br/>                     
                    <img class="img-circle" height="300px"src="img/perspective.png" />
                
            <div class="col-md-6 popup-content">
                <h3>I am LEA <br/> the  <b>most powerful</b> <br/>software</h3>
                <br/><br/><br/>
                <h3>I am fully <b>customizable</b></h3><br/><br/><br/>

               <h3> I deliver <b>immediate results</b></h3><br/>
                    
                 
                 
             
                   

                 <br/>
                
            </div> 

                <div class="input-group input-group-lg col-md-6 centred">
                    <br/>
                    
                    <input type="text" class="mail" placeholder="Adresse email" />   
                </div>
                    
                <br/>

                 <div class="input-group input-group-lg col-md-6 centred ">
                    <input type="submit" class="submit" value="I am interested" />
                 </div>
                    
                    <div class="close-animatedModal close_popup"></div>
             </div><!-- .col-lg-12 -->
        </div><!-- .modal-content-->
    </div><!-- .animatedModal -->
</div>
</div>

    <!-- FIN DU CONTENU DU POP UP -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/animatedModal.min.js"></script>

		

		<!-- Le script qui fait appel au pop up -->
		<script src="js/popup.js"></script>

	
	</body>
</html>