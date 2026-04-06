<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/header.html.twig */
class __TwigTemplate_70ded677f1fe1fb0bb5bc2e52e8bd960 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        yield "<nav class=\"navbar\">
    <div class=\"logo\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">GreenGoodies</a>
    </div>

    <ul class=\"nav-links\">
        ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "            <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
            yield "\">Nos produits</a></li>
            <li><a href=\"";
            // line 9
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
            yield "\">Mon panier</a></li>
            <li><a href=\"";
            // line 10
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\">Mon compte</a></li>
            <li><a href=\"";
            // line 11
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a></li>
        ";
        } else {
            // line 13
            yield "            <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a></li>
            <li><a href=\"";
            // line 14
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a></li>
        ";
        }
        // line 16
        yield "    </ul>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  89 => 16,  84 => 14,  79 => 13,  74 => 11,  70 => 10,  66 => 9,  61 => 8,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar\">
    <div class=\"logo\">
        <a href=\"{{ path('app_home') }}\">GreenGoodies</a>
    </div>

    <ul class=\"nav-links\">
        {% if app.user %}
            <li><a href=\"{{ path('app_products') }}\">Nos produits</a></li>
            <li><a href=\"{{ path('app_cart') }}\">Mon panier</a></li>
            <li><a href=\"{{ path('app_account') }}\">Mon compte</a></li>
            <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
        {% else %}
            <li><a href=\"{{ path('app_login') }}\">Connexion</a></li>
            <li><a href=\"{{ path('app_register') }}\">Inscription</a></li>
        {% endif %}
    </ul>
</nav>
", "partials/header.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/partials/header.html.twig");
    }
}
