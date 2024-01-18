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

/* ali/home.html.twig */
class __TwigTemplate_050b560c7af1c48df8c4f6f6333b62f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css.css"), "html", null, true);
        echo "\"></head>
<body>

<div class=\"container mt-3\">
    <h2>Contenu de la page</h2>

    <!-- Formulaire pour exécuter le script Python -->
    <form method=\"post\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ali");
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary\">Exécuter le code Python</button>
    </form>

    <!-- Affichage du contenu HTML généré -->
    <div class=\"mt-3\">
        ";
        // line 21
        if (array_key_exists("html_content", $context)) {
            // line 22
            echo "            <h3>Résultat HTML généré :</h3>
            ";
            // line 23
            echo (isset($context["html_content"]) || array_key_exists("html_content", $context) ? $context["html_content"] : (function () { throw new RuntimeError('Variable "html_content" does not exist.', 23, $this->source); })());
            echo "
        ";
        }
        // line 25
        echo "    </div>

    <!-- Affichage des 10 premières lignes du CSV -->
    <div class=\"mt-3\">
        ";
        // line 29
        if ( !twig_test_empty((isset($context["csv_data"]) || array_key_exists("csv_data", $context) ? $context["csv_data"] : (function () { throw new RuntimeError('Variable "csv_data" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "            <h3>10 premières lignes du CSV :</h3>
            <table class=\"table\">
                <thead>
                    <tr>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["csv_data"]) || array_key_exists("csv_data", $context) ? $context["csv_data"] : (function () { throw new RuntimeError('Variable "csv_data" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 35
                echo "                            <th>";
                echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                echo "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </tr>
                </thead>
                <tbody>
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["csv_data"]) || array_key_exists("csv_data", $context) ? $context["csv_data"] : (function () { throw new RuntimeError('Variable "csv_data" does not exist.', 40, $this->source); })()), 1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 41
                echo "                        <tr>
                            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 43
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </tbody>
            </table>
        ";
        }
        // line 50
        echo "    </div>
</div>

<!-- Mettez vos balises script ici selon vos besoins -->

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
        return "ali/home.html.twig";
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
        return array (  145 => 50,  140 => 47,  133 => 45,  124 => 43,  120 => 42,  117 => 41,  113 => 40,  108 => 37,  99 => 35,  95 => 34,  89 => 30,  87 => 29,  81 => 25,  76 => 23,  73 => 22,  71 => 21,  62 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css.css') }}\"></head>
<body>

<div class=\"container mt-3\">
    <h2>Contenu de la page</h2>

    <!-- Formulaire pour exécuter le script Python -->
    <form method=\"post\" action=\"{{ path('app_ali') }}\">
        <button type=\"submit\" class=\"btn btn-primary\">Exécuter le code Python</button>
    </form>

    <!-- Affichage du contenu HTML généré -->
    <div class=\"mt-3\">
        {% if html_content is defined %}
            <h3>Résultat HTML généré :</h3>
            {{ html_content|raw }}
        {% endif %}
    </div>

    <!-- Affichage des 10 premières lignes du CSV -->
    <div class=\"mt-3\">
        {% if csv_data is not empty %}
            <h3>10 premières lignes du CSV :</h3>
            <table class=\"table\">
                <thead>
                    <tr>
                        {% for header in csv_data[0] %}
                            <th>{{ header }}</th>
                        {% endfor %}
                    </tr>
                </thead>
                <tbody>
                    {% for row in csv_data|slice(1, 10) %}
                        <tr>
                            {% for value in row %}
                                <td>{{ value }}</td>
                            {% endfor %}
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
</div>

<!-- Mettez vos balises script ici selon vos besoins -->

</body>
</html>
", "ali/home.html.twig", "C:\\SAE_14\\projet\\templates\\ali\\home.html.twig");
    }
}
