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

/* AccueilResponsable/choixTypeCompte.html.twig */
class __TwigTemplate_0d542aecd1b6a71b9c741879adbcf05f1e682c00419e0a3f9ee5e87bfff00493 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AccueilResponsable/choixTypeCompte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AccueilResponsable/choixTypeCompte.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Ouverture Compte Bancaire</title>
    <meta charset=\"utf-8\" />
    <!-- <link type=\"text/css\" rel=\"stylesheet\" href=\"{\$url_base}public/css/bootstrap.min.css\" /> -->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/script_index.css"), "html", null, true);
        echo "\" />
</head>

<body>

    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>
    ";
        // line 17
        echo "    ";
        // line 22
        echo "
    <h2>VEILLEZ CHOISIR LE TYPE DE CLIENT A ENREGISTRER</h2>

    <div class=\"accueil_responsable\">

        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_client_non_salarie");
        echo "\">Compte Client non Salarié</a>

        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_client_salarie");
        echo "\">Compte Client Salarié</a>

        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_client_moral");
        echo "\">Compte Client Moral</a>

    </div>

    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script_index.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AccueilResponsable/choixTypeCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  82 => 31,  77 => 29,  72 => 27,  65 => 22,  63 => 17,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <title>Ouverture Compte Bancaire</title>
    <meta charset=\"utf-8\" />
    <!-- <link type=\"text/css\" rel=\"stylesheet\" href=\"{\$url_base}public/css/bootstrap.min.css\" /> -->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/script_index.css')}}\" />
</head>

<body>

    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>
    {# Affiche message si insertion Ok #}
    {# {if isset(\$insertionOk) }
    <div class=\"alert alert-danger\" style=\"width: 30%; margin: auto; text-align: center;\">
        {\$insertionOk}
    </div>
    {/if} #}

    <h2>VEILLEZ CHOISIR LE TYPE DE CLIENT A ENREGISTRER</h2>

    <div class=\"accueil_responsable\">

        <a href=\"{{ path('liste_client_non_salarie')}}\">Compte Client non Salarié</a>

        <a href=\"{{ path('liste_client_salarie')}}\">Compte Client Salarié</a>

        <a href=\"{{ path('liste_client_moral')}}\">Compte Client Moral</a>

    </div>

    <script type=\"text/javascript\" src=\"{{ asset('js/script_index.js')}}\"></script>

</body>

</html>", "AccueilResponsable/choixTypeCompte.html.twig", "/opt/lampp/htdocs/mesprojets/banquepeupleSymfony/templates/AccueilResponsable/choixTypeCompte.html.twig");
    }
}
