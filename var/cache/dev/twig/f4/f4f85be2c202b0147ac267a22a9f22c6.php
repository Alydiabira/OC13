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

/* account/index.html.twig */
class __TwigTemplate_16bb903989add8ae829a90ca51d90fe3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

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

        yield "Mon compte - GreenGoodies
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
\t<section class=\"account-page wrapper-1440\">

\t\t<h1>Mon compte</h1>

\t\t<div class=\"account-box\">

\t\t\t<h2>Mes commandes</h2>

\t\t\t";
        // line 16
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "\t\t\t\t<p>Aucune commande pour le moment.</p>
\t\t\t";
        } else {
            // line 19
            yield "\t\t\t\t<table class=\"orders-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Prix total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 29
                yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 30)), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 32), 2, ",", " "), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        }
        // line 39
        yield "
\t\t\t<h2>Mon accès API</h2>

\t\t\t";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "apiEnabled", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "\t\t\t\t<p>Votre accès API est
\t\t\t\t\t<strong>activé</strong>.</p>
\t\t\t\t<a href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn-api btn-api-disable\">
\t\t\t\t\tDésactiver mon accès API
\t\t\t\t</a>
\t\t\t";
        } else {
            // line 49
            yield "\t\t\t\t<p>Votre accès API est
\t\t\t\t\t<strong>désactivé</strong>.</p>
\t\t\t\t<a href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn-api\">
\t\t\t\t\tActiver mon accès API
\t\t\t\t</a>
\t\t\t";
        }
        // line 55
        yield "
\t\t\t<h2>Supprimer mon compte</h2>

\t\t\t<a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_delete");
        yield "\" class=\"btn-delete-account\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.');\">
\t\t\t\tSupprimer mon compte
\t\t\t</a>

\t\t</div>

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
        return "account/index.html.twig";
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
        return array (  193 => 58,  188 => 55,  181 => 51,  177 => 49,  170 => 45,  166 => 43,  164 => 42,  159 => 39,  154 => 36,  144 => 32,  140 => 31,  136 => 30,  133 => 29,  129 => 28,  118 => 19,  114 => 17,  112 => 16,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - GreenGoodies
{% endblock %}

{% block body %}

\t<section class=\"account-page wrapper-1440\">

\t\t<h1>Mon compte</h1>

\t\t<div class=\"account-box\">

\t\t\t<h2>Mes commandes</h2>

\t\t\t{% if orders is empty %}
\t\t\t\t<p>Aucune commande pour le moment.</p>
\t\t\t{% else %}
\t\t\t\t<table class=\"orders-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Prix total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ '%02d'|format(order.id) }}</td>
\t\t\t\t\t\t\t\t<td>{{ order.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t\t<td>{{ order.totalPrice|number_format(2, ',', ' ') }}
\t\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t{% endif %}

\t\t\t<h2>Mon accès API</h2>

\t\t\t{% if app.user.apiEnabled %}
\t\t\t\t<p>Votre accès API est
\t\t\t\t\t<strong>activé</strong>.</p>
\t\t\t\t<a href=\"{{ path('app_account_toggle_api') }}\" class=\"btn-api btn-api-disable\">
\t\t\t\t\tDésactiver mon accès API
\t\t\t\t</a>
\t\t\t{% else %}
\t\t\t\t<p>Votre accès API est
\t\t\t\t\t<strong>désactivé</strong>.</p>
\t\t\t\t<a href=\"{{ path('app_account_toggle_api') }}\" class=\"btn-api\">
\t\t\t\t\tActiver mon accès API
\t\t\t\t</a>
\t\t\t{% endif %}

\t\t\t<h2>Supprimer mon compte</h2>

\t\t\t<a href=\"{{ path('app_account_delete') }}\" class=\"btn-delete-account\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.');\">
\t\t\t\tSupprimer mon compte
\t\t\t</a>

\t\t</div>

\t</section>


{% endblock %}
", "account/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/account/index.html.twig");
    }
}
