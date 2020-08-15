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

/* ClientMoral/liste.html.twig */
class __TwigTemplate_24edce28b8d115997fcfb7be0a8d40bdc3779148f7f009dd508853b828a1a15e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientMoral/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClientMoral/liste.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Ouverture Compte Bancaire</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/script_index.css"), "html", null, true);
        echo "\" />
</head>

<body>
    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>

    <div class=\"choix_client\">

        <p>Cliquez sur <strong>Nouveau Client</strong> pour enregistrer un compte pour un nouveau client</p>
        <p>Cliquez sur <strong>Client Existant</strong> pour enregistrer un compte pour un client qui existe déjà</p>
        <p>Cliquez sur <strong>Liste Clients</strong> pour afficher la liste de tous les clients salariés</p>
        <div id=\"select_client\">
            <button id=\"nouveau_client\" name=\"nouveau_client\" onclick=\"affiche_nouveau_client_moral()\">Nouveau Client</button>
            <button id=\"client_existant\" name=\"client_existant\" onclick=\"affiche_client_existant_moral()\">Client Existant</button>
            <button id=\"affiche_liste_client_moral\" name=\"affiche_liste_client_moral\" onclick=\"affiche_liste_client_moral()\">Liste Clients</button>
        </div>
        <form id=\"saisie_id_client\" action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche_client_moral");
        echo "\" method=\"POST\">
            <input type=\"search\" id=\"identifiant_client\" name=\"identifiant_client\" placeholder=\"identifiant client\" />
            <input type=\"submit\" name=\"search\" id=\"search\" value=\"Search\" />
        </form>
    </div>
    <br />
   
    <div  id=\"liste_client_moral\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-1\"></div>
            <div class=\"card col-md-10\">
                <div class=\"card-header text-center font-weight-bold\">Liste Clients Moraux</div>
                <div class=card-body>
                    <table class=\"table table-srtiped text-center\">
                        <tr>
                            <th>Id Entreprise</th>
                            <th>Nom Entreprise</th>
                            <th>Identifiant Entreprise</th>
                            <th>Raison Social</th>
                        </tr>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientMoral"]) || array_key_exists("clientMoral", $context) ? $context["clientMoral"] : (function () { throw new RuntimeError('Variable "clientMoral" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 49
            echo "                            <tr>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nomEntreprise", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "identifiantEntreprise", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "raisonSocial", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </table>
                </div>
            </div>
        </div>
    </div>


    <form id=\"form_compte_entreprise\" action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_client_moral");
        echo "\" method=\"post\" onsubmit=\"return verifie_formulaire_entreprise(this)\">

        <h2>VEILLEZ SAISIR LES INFORMATIONS DU CLIENT</h2>
        <p><i>Complétez le formulaire. Les champs marqué par <em>*</em> sont <em>obligatoires</em></i></p>

        <fieldset>
            <legend>Informations du Client</legend>
            <div>
                <label for=\"nom_entreprise\">Nom Entreprise <em>*</em></label>
                <input type=\"text\" id=\"nom_entreprise\" name=\"nom_entreprise\" placeholder=\"saisir le nom de l'entreprise\" onblur=\"verifie_nom_entreprise(this)\" />
            </div>
            <div>
                <label for=\"raison_social\">Raison Social <em>*</em></label>
                <input type=\"text\" id=\"raison_social\" name=\"raison_social\" placeholder=\"saisir le nom de l'entreprise\" onblur=\"verifie_nom_entreprise(this)\" />
            </div>
            <div>
                <label for=\"adresse\">Adresse Entreprise <em>*</em></label>
                <input type=\"text\" id=\"adresse\" name=\"adresse\" placeholder=\"saisir l'adresse de l'entreprise\" onblur=\"verifie_adresse_entreprise(this)\" />
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
                <label for=\"identifiant_entreprise\">Identifiant Entreprise <em>*</em></label>
                <input type=\"text\" id=\"identifiant_entreprise\" name=\"identifiant_entreprise\" placeholder=\"saisir l'identifiant de l'entreprise\" onblur=\"verifie_identifiant_entreprise(this)\" />
            </div>
            <div>
                <label for=\"type_client\">Type client </label>
                <input type=\"text\" id=\"type_client\" name=\"type_client\" value=\"Client Moral\" readonly />
            </div>
        </fieldset>

        <fieldset>
            <legend>Informations Compte</legend>
            <label class=\"selection_type_compte\">Sélectionnez le type de compte <em>*</em></label>
            <select id=\"type_compte\" name=\"type_compte\">
\t\t\t\t<option>Type de compte</option>
\t\t\t\t<option value=\"compte epargne\">Compte Epargne</option>
\t\t\t\t<option value=\"compte courant\">Compte Courant</option>
\t\t\t\t<option id=\"compte_bloque\" value=\"compte bloque\" onselect=\"verification_duree_blocage(this)\">Compte Bloqué</option>
\t\t\t\t</select>
            <span id=\"erreur_selection\"></span>
            <br/><br/>

            <div>
                <label for=\"numero_agence\">N° de l'agence <em>*</em></label>
                <input type=\"text\" id=\"numero_agence\" name=\"numero_agence\" placeholder=\"saisir le N° de l'agence\" />
            </div>
            <div>
                <label for=\"numero_compte\">N° Compte <em>*</em></label>
                <input type=\"text\" id=\"numero_compte\" name=\"numero_compte\" placeholder=\"saisir le N° de Compte\" />
            </div>
            <div>
                <label for=\"cle_rib\">Clé RIB <em>*</em></label>
                <input type=\"text\" id=\"cle_rib\" name=\"cle_rib\" placeholder=\"saisir la clé RIB\" />
            </div>
            <div>
                <label for=\"solde\">Solde (optionnel)<em></em></label>
                <input type=\"text\" id=\"solde\" name=\"solde\" />
            </div>
            <div id=\"frais_ouverture_compte\">
                <label for=\"frais_ouverture\">Frais ouverture <em>*</em></label>
                <input type=\"text\" id=\"frais_ouverture\" name=\"frais_ouverture\" value=\"20000\" />
            </div>
            <div id=\"montant_remuneration_compte\">
                <label for=\"montant_remuneration\">Montant Rémuneration <em></em></label>
                <input type=\"text\" id=\"montant_remuneration\" name=\"montant_remuneration\" />
            </div>
            <div id=\"agios_compte\">
                <label for=\"agios\">Agios <em>*</em></label>
                <input type=\"text\" id=\"agios\" name=\"agios\" placeholder=\"saisir l'agios\" />
            </div>
            <div id=\"duree_blocage_compte\">
                <label for=\"duree_blocage\">Durée Blocage <em>*</em></label>
                <input type=\"text\" name=\"duree_blocage\" id=\"duree_blocage\" /><span id=\"mois\"> mois </span><span id=\"erreur_duree\"></span>
            </div>
        </fieldset>

        <div class=\"validation\">
            <input type=\"submit\" value=\"Valider\" id=\"valider\" />
            <input type=\"reset\" value=\"Annuler\" />
        </div>

    </form>

    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script_index.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ClientMoral/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 153,  136 => 63,  127 => 56,  118 => 53,  114 => 52,  110 => 51,  106 => 50,  103 => 49,  99 => 48,  76 => 28,  55 => 10,  52 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Ouverture Compte Bancaire</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {# <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\" /> #}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/script_index.css')}}\" />
</head>

<body>
    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>

    <div class=\"choix_client\">

        <p>Cliquez sur <strong>Nouveau Client</strong> pour enregistrer un compte pour un nouveau client</p>
        <p>Cliquez sur <strong>Client Existant</strong> pour enregistrer un compte pour un client qui existe déjà</p>
        <p>Cliquez sur <strong>Liste Clients</strong> pour afficher la liste de tous les clients salariés</p>
        <div id=\"select_client\">
            <button id=\"nouveau_client\" name=\"nouveau_client\" onclick=\"affiche_nouveau_client_moral()\">Nouveau Client</button>
            <button id=\"client_existant\" name=\"client_existant\" onclick=\"affiche_client_existant_moral()\">Client Existant</button>
            <button id=\"affiche_liste_client_moral\" name=\"affiche_liste_client_moral\" onclick=\"affiche_liste_client_moral()\">Liste Clients</button>
        </div>
        <form id=\"saisie_id_client\" action=\"{{ path('recherche_client_moral')}}\" method=\"POST\">
            <input type=\"search\" id=\"identifiant_client\" name=\"identifiant_client\" placeholder=\"identifiant client\" />
            <input type=\"submit\" name=\"search\" id=\"search\" value=\"Search\" />
        </form>
    </div>
    <br />
   
    <div  id=\"liste_client_moral\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-1\"></div>
            <div class=\"card col-md-10\">
                <div class=\"card-header text-center font-weight-bold\">Liste Clients Moraux</div>
                <div class=card-body>
                    <table class=\"table table-srtiped text-center\">
                        <tr>
                            <th>Id Entreprise</th>
                            <th>Nom Entreprise</th>
                            <th>Identifiant Entreprise</th>
                            <th>Raison Social</th>
                        </tr>
                        {% for client in clientMoral %}
                            <tr>
                                <td>{{ client.id }}</td>
                                <td>{{ client.nomEntreprise }}</td>
                                <td>{{ client.identifiantEntreprise }}</td>
                                <td>{{ client.raisonSocial }}</td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            </div>
        </div>
    </div>


    <form id=\"form_compte_entreprise\" action=\"{{ path('add_client_moral')}}\" method=\"post\" onsubmit=\"return verifie_formulaire_entreprise(this)\">

        <h2>VEILLEZ SAISIR LES INFORMATIONS DU CLIENT</h2>
        <p><i>Complétez le formulaire. Les champs marqué par <em>*</em> sont <em>obligatoires</em></i></p>

        <fieldset>
            <legend>Informations du Client</legend>
            <div>
                <label for=\"nom_entreprise\">Nom Entreprise <em>*</em></label>
                <input type=\"text\" id=\"nom_entreprise\" name=\"nom_entreprise\" placeholder=\"saisir le nom de l'entreprise\" onblur=\"verifie_nom_entreprise(this)\" />
            </div>
            <div>
                <label for=\"raison_social\">Raison Social <em>*</em></label>
                <input type=\"text\" id=\"raison_social\" name=\"raison_social\" placeholder=\"saisir le nom de l'entreprise\" onblur=\"verifie_nom_entreprise(this)\" />
            </div>
            <div>
                <label for=\"adresse\">Adresse Entreprise <em>*</em></label>
                <input type=\"text\" id=\"adresse\" name=\"adresse\" placeholder=\"saisir l'adresse de l'entreprise\" onblur=\"verifie_adresse_entreprise(this)\" />
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
                <label for=\"identifiant_entreprise\">Identifiant Entreprise <em>*</em></label>
                <input type=\"text\" id=\"identifiant_entreprise\" name=\"identifiant_entreprise\" placeholder=\"saisir l'identifiant de l'entreprise\" onblur=\"verifie_identifiant_entreprise(this)\" />
            </div>
            <div>
                <label for=\"type_client\">Type client </label>
                <input type=\"text\" id=\"type_client\" name=\"type_client\" value=\"Client Moral\" readonly />
            </div>
        </fieldset>

        <fieldset>
            <legend>Informations Compte</legend>
            <label class=\"selection_type_compte\">Sélectionnez le type de compte <em>*</em></label>
            <select id=\"type_compte\" name=\"type_compte\">
\t\t\t\t<option>Type de compte</option>
\t\t\t\t<option value=\"compte epargne\">Compte Epargne</option>
\t\t\t\t<option value=\"compte courant\">Compte Courant</option>
\t\t\t\t<option id=\"compte_bloque\" value=\"compte bloque\" onselect=\"verification_duree_blocage(this)\">Compte Bloqué</option>
\t\t\t\t</select>
            <span id=\"erreur_selection\"></span>
            <br/><br/>

            <div>
                <label for=\"numero_agence\">N° de l'agence <em>*</em></label>
                <input type=\"text\" id=\"numero_agence\" name=\"numero_agence\" placeholder=\"saisir le N° de l'agence\" />
            </div>
            <div>
                <label for=\"numero_compte\">N° Compte <em>*</em></label>
                <input type=\"text\" id=\"numero_compte\" name=\"numero_compte\" placeholder=\"saisir le N° de Compte\" />
            </div>
            <div>
                <label for=\"cle_rib\">Clé RIB <em>*</em></label>
                <input type=\"text\" id=\"cle_rib\" name=\"cle_rib\" placeholder=\"saisir la clé RIB\" />
            </div>
            <div>
                <label for=\"solde\">Solde (optionnel)<em></em></label>
                <input type=\"text\" id=\"solde\" name=\"solde\" />
            </div>
            <div id=\"frais_ouverture_compte\">
                <label for=\"frais_ouverture\">Frais ouverture <em>*</em></label>
                <input type=\"text\" id=\"frais_ouverture\" name=\"frais_ouverture\" value=\"20000\" />
            </div>
            <div id=\"montant_remuneration_compte\">
                <label for=\"montant_remuneration\">Montant Rémuneration <em></em></label>
                <input type=\"text\" id=\"montant_remuneration\" name=\"montant_remuneration\" />
            </div>
            <div id=\"agios_compte\">
                <label for=\"agios\">Agios <em>*</em></label>
                <input type=\"text\" id=\"agios\" name=\"agios\" placeholder=\"saisir l'agios\" />
            </div>
            <div id=\"duree_blocage_compte\">
                <label for=\"duree_blocage\">Durée Blocage <em>*</em></label>
                <input type=\"text\" name=\"duree_blocage\" id=\"duree_blocage\" /><span id=\"mois\"> mois </span><span id=\"erreur_duree\"></span>
            </div>
        </fieldset>

        <div class=\"validation\">
            <input type=\"submit\" value=\"Valider\" id=\"valider\" />
            <input type=\"reset\" value=\"Annuler\" />
        </div>

    </form>

    <script type=\"text/javascript\" src=\"{{ asset('js/script_index.js')}}\"></script>
</body>

</html>", "ClientMoral/liste.html.twig", "/opt/lampp/htdocs/mesprojets/banquepeupleSymfony/templates/ClientMoral/liste.html.twig");
    }
}
