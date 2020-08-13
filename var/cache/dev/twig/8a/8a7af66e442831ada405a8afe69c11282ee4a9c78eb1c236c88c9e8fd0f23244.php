<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ClientNonSalarie/formulaire.html.twig */
class __TwigTemplate_cd7351524fdd24a80ad20a5c1a52f055f3714a02350b9f246b9a02903e073459 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientNonSalarie/formulaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientNonSalarie/formulaire.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Ouverture Compte Bancaire</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/script_index.css"), "html", null, true);
        echo "\" />
</head>

<body>
    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>

    <div class=\"choix_client\">

        <p>Cliquez sur Nouveau client pour enregistrer un compte pour un nouveau client</p>
        <p>Cliquez sur Client existant pour enregistrer un compte pour un client qui existe déjà</p>
        <div id=\"select_client\">
            <button id=\"nouveau_client\" name=\"nouveau_client\" onclick=\"affiche_nouveau_client()\">Nouveau Client</button>
            <!--<label for=\"nouveau_client\"></label><br>-->
            <button id=\"client_existant\" name=\"client_existant\" onclick=\"affiche_client_existant()\">Client Existant</button>
            <!--<label for=\"client_existant\"></label><br>-->
        </div>
        <form id=\"saisie_id_client\" action=\"{\$url_base}RechercheClientNonSalarie/rechercheClient\" method=\"POST\">
            <input type=\"search\" id=\"identifiant_client\" name=\"identifiant_client\" placeholder=\"identifiant client\" />
            <input type=\"submit\" name=\"search\" id=\"search\" value=\"Search\" />
        </form>
    </div>

    ";
        // line 38
        echo "
    ";
        // line 134
        echo "


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ClientNonSalarie/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 134,  83 => 38,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Ouverture Compte Bancaire</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/script_index.css')}}\" />
</head>

<body>
    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>

    <div class=\"choix_client\">

        <p>Cliquez sur Nouveau client pour enregistrer un compte pour un nouveau client</p>
        <p>Cliquez sur Client existant pour enregistrer un compte pour un client qui existe déjà</p>
        <div id=\"select_client\">
            <button id=\"nouveau_client\" name=\"nouveau_client\" onclick=\"affiche_nouveau_client()\">Nouveau Client</button>
            <!--<label for=\"nouveau_client\"></label><br>-->
            <button id=\"client_existant\" name=\"client_existant\" onclick=\"affiche_client_existant()\">Client Existant</button>
            <!--<label for=\"client_existant\"></label><br>-->
        </div>
        <form id=\"saisie_id_client\" action=\"{\$url_base}RechercheClientNonSalarie/rechercheClient\" method=\"POST\">
            <input type=\"search\" id=\"identifiant_client\" name=\"identifiant_client\" placeholder=\"identifiant client\" />
            <input type=\"submit\" name=\"search\" id=\"search\" value=\"Search\" />
        </form>
    </div>

    {# {if isset(\$clientIntrouvable) }
    <div class=\"alert alert-danger\" style=\"width: 30%; margin: auto; text-align: center;\">
        {\$clientIntrouvable}
    </div>
    {/if} #}

    {# <form id=\"form_compte_non_salarie\" action=\"{\$url_base}ClientNonSalarie/insertClientNonSalarie\" method=\"post\" onsubmit=\"return verifie_formulaire_non_salarie(this)\">

        <h2>VEILLEZ SAISIR LES INFORMATIONS DU CLIENT</h2>
        <p><i>Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
        <fieldset>
            <legend>Informations du Client</legend>
            <div>
                <label for=\"nom\">Nom <em>*</em></label>
                <input type=\"text\" id=\"nom\" name=\"nom\" placeholder=\"ex : DIOP\" onblur=\"verifie_nom(this)\" />
            </div>
            <div>
                <label for=\"prenom\">Prénom <em>*</em></label>
                <input type=\"text\" id=\"prenom\" name=\"prenom\" placeholder=\"ex : Mor\" onblur=\"verifie_prenom(this)\" />
            </div>
            <div>
                <label for=\"adresse\">Adresse <em>*</em></label>
                <input type=\"text\" id=\"adresse\" name=\"adresse\" placeholder=\"ex : Grand Yoff\" onblur=\"verifie_adresse(this)\" />
            </div>
            <div>
                <label for=\"telephone\">Tel <em>*</em></label>
                <input type=\"tel\" id=\"telephone\" name=\"telephone\" placeholder=\"ex : +2217xxxxxxxx \" onblur=\"verifie_telephone(this)\" />
            </div>
            <div>
                <label for=\"email\">E-mail </label>
                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ex : prenom.nom@simplon.co\" onblur=\"verifie_email(this)\" />
            </div>
            <div>
                <label for=\"carte_identite\">CNI </label>
                <input type=\"text\" id=\"carte_identite\" name=\"carte_identite\" placeholder=\"1234567891234\" />
            </div>
            <div>
                <label for=\"type_client\">Type client </label>
                <input type=\"text\" id=\"type_client\" name=\"type_client\" value=\"Non Salarie\" readonly />
            </div>
            <div>
                <label for=\"id_responsable_compte\">Id responsable compte </label>
                <input type=\"text\" id=\"id_responsable_compte\" name=\"id_responsable_compte\" value=\"1\" readonly />
            </div>

        </fieldset>

        <fieldset>
            <legend>Informations Compte</legend>
            <label class=\"selection_type_compte\">Sélectionnez le type de compte <em>*</em></label>
            <select id=\"type_compte\" name=\"type_compte\">
\t\t\t\t\t<option value=\"non selection\">Type de compte</option>
\t\t\t\t\t<option value=\"compte epargne\">Compte Epargne</option>
\t\t\t\t\t<option id=\"compte_bloque\" value=\"compte bloque\" onselect=\"verification_duree_blocage(this)\">Compte Bloqué</option>
\t\t\t\t\t</select>
            <span id=\"erreur_selection\"></span>
            <br/><br/>

            <div>
                <label for=\"numero_agence\">N° de l'agence <em></em></label>
                <input type=\"text\" id=\"numero_agence\" name=\"numero_agence\" placeholder=\"saisir le N° de l'agence\" />
            </div>
            <div>
                <label for=\"numero_compte\">N° Compte <em></em></label>
                <input type=\"text\" id=\"numero_compte\" name=\"numero_compte\" placeholder=\"saisir le N° de Compte\" />
            </div>
            <div>
                <label for=\"cle_rib\">Clé RIB <em></em></label>
                <input type=\"text\" id=\"cle_rib\" name=\"cle_rib\" placeholder=\"saisir la clé RIB\" />
            </div>
            <div>
                <label for=\"solde\">Solde (optionnel)<em></em></label>
                <input type=\"text\" id=\"solde\" name=\"solde\" />
            </div>

            <div id=\"frais_ouverture_compte\">
                <label for=\"frais_ouverture\">Frais ouverture <em></em></label>
                <input type=\"text\" id=\"frais_ouverture\" name=\"frais_ouverture\" value=\"10000\" />
            </div>
            <div id=\"montant_remuneration_compte\">
                <label for=\"montant_remuneration\">Montant Rémuneration <em></em></label>
                <input type=\"text\" id=\"montant_remuneration\" name=\"montant_remuneration\" />
            </div>
            <div id=\"agios_compte\">
                <label for=\"agios\">Agios <em></em></label>
                <input type=\"text\" id=\"agios\" name=\"agios\" placeholder=\"saisir l'agios\" />
            </div>
            <div id=\"duree_blocage_compte\">
                <label for=\"duree_blocage\">Durée Blocage <em></em></label>
                <input type=\"text\" name=\"duree_blocage\" id=\"duree_blocage\" /><span id=\"mois\"> mois </span><span id=\"erreur_duree\"></span>
            </div>
        </fieldset>

        <div class=\"validation\">
            <input type=\"submit\" value=\"Valider\" id=\"valider\" />
            <input type=\"reset\" value=\"Annuler\" />
        </div>

    </form>

    <script type=\"text/javascript\" src=\"{{ asset('js/script_index.js')}}\"></script> #}



</body>

</html>", "ClientNonSalarie/formulaire.html.twig", "/opt/lampp/htdocs/mesprojets/banquepeupleSymfony/templates/ClientNonSalarie/formulaire.html.twig");
    }
}
