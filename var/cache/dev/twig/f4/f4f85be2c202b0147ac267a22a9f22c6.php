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

\t\t<!-- ========================= -->
\t\t<!--   MES COMMANDES           -->
\t\t<!-- ========================= --><h2>Mes commandes
\t\t</h2>

\t\t\t";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 17, $this->source); })()))) {
            yield "<p>Aucune commande pour le moment.
\t\t\t</p>
\t\t";
        } else {
            // line 20
            yield "\t\t\t<table class=\"orders-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Prix total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 30
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 31)), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 33), 2, ",", " "), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        }
        // line 40
        yield "
\t\t<hr>

\t\t<!-- ========================= -->
\t\t<!--   ACCÈS API               -->
\t\t<!-- ========================= --><h2>Mon accès API
\t\t</h2>

\t\t\t";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "apiEnabled", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>
\t\t\t\tVotre accès API est<strong>activé</strong>.
\t\t\t</p>
\t\t\t\t<a href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn btn-warning\"> Désactiver mon accès API
\t\t\t</a>
\t\t";
        } else {
            // line 54
            yield "\t\t\t<p>Votre accès API est
\t\t\t\t<strong>désactivé</strong>.</p>
\t\t\t<a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn btn-success\">
\t\t\t\tActiver mon accès API
\t\t\t</a>
\t\t";
        }
        // line 60
        yield "
\t\t<hr>

\t\t<!-- ========================= -->
\t\t<!--   SUPPRESSION COMPTE      -->
\t\t<!-- ========================= --><h2>Supprimer mon compte
\t\t</h2>

\t\t\t<a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_delete");
        yield "\" class=\"btn btn-danger delete-account-btn\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.');\"> Supprimer mon compte
\t\t</a>


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
        return array (  203 => 68,  193 => 60,  186 => 56,  182 => 54,  176 => 51,  170 => 48,  160 => 40,  155 => 37,  145 => 33,  141 => 32,  137 => 31,  134 => 30,  130 => 29,  119 => 20,  113 => 17,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - GreenGoodies
{% endblock %}

{% block body %}

\t<section class=\"account-page wrapper-1440\">

\t\t<h1>Mon compte</h1>

\t\t<!-- ========================= -->
\t\t<!--   MES COMMANDES           -->
\t\t<!-- ========================= --><h2>Mes commandes
\t\t</h2>

\t\t\t{% if orders is empty %}<p>Aucune commande pour le moment.
\t\t\t</p>
\t\t{% else %}
\t\t\t<table class=\"orders-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Prix total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ '%02d'|format(order.id) }}</td>
\t\t\t\t\t\t\t<td>{{ order.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td>{{ order.totalPrice|number_format(2, ',', ' ') }}
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t{% endif %}

\t\t<hr>

\t\t<!-- ========================= -->
\t\t<!--   ACCÈS API               -->
\t\t<!-- ========================= --><h2>Mon accès API
\t\t</h2>

\t\t\t{% if app.user.apiEnabled %}<p>
\t\t\t\tVotre accès API est<strong>activé</strong>.
\t\t\t</p>
\t\t\t\t<a href=\"{{ path('app_account_toggle_api') }}\" class=\"btn btn-warning\"> Désactiver mon accès API
\t\t\t</a>
\t\t{% else %}
\t\t\t<p>Votre accès API est
\t\t\t\t<strong>désactivé</strong>.</p>
\t\t\t<a href=\"{{ path('app_account_toggle_api') }}\" class=\"btn btn-success\">
\t\t\t\tActiver mon accès API
\t\t\t</a>
\t\t{% endif %}

\t\t<hr>

\t\t<!-- ========================= -->
\t\t<!--   SUPPRESSION COMPTE      -->
\t\t<!-- ========================= --><h2>Supprimer mon compte
\t\t</h2>

\t\t\t<a href=\"{{ path('app_account_delete') }}\" class=\"btn btn-danger delete-account-btn\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.');\"> Supprimer mon compte
\t\t</a>


\t</section>

{% endblock %}
", "account/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/account/index.html.twig");
    }
}
