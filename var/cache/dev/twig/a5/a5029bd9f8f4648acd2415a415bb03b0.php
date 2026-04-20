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

/* home/index.html.twig */
class __TwigTemplate_be619175e6321bb8f25bfdd3a461d0d9 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil - GreenGoodies
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
\t<div class=\"home-page\">

\t\t<section class=\"hero\">

\t\t\t<div class=\"hero-left\">
\t\t\t\t<h1>Bienvenue</h1>
\t\t\t\t<p>
\t\t\t\t\tDécouvrez notre univers de produits durables et éthiques pour une consommation responsable.<br>
\t\t\t\t\tRetrouvez des articles d’hygiène & beauté, des accessoires & boissons et du prêt-à-porter.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"hero-right\">
\t\t\t\t<img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hero.jpg"), "html", null, true);
        yield "\" alt=\"GreenGoodies Hero\">
\t\t\t</div>

\t\t</section>

\t\t<div class=\"container products wrapper-1440\">
\t\t\t<h2>Nos produits</h2>

\t\t\t<div class=\"product-grid\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            yield "\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t<img src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "picture", [], "any", false, false, false, 32))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
\t\t\t\t\t\t<h3>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t<p>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<div class=\"price\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35), "html", null, true);
            yield "
\t\t\t\t\t\t\t€</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "\t\t\t</div>
\t\t</div>

\t\t<section class=\"values-section\">

\t\t\t<div class=\"values-row\">
\t\t\t\t<div class=\"values-text\">
\t\t\t\t\t<h2>Notre conviction</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tChez GreenGoodies, nous croyons en un monde où le commerce peut être synonyme de bien‑être
\t\t\t\t\t\t\t\t\t\t\t\t                pour la planète et ses habitants. Notre mission est de vous proposer une sélection rigoureuse
\t\t\t\t\t\t\t\t\t\t\t\t                de produits qui allient qualité, durabilité et éthique.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"values-image\">
\t\t\t\t\t<img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/11.jpg"), "html", null, true);
        yield "\" alt=\"Conviction GreenGoodies\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"values-row reverse\">
\t\t\t\t<div class=\"values-image\">
\t\t\t\t\t<img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/12.jpg"), "html", null, true);
        yield "\" alt=\"Valeurs GreenGoodies\">
\t\t\t\t</div>

\t\t\t\t<div class=\"values-text\">
\t\t\t\t\t<h2>Nos valeurs</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDurabilité : Nous sélectionnons soigneusement des produits qui respectent l’environnement.<br>
\t\t\t\t\t\tÉthique : Nous travaillons avec des partenaires qui partagent nos valeurs.<br>
\t\t\t\t\t\tÉcologie : Nous privilégions les matériaux et pratiques respectueuses de l’écosystème.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>


\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  187 => 61,  178 => 55,  160 => 39,  150 => 35,  146 => 34,  142 => 33,  136 => 32,  133 => 31,  129 => 30,  117 => 21,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - GreenGoodies
{% endblock %}

{% block body %}

\t<div class=\"home-page\">

\t\t<section class=\"hero\">

\t\t\t<div class=\"hero-left\">
\t\t\t\t<h1>Bienvenue</h1>
\t\t\t\t<p>
\t\t\t\t\tDécouvrez notre univers de produits durables et éthiques pour une consommation responsable.<br>
\t\t\t\t\tRetrouvez des articles d’hygiène & beauté, des accessoires & boissons et du prêt-à-porter.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"hero-right\">
\t\t\t\t<img src=\"{{ asset('images/hero.jpg') }}\" alt=\"GreenGoodies Hero\">
\t\t\t</div>

\t\t</section>

\t\t<div class=\"container products wrapper-1440\">
\t\t\t<h2>Nos produits</h2>

\t\t\t<div class=\"product-grid\">
\t\t\t\t{% for product in products %}
\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/' ~ product.picture) }}\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t<h3>{{ product.name }}</h3>
\t\t\t\t\t\t<p>{{ product.shortDescription }}</p>
\t\t\t\t\t\t<div class=\"price\">{{ product.price }}
\t\t\t\t\t\t\t€</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t\t<section class=\"values-section\">

\t\t\t<div class=\"values-row\">
\t\t\t\t<div class=\"values-text\">
\t\t\t\t\t<h2>Notre conviction</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tChez GreenGoodies, nous croyons en un monde où le commerce peut être synonyme de bien‑être
\t\t\t\t\t\t\t\t\t\t\t\t                pour la planète et ses habitants. Notre mission est de vous proposer une sélection rigoureuse
\t\t\t\t\t\t\t\t\t\t\t\t                de produits qui allient qualité, durabilité et éthique.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"values-image\">
\t\t\t\t\t<img src=\"{{ asset('images/11.jpg') }}\" alt=\"Conviction GreenGoodies\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"values-row reverse\">
\t\t\t\t<div class=\"values-image\">
\t\t\t\t\t<img src=\"{{ asset('images/12.jpg') }}\" alt=\"Valeurs GreenGoodies\">
\t\t\t\t</div>

\t\t\t\t<div class=\"values-text\">
\t\t\t\t\t<h2>Nos valeurs</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDurabilité : Nous sélectionnons soigneusement des produits qui respectent l’environnement.<br>
\t\t\t\t\t\tÉthique : Nous travaillons avec des partenaires qui partagent nos valeurs.<br>
\t\t\t\t\t\tÉcologie : Nous privilégions les matériaux et pratiques respectueuses de l’écosystème.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>


\t</div>

{% endblock %}
", "home/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/home/index.html.twig");
    }
}
