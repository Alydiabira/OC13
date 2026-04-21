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

        yield "Accueil - GreenGoodies";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
<div class=\"home-page\">

    <!-- HERO -->
    <section class=\"hero\">

        <div class=\"hero-left\">
            <h1>Bienvenue</h1>
            <p>
                Découvrez notre univers de produits durables et éthiques pour une consommation responsable.<br>
                Retrouvez des articles d’hygiène & beauté, des accessoires & boissons et du prêt-à-porter.
            </p>
        </div>

        <div class=\"hero-right\">
            <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hero.jpg"), "html", null, true);
        yield "\" alt=\"GreenGoodies Hero\">
        </div>

    </section>

    <!-- PRODUITS -->
    <section class=\"wrapper-1440\">

        <h2>Nos produits</h2>

        <div class=\"products-grid\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            yield "                <div class=\"product-card\">

                    <div class=\"product-card-image\">
                        <img src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "picture", [], "any", false, false, false, 36))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "\">
                    </div>

                    <h2 class=\"product-card-title\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</h2>
                    <p class=\"product-card-price\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40), "html", null, true);
            yield " €</p>
                    <p class=\"product-card-description\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>

                    <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn\">
                        Voir le produit
                    </a>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "        </div>

    </section>

    <!-- VALEURS -->
    <section class=\"values-section\">

        <div class=\"values-row\">
            <div class=\"values-text bg-beige\">
                <h2>Notre conviction</h2>
                <p>
                    Chez GreenGoodies, nous croyons en un monde où le commerce peut être synonyme de bien‑être
                    pour la planète et ses habitants. Notre mission est de vous proposer une sélection rigoureuse
                    de produits qui allient qualité, durabilité et éthique.
                </p>
            </div>

            <div class=\"values-image\">
                <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/11.jpg"), "html", null, true);
        yield "\" alt=\"\">
            </div>
        </div>

        <div class=\"values-row reverse\">
            <div class=\"values-image\">
                <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/12.jpg"), "html", null, true);
        yield "\" alt=\"\">
            </div>

            <div class=\"values-text bg-green\">
                <h2>Nos valeurs</h2>
                <p>
                    Durabilité : Nous sélectionnons soigneusement des produits qui respectent l’environnement.<br>
                    Éthique : Nous travaillons avec des partenaires qui partagent nos valeurs.<br>
                    Écologie : Nous privilégions les matériaux et pratiques respectueuses de l’écosystème.
                </p>
            </div>
        </div>

    </section>

</div>

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
        return array (  202 => 73,  193 => 67,  173 => 49,  161 => 43,  156 => 41,  152 => 40,  148 => 39,  140 => 36,  135 => 33,  131 => 32,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - GreenGoodies{% endblock %}

{% block body %}

<div class=\"home-page\">

    <!-- HERO -->
    <section class=\"hero\">

        <div class=\"hero-left\">
            <h1>Bienvenue</h1>
            <p>
                Découvrez notre univers de produits durables et éthiques pour une consommation responsable.<br>
                Retrouvez des articles d’hygiène & beauté, des accessoires & boissons et du prêt-à-porter.
            </p>
        </div>

        <div class=\"hero-right\">
            <img src=\"{{ asset('images/hero.jpg') }}\" alt=\"GreenGoodies Hero\">
        </div>

    </section>

    <!-- PRODUITS -->
    <section class=\"wrapper-1440\">

        <h2>Nos produits</h2>

        <div class=\"products-grid\">
            {% for product in products %}
                <div class=\"product-card\">

                    <div class=\"product-card-image\">
                        <img src=\"{{ asset('uploads/' ~ product.picture) }}\" alt=\"{{ product.name }}\">
                    </div>

                    <h2 class=\"product-card-title\">{{ product.name }}</h2>
                    <p class=\"product-card-price\">{{ product.price }} €</p>
                    <p class=\"product-card-description\">{{ product.shortDescription }}</p>

                    <a href=\"{{ path('app_product_show', { id: product.id }) }}\" class=\"btn\">
                        Voir le produit
                    </a>

                </div>
            {% endfor %}
        </div>

    </section>

    <!-- VALEURS -->
    <section class=\"values-section\">

        <div class=\"values-row\">
            <div class=\"values-text bg-beige\">
                <h2>Notre conviction</h2>
                <p>
                    Chez GreenGoodies, nous croyons en un monde où le commerce peut être synonyme de bien‑être
                    pour la planète et ses habitants. Notre mission est de vous proposer une sélection rigoureuse
                    de produits qui allient qualité, durabilité et éthique.
                </p>
            </div>

            <div class=\"values-image\">
                <img src=\"{{ asset('images/11.jpg') }}\" alt=\"\">
            </div>
        </div>

        <div class=\"values-row reverse\">
            <div class=\"values-image\">
                <img src=\"{{ asset('images/12.jpg') }}\" alt=\"\">
            </div>

            <div class=\"values-text bg-green\">
                <h2>Nos valeurs</h2>
                <p>
                    Durabilité : Nous sélectionnons soigneusement des produits qui respectent l’environnement.<br>
                    Éthique : Nous travaillons avec des partenaires qui partagent nos valeurs.<br>
                    Écologie : Nous privilégions les matériaux et pratiques respectueuses de l’écosystème.
                </p>
            </div>
        </div>

    </section>

</div>

{% endblock %}
", "home/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/home/index.html.twig");
    }
}
