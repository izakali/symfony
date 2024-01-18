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

/* izak/home.html.twig */
class __TwigTemplate_4eb8f68d08e3da5d6cbdfcd5e17b4757 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "izak/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "izak/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css.css"), "html", null, true);
        echo "\">
</head>
<body>
    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\">Accueil</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"cv.html\">Mon CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"E-portfolio.html\">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class=\"text-center mt-4\">
        <h1>Présentation de moi-même</h1>
    </header>

    <section class=\"container mt-4\">
        <h2>À Propos de Moi</h2>
        <p>Je m'appelle IZAK ALI, étudiant en 1ère année BUT RT.</p>

        <h2>Éducation</h2>
        <p>Formation en [...........] à [.............].</p>

        <h2>Projets Futurs</h2>
        <p>Passionné par [vos centres d'intérêt], je prévois de travailler sur [vos projets futurs].</p>

        <div class=\"container\">
            <h2>Pour en savoir plus</h2>
            <p>Découvrez mes loisirs, passions, et envies en cliquant sur le bouton ci-dessous.</p>
            <a class=\"btn btn-primary\" href=\"en_savoir_plus.html\">En savoir plus</a>
        </div>
    </section>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "izak/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css.css') }}\">
</head>
<body>
    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\">Accueil</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"cv.html\">Mon CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"E-portfolio.html\">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class=\"text-center mt-4\">
        <h1>Présentation de moi-même</h1>
    </header>

    <section class=\"container mt-4\">
        <h2>À Propos de Moi</h2>
        <p>Je m'appelle IZAK ALI, étudiant en 1ère année BUT RT.</p>

        <h2>Éducation</h2>
        <p>Formation en [...........] à [.............].</p>

        <h2>Projets Futurs</h2>
        <p>Passionné par [vos centres d'intérêt], je prévois de travailler sur [vos projets futurs].</p>

        <div class=\"container\">
            <h2>Pour en savoir plus</h2>
            <p>Découvrez mes loisirs, passions, et envies en cliquant sur le bouton ci-dessous.</p>
            <a class=\"btn btn-primary\" href=\"en_savoir_plus.html\">En savoir plus</a>
        </div>
    </section>

</body>
</html>
", "izak/home.html.twig", "C:\\SAÉ 14\\projet\\templates\\izak\\home.html.twig");
    }
}
