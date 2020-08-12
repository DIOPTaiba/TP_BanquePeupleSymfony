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

/* login/index.html.twig */
class __TwigTemplate_ce26b3e10041ee633497c7db1be21fc016447816c2fa69edb5f9f7ed478e5103 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 22
        echo " 
 <!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil Employés</title>
    <meta charset=\"utf-8\" />
    ";
        // line 30
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/script_index.css"), "html", null, true);
        echo "\" />


</head>

<body>

    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>

    <h2>VEILLEZ SELECTIONNER VOTRE PROFIL</h2>

    <div class=\"choix_profil\">

        <button id=\"page_authentification_admin\" onclick=\"affiche_authentification_admin()\">Administrateur</button>

        <button id=\"page_authentification_responsable\" onclick=\"affiche_authentification_responsable()\">Responsable Compte</button>

        <button id=\"page_authentification_caissere\" onclick=\"affiche_authentification_caissiere()\">Caissière</button>

    </div>

    <div id=\"page_authentification\">


        <form id=\"formulaire_admin\" action=\"src/Controller/authentification_admin.php\" method=\"POST\" onsubmit=\"return controle_champs_admin()\">
            <fieldset>
                <legend>
                    <h3>Authentification Administrateur</h3>
                </legend>
                <label for=\"login_admin\">Login<em>*</em></label>
                <input type=\"text\" id=\"login_admin\" name=\"login_admin\" placeholder=\"Login\" />
                <label for=\"mot_passe_admin\">Mot de passe<em>*</em></label>
                <input type=\"password\" id=\"mot_passe_admin\" name=\"mot_passe_admin\" placeholder=\"Mot de passe\" />

                <div class=\"validation\">
                    <input type=\"submit\" value=\"Valider\" id=\"valider_admin\" />
                    <input type=\"reset\" value=\"Annuler\" />
                </div>
            </fieldset>


        </form>

        <form id=\"formulaire_responsable\" action=\"{\$url_base}AuthentificationResponsable/verifieResponsable\" method=\"POST\" onsubmit=\"return controle_champs_responsable()\">
            <fieldset>
                <legend>
                    <h3>Authentification Responsable</h3>
                </legend>
                <label for=\"login_responsable\">Login<em>*</em></label>
                <input type=\"text\" id=\"login_responsable\" name=\"login_responsable\" placeholder=\"Login\" />
                <label for=\"mot_passe_responsable\">Mot de passe<em>*</em></label>
                <input type=\"password\" id=\"mot_passe_responsable\" name=\"mot_passe_responsable\" placeholder=\"Mot de passe\" />

                <div class=\"validation\">
                    <input type=\"submit\" value=\"Valider\" id=\"valider_responsable\" />
                    <input type=\"reset\" value=\"Annuler\" />
                </div>
            </fieldset>

        </form>

        <form id=\"formulaire_caissiere\" action=\"src/Controller/authentification_caissiere.php\" method=\"POST\" onsubmit=\"return controle_champs_caissiere()\">
            <fieldset>
                <legend>
                    <h3>Authentification Caissière</h3>
                </legend>
                <label for=\"login_caissiere\">Login<em>*</em></label>
                <input type=\"text\" id=\"login_caissiere\" name=\"login_caissiere\" placeholder=\"Login\" />
                <label for=\"mot_passe_caissiere\">Mot de passe<em>*</em></label>
                <input type=\"password\" id=\"mot_passe_caissiere\" name=\"mot_passe_caissiere\" placeholder=\"Mot de passe\" />

                <div class=\"validation\">
                    <input type=\"submit\" value=\"Valider\" id=\"valider_caissiere\" />
                    <input type=\"reset\" value=\"Annuler\" />
                </div>
            </fieldset>

        </form>

    </div>


    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script_index.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 114,  52 => 30,  43 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Hello LoginController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ message }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/opt/lampp/htdocs/mesprojets/banquepeupleSymfony/src/Controller/LoginController.php'|file_link(0) }}\">src/Controller/LoginController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/opt/lampp/htdocs/mesprojets/banquepeupleSymfony/templates/login/index.html.twig'|file_link(0) }}\">templates/login/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
 #}
 
 <!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil Employés</title>
    <meta charset=\"utf-8\" />
    {# <link type=\"text/css\" rel=\"stylesheet\" href=\"{\$url_base}public/css/bootstrap.min.css\" /> #}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/script_index.css')}}\" />


</head>

<body>

    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>

    <h2>VEILLEZ SELECTIONNER VOTRE PROFIL</h2>

    <div class=\"choix_profil\">

        <button id=\"page_authentification_admin\" onclick=\"affiche_authentification_admin()\">Administrateur</button>

        <button id=\"page_authentification_responsable\" onclick=\"affiche_authentification_responsable()\">Responsable Compte</button>

        <button id=\"page_authentification_caissere\" onclick=\"affiche_authentification_caissiere()\">Caissière</button>

    </div>

    <div id=\"page_authentification\">


        <form id=\"formulaire_admin\" action=\"src/Controller/authentification_admin.php\" method=\"POST\" onsubmit=\"return controle_champs_admin()\">
            <fieldset>
                <legend>
                    <h3>Authentification Administrateur</h3>
                </legend>
                <label for=\"login_admin\">Login<em>*</em></label>
                <input type=\"text\" id=\"login_admin\" name=\"login_admin\" placeholder=\"Login\" />
                <label for=\"mot_passe_admin\">Mot de passe<em>*</em></label>
                <input type=\"password\" id=\"mot_passe_admin\" name=\"mot_passe_admin\" placeholder=\"Mot de passe\" />

                <div class=\"validation\">
                    <input type=\"submit\" value=\"Valider\" id=\"valider_admin\" />
                    <input type=\"reset\" value=\"Annuler\" />
                </div>
            </fieldset>


        </form>

        <form id=\"formulaire_responsable\" action=\"{\$url_base}AuthentificationResponsable/verifieResponsable\" method=\"POST\" onsubmit=\"return controle_champs_responsable()\">
            <fieldset>
                <legend>
                    <h3>Authentification Responsable</h3>
                </legend>
                <label for=\"login_responsable\">Login<em>*</em></label>
                <input type=\"text\" id=\"login_responsable\" name=\"login_responsable\" placeholder=\"Login\" />
                <label for=\"mot_passe_responsable\">Mot de passe<em>*</em></label>
                <input type=\"password\" id=\"mot_passe_responsable\" name=\"mot_passe_responsable\" placeholder=\"Mot de passe\" />

                <div class=\"validation\">
                    <input type=\"submit\" value=\"Valider\" id=\"valider_responsable\" />
                    <input type=\"reset\" value=\"Annuler\" />
                </div>
            </fieldset>

        </form>

        <form id=\"formulaire_caissiere\" action=\"src/Controller/authentification_caissiere.php\" method=\"POST\" onsubmit=\"return controle_champs_caissiere()\">
            <fieldset>
                <legend>
                    <h3>Authentification Caissière</h3>
                </legend>
                <label for=\"login_caissiere\">Login<em>*</em></label>
                <input type=\"text\" id=\"login_caissiere\" name=\"login_caissiere\" placeholder=\"Login\" />
                <label for=\"mot_passe_caissiere\">Mot de passe<em>*</em></label>
                <input type=\"password\" id=\"mot_passe_caissiere\" name=\"mot_passe_caissiere\" placeholder=\"Mot de passe\" />

                <div class=\"validation\">
                    <input type=\"submit\" value=\"Valider\" id=\"valider_caissiere\" />
                    <input type=\"reset\" value=\"Annuler\" />
                </div>
            </fieldset>

        </form>

    </div>


    <script type=\"text/javascript\" src=\"{{ asset('js/script_index.js')}}\"></script>


</body>

</html>", "login/index.html.twig", "/opt/lampp/htdocs/mesprojets/banquepeupleSymfony/templates/login/index.html.twig");
    }
}
