<template>
	<Presentation>
			<div class="reveal">
				<div class="slides border">

					<header class="flexRow">
						<div class="flexColumn marginR">
							<img src="" alt="">
							<p>RÉPUBLIQUE FRANÇAISE</p>
							<span><i>Liberté</i></span>
							<span><i>Égalité</i></span>
							<span><i>Fraternité</i></span>
						</div>
						<div class="flexColumn">
							<h1>DesignGouv</h1>
							<p>Par le pôle design des services numerique</p>
						</div>
					</header>

					<section id="slide1" data-background-color="#FDF5E4" data-markdown>
						<textarea data-template>
							## L'accessibilité numérique
							## pour les designers
						</textarea>
					</section>

					<section id="slide2" data-background-color="#FDDFDA" data-markdown>
						<textarea data-template>
							## « Rendre tous les services
							## publics réalisables en ligne »
							* - Marine Boudeau, 2017*
						</textarea>
					</section>

					<section id="slide3" data-markdown>
						<textarea data-template>
							## Qui sommes nous ?
							<img data-src="static/assets/images/benoit.png">
							
							Benoît Dequick
							
							Expert Accessibilité
							
							<img data-src="static/assets/images/ugo.png">
							![image2(static/assets/images/ugo.png)]

							Ugo Dessertine

							Lead Designer
						</textarea>
					</section>
				</div>
			</div>
	</Presentation>
</template>

<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');
	
		* {
			font-family: 'Roboto', sans-serif;
		}
	
		h1 {
			color: black;
			font-weight: 1100;
			text-shadow: 9px 2px 2px #FDEFAD;
			margin: 0;
			padding: 0;
		}
	
		h2 {
			font-size: 60px;
		}
	
		img {
			height: 10%;
			width: 10%;
		}
	
		#header {
			position: relative;
			top: 0;
			display: flex;
			background-color: #fff;
			width: 100%;
		}
	
		#slide1 {
			display: flex;
			flex-direction: column;
		}
	
		#slide3 {
			display: flex;
			flex-direction: column;
		}
	
		.self {
			align-self: flex-start;
		}
	
		#slogan {
			display: flex;
			flex-direction: column;
			text-align: left;
		}
	
		.borderB {
			border-bottom: 1px solid;
		}
	
		#main {
			position: relative;
			top: 200px;
		}
	
		.flexRow {
			display: flex;
		}
	
		.marginL30 {
			margin-left: 30px;
		}
	
		.lightBlack {
			color: #3A3A3A;
		}
	
		.photo {
			height: 50%;
			width: 50%;
		}
	
		.white {
			background-color: #fff;
			border-bottom: 2px solid blue;
		}
</style>

