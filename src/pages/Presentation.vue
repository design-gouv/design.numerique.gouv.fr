<template>
	<Layout>
		<div class="reveal">
			<div class="slides">

				<section id="slide1" data-background-color="rgb(250, 240, 236)">
					<div id="header" class="borderB">
						<img class="marginL30" src="/images/republiqueFrancaise.png" alt="logo République Française">
						<div id="slogan">
							<h4>DesignGouv</h4>
							<small>Par le Pôle design des services numériques</small>
						</div>
					</div>
					<div id="main">
						<h2 class="lightBlack">L'accessibilité numérique <br> pour les designer</h2>
					</div>
				</section>

				<section data-background-color="#FDDFDA">
					<div class="white">
						<br>
						<h3>« Rendre tous les services <br> publics réalisables en ligne »</h3>
						<br>
					</div>
					<br>
					<p>- Marine Boudeau, 2017</p>
				</section>

				<section id="slide3">
					<h2 class="self">Qui somme-nous ?</h2>
					<div class="flexRow">
						<img class="photo" src="/images/photo1.png" alt="photo">
						<img class="photo" src="/images/photo2.png" alt="photo">
					</div>
				</section>

			</div>
		</div>
		
	</Layout>
</template>

<!-- SCRIPT REVEAL ET CSS  -->
<link rel="stylesheet" href="/static/assets/css/reveal.css"></link>
<link rel="stylesheet" href="/static/assets/css/custom.css"></link>
<!-- <script src="dist/reveal.js"></script> -->
<!-- <script src="/static/assets/js/reveal.js"></script> -->
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
<!-- SCRIPT REVEAL ET CSS  -->


<!-- <script>
export default {
  metaInfo: {
    title: "Les outils de design de l’accessibilité",
    meta: [
      {
        name: "description",
        content:
          "Découvrez les outils pour designer et développer des services numériques accessibles et conformes au RGAA.",
      },
      {
        property: "og:title",
        content: "Les outils de design de l’accessibilité - DesignGouv",
      },
      {
        property: "og:description",
        content:
          "Découvrez les outils pour designer et développer des services numériques accessibles et conformes au RGAA.",
      },
      {
        property: "og:image",
        content:
          "https://design.numerique.gouv.fr/assets/meta-images/designgouv.png",
      },
    ],
  },
};
</script> -->
