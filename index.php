<?php
include 'header.php';
?>

<div id="wrapper" style="background-color: #BFC2C2">
        
        <img name="diapo" width="1250" height="700">
        <script>
            var images =[];
            images[0]="public/images/merco1.jpg";
            images[1]="public/images/merco4.png";
            images[2]="public/images/merco2.jpg";
            images[3]="public/images/merco5.jpg";
            images[4]="public/images/merco3.jpg";
            images[5]="public/images/merco6.jpg";
            var i=0;
            var timer=3000;
            function changerimage(){
                document.diapo.src=images[i];
                if(i<images.length-1){
                    i++;
                }else{
                    i=0;
                }
                setTimeout("changerimage()",timer); 
            }
            window.onload=changerimage;
        </script>

        <div class="section bgcolor noover text-center" style="background-color: #BFC2C2">
            <div class="container">
                <div class="row" >
                	<div class="col-md-4 cont" style="background-color: #9B9E9E; border: 3px solid black">
                        <div class="tagline-message">
                        	<h1 style="color: black">Qui sommes-nous</h1>
                        </div>
                    </div>
                    <div class="col-md-12  div1">
                        <div class="tagline-message">
                        	<h3 style="color: black"><mark class="rotate" style="color: black">Top_Garage existe depuis plus de 40 ans dans le centre-ville du Mesnil-Aubry. Notre atelier mécanique prend en charge les réparations toutes marques,</mark> la vente de pièces détachées, tous les travaux de carrosserie et de peinture ainsi que l'entretien de véhicules.
                        	<h3 style="color: black"><mark class="rotate" style="color: black"> Un service dépannage-remorquage est assuré sur l'ensemble de l'Île-de-France. Spécialisés dans la vente de véhicules d'occasion toutes marques, nous proposons des utilitaires, véhicules de tourisme, etc.</mark> Pour cela, nous vous proposons des solutions de financement et des extensions de garantie. Contactez-nous sans attendre !</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
   
                <div class="section-title text-center">
               		<div class="section bgcolor noover" style="background-color: #BFC2C2">
                		<div class="container">
                			<div class="row cont1" >
                				<div class="col-md-4 cont" style="background-color: #9B9E9E; border: 3px solid black">
                        			<div class="tagline-message">
                        				<h1 style="color: black">Nos Voitures</h1>
                        			</div>
                    			</div>
			                    <h3>Chez Top_Garage nous mettons en vente plusieurs modeles de voitures, plus précisement des Mercedes, Toyota et Audi</h3>
                    			<div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    				<div class="item">
                        				<img src="public/images/merco1.jpg" alt="" class="img-responsive" style="width: 500px; ;height: 300px">
                    				</div>

				                    <div class="item">
				                        <img src="public/images/merco4.png" alt="" class="img-responsive" style="width: 500px; ;height: 300px">
				                    </div>

				                    <div class="item">
				                        <img src="public/images/merco2.jpg" alt="" class="img-responsive" style="width: 500px; ;height: 300px">
				                    </div>

				                    <div class="item">
				                        <img src="public/images/merco5.jpg" alt="" class="img-responsive" style="width: 500px; ;height: 300px">
				                    </div>

				                    <div class="item">
				                        <img src="public/images/merco3.jpg" alt="" class="img-responsive" style="width: 500px; ;height: 300px">
				                    </div>

				                    <div class="item">
				                        <img src="public/images/merco6.jpg" alt="" class="img-responsive" style="width: 500px; ;height: 300px">
				                    </div>
                				</div>
                			</div>
            			</div>
            		</div>
                </div>

                <div class="section-title text-center">
               		<div class="section bgcolor noover" style="background-color: #BFC2C2">
                		<div class="container">
                			<div class="row cont1" >
                				<div class="col-md-4 cont" style="background-color: #9B9E9E; border: 3px solid black">
                        			<div class="tagline-message">
                        				<h1 style="color: black">Nous contactez</h1>
                        			</div>
                    			</div>
			                    
			                    <div class="container">
                					<div class="row">
                						<div class="col-md-5 cont4" style="background-color: none; width: 1000px; height: 460px; border-radius: 50px; border: 2px solid red; margin-left: 100px">
                							<h1 style="color: black">Numero</h1>
                							<h1 style="color: black">Top_Garage</h1>
                							<h1 style="color: black">2 Av. des Martinets</h1>
                							<h1 style="color: black">95720 Mesnil Aubry (Le)</h1>
                							<h1 style="color: black">Lun-Ven: 08:30-12:30, 14:00-18:30</h1>
                							<h1 style="color: black">Sam: 08:30-12:30</h1>
                							<h1 style="color: black">mail</h1>
                						</div>
                					</div>
            					</div>

                			</div>
            			</div>
            		</div>
                </div>

                <div class="section bgcolor noover text-center" style="background-color: black">
            <div class="container">
                <div class="row" >
                	<div class="col-md-4 cont" style="background-color: #9B9E9E; border: 3px solid black">
                        <div class="tagline-message">
                        	<h1 style="color: black">Notre localisation</h1>
                        </div>
                    </div>
                    <div class="col-md-12  div1">
                        <div class="tagline-message">
                        	<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.7819425469625!2d-17.473089985846382!3d14.724916777967215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172ac557c2b73%3A0xc99db1348937cb78!2sShowroom%20Hyundai!5e0!3m2!1sfr!2ssn!4v1587532290068!5m2!1sfr!2ssn" width="900" height="350" frameborder="0" style="border:2px solid black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div>

        
<?php
include 'footer.php';
?>
		
