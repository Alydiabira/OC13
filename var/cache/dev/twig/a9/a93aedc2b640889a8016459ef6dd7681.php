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

/* cart/index.html.twig */
class __TwigTemplate_96b54be08d95a2d98c4238cf87557117 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        yield "Mon panier - GreenGoodies
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
\t<section class=\"cart-page wrapper-1440\">


\t\t
\t\t<h1>Mon panier</h1>

\t\t";
        // line 15
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "\t\t\t<div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
\t\t";
        // line 19
        if (( !(isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()), "cartItems", [], "any", false, false, false, 19)))) {
            // line 20
            yield "\t\t\t<p>Votre panier est vide.</p>
\t\t\t<a href=\"";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn\">Retour aux produits</a>

\t\t";
        } else {
            // line 24
            yield "
\t\t<a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_clear");
            yield "\" class=\"gg-clear-cart\">
\t\t\tX Vider le panier
\t\t</a>

\t\t\t<div class=\"cart-items\">

\t\t\t\t";
            // line 31
            $context["total"] = 0;
            // line 32
            yield "
\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 33, $this->source); })()), "cartItems", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                yield "\t\t\t\t\t";
                $context["lineTotal"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "price", [], "any", false, false, false, 34) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 34));
                // line 35
                yield "\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()) + (isset($context["lineTotal"]) || array_key_exists("lineTotal", $context) ? $context["lineTotal"] : (function () { throw new RuntimeError('Variable "lineTotal" does not exist.', 35, $this->source); })()));
                // line 36
                yield "
\t\t\t\t\t<div class=\"cart-item\">

\t\t\t\t\t\t<div class=\"cart-item-left\">
\t\t\t\t\t\t\t<img src=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "picture", [], "any", false, false, false, 40))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                yield "\" class=\"cart-item-img\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"cart-item-right\">
\t\t\t\t\t\t\t<h2 class=\"cart-item-name\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                yield "</h2>

\t\t\t\t\t\t\t<p class=\"cart-item-qty\">
\t\t\t\t\t\t\t\tQuantité :
\t\t\t\t\t\t\t\t<strong>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 48), "html", null, true);
                yield "</strong>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p class=\"cart-item-price\">
\t\t\t\t\t\t\t\tPrix :
\t\t\t\t\t\t\t\t<strong>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 53), "price", [], "any", false, false, false, 53), "html", null, true);
                yield "€</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "\t\t\t</div>

\t\t\t<div class=\"cart-summary\">

\t\t\t\t<p class=\"summary-line\">
\t\t\t\t\t<span>Total panier :</span>
\t\t\t\t\t<strong>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 66, $this->source); })()), "html", null, true);
            yield "€</strong>
\t\t\t\t</p>

\t\t\t\t<p class=\"summary-line\">
\t\t\t\t\t<span>Frais de livraison :</span>
\t\t\t\t\t<strong>Offert</strong>
\t\t\t\t</p>

\t\t\t\t<a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_validate");
            yield "\" class=\"btn btn-success big-btn\">
\t\t\t\t\tValider la commande
\t\t\t\t</a>

\t\t\t</div>

\t\t";
        }
        // line 81
        yield "
\t</section>

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
        return "cart/index.html.twig";
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
        return array (  237 => 81,  227 => 74,  216 => 66,  208 => 60,  195 => 53,  187 => 48,  180 => 44,  171 => 40,  165 => 36,  162 => 35,  159 => 34,  155 => 33,  152 => 32,  150 => 31,  141 => 25,  138 => 24,  132 => 21,  129 => 20,  127 => 19,  124 => 18,  115 => 16,  110 => 15,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - GreenGoodies
{% endblock %}

{% block body %}

\t<section class=\"cart-page wrapper-1440\">


\t\t
\t\t<h1>Mon panier</h1>

\t\t{# Messages de confirmation #}
\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success\">{{ message }}</div>
\t\t{% endfor %}

\t\t{% if not cart or cart.cartItems is empty %}
\t\t\t<p>Votre panier est vide.</p>
\t\t\t<a href=\"{{ path('app_home') }}\" class=\"btn\">Retour aux produits</a>

\t\t{% else %}

\t\t<a href=\"{{ path('app_cart_clear') }}\" class=\"gg-clear-cart\">
\t\t\tX Vider le panier
\t\t</a>

\t\t\t<div class=\"cart-items\">

\t\t\t\t{% set total = 0 %}

\t\t\t\t{% for item in cart.cartItems %}
\t\t\t\t\t{% set lineTotal = item.product.price * item.quantity %}
\t\t\t\t\t{% set total = total + lineTotal %}

\t\t\t\t\t<div class=\"cart-item\">

\t\t\t\t\t\t<div class=\"cart-item-left\">
\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/' ~ item.product.picture) }}\" alt=\"{{ item.product.name }}\" class=\"cart-item-img\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"cart-item-right\">
\t\t\t\t\t\t\t<h2 class=\"cart-item-name\">{{ item.product.name }}</h2>

\t\t\t\t\t\t\t<p class=\"cart-item-qty\">
\t\t\t\t\t\t\t\tQuantité :
\t\t\t\t\t\t\t\t<strong>{{ item.quantity }}</strong>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p class=\"cart-item-price\">
\t\t\t\t\t\t\t\tPrix :
\t\t\t\t\t\t\t\t<strong>{{ item.product.price }}€</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t\t<div class=\"cart-summary\">

\t\t\t\t<p class=\"summary-line\">
\t\t\t\t\t<span>Total panier :</span>
\t\t\t\t\t<strong>{{ total }}€</strong>
\t\t\t\t</p>

\t\t\t\t<p class=\"summary-line\">
\t\t\t\t\t<span>Frais de livraison :</span>
\t\t\t\t\t<strong>Offert</strong>
\t\t\t\t</p>

\t\t\t\t<a href=\"{{ path('app_cart_validate') }}\" class=\"btn btn-success big-btn\">
\t\t\t\t\tValider la commande
\t\t\t\t</a>

\t\t\t</div>

\t\t{% endif %}

\t</section>

{% endblock %}
", "cart/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/cart/index.html.twig");
    }
}
