<template>
  <Layout>
    <div class="dg-content fr-px-2w">

      <div class="dg-cover dg-cover--linear fr-mb-4w">
        <div class="dg-cover__container fr-mb-1w">
          <nav aria-label="Breadcrumb" class="fr-breadcrumb">
            <ol class="fr-breadcrumb__list">
              <li>
                <g-link to="/" class="fr-breadcrumb__link">Accueil</g-link>
              </li>
              <li>
                <g-link to="/recrutement/" class="fr-breadcrumb__link">Design</g-link>
              </li>
              <li>
                <span aria-current="page">Recensement des designers de l'État</span>
              </li>
            </ol>
          </nav>

          <h1>Recensement des designers de l'État</h1>
          <p class="fr-text--lead">
            Afin de mieux connaître l’intégration du design au sein de l’État, nous effectuons un recensement des designers et designeuses travaillant en administration centrale. Merci beaucoup pour votre participation !
          </p>
        </div>
      </div>

      <div class="dg-content dg-content--xs fr-mt-6w">

        <div class="fr-accordion fr-mb-4w">
          <p class="fr-accordion__title">
            <button class="fr-accordion__btn" aria-expanded="false" aria-controls="accordion-106">Pourquoi un recesement des designers et designeuses de l’État ?</button>
          </p>
          <div class="fr-collapse" id="accordion-106">
            <ul>
              <li class="fr-mb-2w">Pour mieux connaître l’implantation du design au sein de l’État et améliorer notre travail de promotion du design. Ce recensement est confidentiel, nous ne partagerons aucune de vos informations personnelles. Et si vous donnez votre accord, pour vous consulter dans le cadre de nos missions pour améliorer les outils, dispositifs et accompagnements que nous proposons.</li>
              <li>Dans un second temps, et si vous le désirez, pour poser les bases d’une communauté des designers au sein de l’État : proposer un répertoire, organiser des rencontres, des évènements, etc.</li>
            </ul>
          </div>
        </div>

        <form class="form" v-on:submit.prevent="addCandidate">

          <p class="dg-text-right"><small>Sauf mention contraire, tous les champs sont obligatoires.</small></p>

          <h2 class="fr-h4">Vous</h2>
          <div class="fr-input-group">
            <label class="fr-label" for="prenom">Quel est votre prénom ?</label>
            <input class="fr-input" type="text" id="prenom" v-model="form.firstName" required>
          </div>
          <div class="fr-input-group">
            <label class="fr-label" for="nom">Quel est votre nom ?</label>
            <input class="fr-input" type="text" id="nom" v-model="form.lastName" required>
          </div>
          <div class="fr-input-group">
            <label class="fr-label" for="email">Quelle est votre adresse e-mail ? <span class="fr-hint-text">L’adresse e-mail doit être au format prenom@mail.fr</span></label>
            <input class="fr-input" type="email" id="email" v-model="form.email" required>
          </div>

          <h2 class="fr-mt-8w fr-h4">Votre travail</h2>
          <div class="fr-input-group">
            <label class="fr-label" for="direction">Au sein de quelle direction travaillez-vous ?</label>
            <input class="fr-input" type="text" id="direction" v-model="form.direction" required>
          </div>
          <div class="fr-select-group">
            <label class="fr-label" for="ministry">
              À quel ministère est-elle ratachée ?
            </label>
            <select class="fr-select" id="ministry" name="ministry" v-model="form.ministry" required>
              <option value="" selected disabled hidden>Selectionnez une option</option>
              <option value="1">Première ministre</option>
              <option value="2">Ministère de l'Économie, des Finances et de la Souveraineté industrielle et numérique</option>
              <option value="3">Ministère de l'Intérieur et des Outre-mer</option>
              <option value="4">Ministère de l'Europe et des Affaires étrangères</option>
              <option value="5">Ministère de la Justice</option>
              <option value="6">Ministère des Armées</option>
              <option value="7">Ministère du Travail, du Plein emploi et de l'Insertion</option>
              <option value="8">Ministère de l'Éducation nationale et de la Jeunesse</option>
              <option value="9">Ministère de l'Enseignement supérieur et de la Recherche</option>
              <option value="10">Ministère de l'Agriculture et de la Souveraineté alimentaire</option>
              <option value="11">Ministère de la Transition écologique et de la Cohésion des territoires</option>
              <option value="12">Ministère de la Transition énergétique</option>
              <option value="13">Ministère de la Culture</option>
              <option value="14">Ministère de la Santé et de la Prévention</option>
              <option value="15">Ministère des Solidarités, de l'Autonomie et des personnes handicapées</option>
              <option value="16">Ministère de la Transformation et de la Fonction publiques</option>
              <option value="17">Ministère des Sports et des Jeux olympiques et paralympiques</option>
            </select>
          </div>
          <div class="fr-form-group">
            <fieldset class="fr-fieldset">
              <legend class="fr-fieldset__legend fr-text--regular" id='type-legend'>
                Vous êtes :
              </legend>
              <div class="fr-fieldset__content">
                <div class="fr-radio-group">
                  <input type="radio" id="type-1" name="type" value="Agent" v-model="form.type" required>
                  <label class="fr-label" for="type-1">Agent ou agente publique (fonctionnaire, contractuel ou apprenti)</label>
                </div>
                <div class="fr-radio-group">
                  <input type="radio" id="type-2" name="type" value="Freelance" v-model="form.type" required>
                  <label class="fr-label" for="type-2">Indépendant ou indépendante (freelance)</label>
                </div>
                <div class="fr-radio-group">
                  <input type="radio" id="type-3" name="type" value="Prestataire" v-model="form.type" required>
                  <label class="fr-label" for="type-3">Employé(e) par un prestataire mandaté par cette direction</label>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="fr-form-group">
            <fieldset class="fr-fieldset">
              <legend class="fr-fieldset__legend fr-text--regular" id='team-legend'>
                En tant que designer :
              </legend>
              <div class="fr-fieldset__content">
                <div class="fr-radio-group">
                  <input type="radio" id="team-1" name="team" value="Agent" v-model="form.team" required>
                  <label class="fr-label" for="team-1">Vous êtes le ou la seule designer dans votre équipe</label>
                </div>
                <div class="fr-radio-group">
                  <input type="radio" id="team-2" name="team" value="Freelance" v-model="form.team" required>
                  <label class="fr-label" for="team-2">Vous faîtes partie d'une équipe qui comporte plusieurs designers</label>
                </div>
                <div class="fr-radio-group">
                  <input type="radio" id="team-3" name="team" value="Prestataire" v-model="form.team" required>
                  <label class="fr-label" for="team-3">Vous faîtes partie d'une équipe dédiée au design</label>
                </div>
              </div>
            </fieldset>
          </div>

          <h2 class="fr-mt-8w fr-h4">Pour aller plus loin</h2>
          <div class="fr-form-group">
            <fieldset class="fr-fieldset fr-fieldset--inline">
              <legend class="fr-fieldset__legend fr-text--regular" id='contact-legend'>
                Acceptez-vous d’être recontacté(e), dans le cadre de nos missions, pour vous impliquer à travers des échanges (sondages, ateliers, etc.) visant à améliorer la promotion du design au sein de l’État ?
              </legend>
              <div class="fr-fieldset__content">
                <div class="fr-radio-group">
                  <input type="radio" id="contact-1" name="contact" value="Oui" v-model="form.contact" required>
                  <label class="fr-label" for="contact-1">Oui</label>
                </div>
                <div class="fr-radio-group">
                  <input type="radio" id="contact-2" name="contact" value="Non" v-model="form.contact" required>
                  <label class="fr-label" for="contact-2">Non</label>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="fr-form-group">
            <fieldset class="fr-fieldset">
              <legend class="fr-fieldset__legend fr-text--regular" id='interest-legend'>
                Seriez-vous intéressé par :
              </legend>
              <div class="fr-fieldset__content">
                <div class="fr-checkbox-group">
                  <input type="checkbox" id="interest-1" value="Répertoire" v-model="form.interest1">
                  <label class="fr-label" for="interest-1">La création d’un répertoire (public ou interne) de designers de l'Etat</label>
                </div>
                <div class="fr-checkbox-group">
                  <input type="checkbox" id="interest-2" value="Canal" v-model="form.interest2">
                  <label class="fr-label" for="interest-2">La création d’un canal d’échange interne sur le sujet du design</label>
                </div>
                <div class="fr-checkbox-group">
                  <input type="checkbox" id="interest-3" value="Rencontres" v-model="form.interest3">
                  <label class="fr-label" for="interest-3">L’organisation d’évènements, de rencontres en commun autour du design</label>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="fr-input-group">
              <label class="fr-label" for="expectation">Qu’attenderiez-vous en particulier d'une communauté des designers de l'Etat ?</label>
              <textarea class="fr-input" type="text" id="expectation" v-model="form.expectation" required></textarea>
          </div>
          <div class="fr-input-group">
              <label class="fr-label" for="more">Avez-vous une remarque, question, suggestion à nous transmettre (facultatif) ?</label>
              <textarea class="fr-input" type="text" id="more" v-model="form.more"></textarea>
          </div>

          <p><small>Nous utiliserons les informations recueillies ci-dessus pour alimenter notre répertoire des designers travaillant pour l'Etat et pour vous contacter dans le cadre de nos missions.</small></p>
          <p><small>Conformément à la règlementation, vous disposez d’un droit d’opposition et d’un droit à la limitation du traitement de données vous concernant, ainsi que d’un droit d’accès, de rectification, de portabilité et d’effacement de vos données. Vous pouvez exercer vos droits en nous écrivant à contact@design.numerique.gouv.fr.</small></p>
          <button class="fr-btn" id="submit" type="submit">Envoyer</button>
        </form>
      </div>

    </div>
  </Layout>
</template>


<script>

  export default {
    metaInfo: {
      title: "Partager votre intérêt",
      meta: [{
        name: 'description',
        content: "Experts du numérique : nous pouvons vous aider à intervenir au profit des administrations, dans le cadre de l’amélioration de la qualité de leurs démarches en ligne."
      },
      {
        property: 'og:title',
        content: "Partager votre intérêt - DesignGouv"
      },
      {
        property: 'og:description',
        content: "Experts du numérique : nous pouvons vous aider à intervenir au profit des administrations, dans le cadre de l’amélioration de la qualité de leurs démarches en ligne."
      },
      {
        property: 'og:image',
        content: "https://design.numerique.gouv.fr/assets/meta-images/CUX.png"
      },
      {
        name: "twitter:card",
        content: "summary_large_image"
      },
      {
        name: "twitter:site",
        content: "@Design_Gouv"
      },
      {
        name: "twitter:title",
        content: "Partager votre intérêt - DesignGouv"
      },
      {
        name: "twitter:description",
        content: "Experts du numérique : nous pouvons vous aider à intervenir au profit des administrations, dans le cadre de l’amélioration de la qualité de leurs démarches en ligne."
      },
      {
        name: "twitter:image",
        content: "https://design.numerique.gouv.fr/assets/meta-images/rejoindre-equipde.png"
      }],
    },
    data () {
      return {
        poste: {},
        form: {
          email: '',
          firstName: '',
          lastName: '',
          phone: '',
          city: '',
          skills: [],
          otherSkills: '',
          experience: null,
          profil: '',
          duration: [],
          delay: '',
          cv: '',
          more: '',
          poste: this.$route.query.poste ? [this.$route.query.poste] : [],
        }
      }
    },
    mounted () {
      if (this.$route.query.poste) {
        var Airtable = require('airtable');
        var base = new Airtable({apiKey: process.env.GRIDSOME_AIRTABLE_API_KEY}).base(process.env.GRIDSOME_AIRTABLE_CANDIDATE_BASE);
        base('Postes').find(this.$route.query.poste, (err, record) => {
            if (err) { console.error(err); return; }
            this.poste = record.fields;
        });
      }
    },
    methods: {
      addCandidate() {
        document.getElementById('submit').disabled = true;
        var Airtable = require('airtable');
        var base = new Airtable({apiKey: process.env.GRIDSOME_AIRTABLE_API_KEY}).base(process.env.GRIDSOME_AIRTABLE_CANDIDATE_BASE);
        base('Candidats').create([
        {
          "fields": {
            "fldT89YP3RwfT0yWV": this.form.email,
            "fldW7JMKtx57QTsFH": this.form.firstName,
            "fldcqvHPP4CrPtacu": this.form.lastName,
            "fldVbCpU20kG5YSZj": this.form.phone,
            "fldbKzZw3J9n5rzo5": this.form.city,
            "fldX3Kttyv35vEJBF": this.form.skills,
            "fld8kGoo6LoyRjzEu": this.form.otherSkills,
            "fldOmtisX6heRkfEM": this.form.experience,
            "fldLWDNR8FrMUIy5y": this.form.portfolio,
            "fld5D9U70rnBmW49S": this.form.duration,
            "fldoERWo629yGrf9P": this.form.delay,
            "fld2gbfiiNwFpBXcF": this.form.cv,
            "fldMfXvTB1w5tAY1w": this.form.more,
            "fld4z5zGx5aXMFS1d": this.form.poste,
          }
        },
      ], function(err, records) {
        if (err) {
          window.location.href = "/formulaire/erreur/";
          console.error(err);
          return;
        } else {
          window.location.href = "/formulaire/succes/";
        }
      });
    }
  },
}
</script>
