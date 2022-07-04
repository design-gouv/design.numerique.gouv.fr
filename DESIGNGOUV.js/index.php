 <!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>reveal.js</title>

		<!-- <link restylesheet" href="dist/reset.css"> -->
		<link rel="stylesheet" href="dist/reveal.css">
		<!-- <link rel="stylesheet" href="dist/theme/white.css"> -->
		<link rel="stylesheet" href="dist/theme/custom.css">

		<!-- Theme used for syntax highlighted code -->
		<!-- <link rel="stylesheet" href="plugin/highlight/monokai.css"> -->
	</head>
	<body>
		<div class="reveal">
			<div class="slides border">

				<header>
					<?php
						include 'header.php' ;
					?>
				</header>

				<!-- <header class="flexRow">
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
				</header> -->

				<section id="slide1"  data-background-color="#FDF5E4" data-markdown>
					<textarea data-template >
						## L'accessibilité numérique
						## pour les designers
					</textarea>
				</section>

				<section id="slide2" data-background-color="#FDDFDA" data-markdown>
					<textarea data-template>
						## « Rendre tous les services
						## publics réalisables en ligne »
						*– Marine Boudeau, 2017*
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

		<script src="dist/reveal.js"></script>
		<script src="plugin/notes/notes.js"></script>
		<script src="plugin/markdown/markdown.js"></script>
		<script src="plugin/highlight/highlight.js"></script>
		<script>
			// More info about initialization & config:
			// - https://revealjs.com/initialization/
			// - https://revealjs.com/config/
			Reveal.initialize({
				hash: true,

				// Learn about plugins: https://revealjs.com/plugins/
				plugins: [ RevealMarkdown, RevealHighlight, RevealNotes ]
			});
		</script>
	</body>
</html>
