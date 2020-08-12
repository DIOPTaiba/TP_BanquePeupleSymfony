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

/* accueil/index.html.twig */
class __TwigTemplate_d175b9dc74045ff88444f2ba13655a21cece10db1cfdd28b82b166fa7d0a480f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil Employés</title>
    <meta charset=\"utf-8\" />
    ";
        // line 8
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


        <form id=\"formulaire_admin\" action=\"#\" method=\"POST\" onsubmit=\"return controle_champs_admin()\">
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

        <form id=\"formulaire_responsable\" action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\" onsubmit=\"return controle_champs_responsable()\">
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

        <form id=\"formulaire_caissiere\" action=\"#\" method=\"POST\" onsubmit=\"return controle_champs_caissiere()\">
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
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script_index.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 92,  100 => 53,  51 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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


        <form id=\"formulaire_admin\" action=\"#\" method=\"POST\" onsubmit=\"return controle_champs_admin()\">
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

        <form id=\"formulaire_responsable\" action=\"{{ path('login')}}\" method=\"POST\" onsubmit=\"return controle_champs_responsable()\">
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

        <form id=\"formulaire_caissiere\" action=\"#\" method=\"POST\" onsubmit=\"return controle_champs_caissiere()\">
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

</html>", "accueil/index.html.twig", "/opt/lampp/htdocs/mesprojets/banquepeupleSymfony/templates/accueil/index.html.twig");
    }
}
