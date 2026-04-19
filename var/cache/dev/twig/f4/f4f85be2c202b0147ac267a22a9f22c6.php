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

        yield "Mon compte - GreenGoodies";
        
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
<section class=\"account-page\">

    <h1>Mon compte</h1>

    <!-- ========================= -->
    <!--   MES COMMANDES           -->
    <!-- ========================= -->

    <h2>Mes commandes</h2>

    ";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "        <p>Aucune commande pour le moment.</p>
    ";
        } else {
            // line 20
            yield "        <table class=\"orders-table\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Date</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 30
                yield "                    <tr>
                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 31)), "html", null, true);
                yield "</td>
                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
                yield "</td>
                        <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 33), 2, ",", " "), "html", null, true);
                yield " €</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "            </tbody>
        </table>
    ";
        }
        // line 39
        yield "
    <hr>

    <!-- ========================= -->
    <!--   ACCÈS API               -->
    <!-- ========================= -->

    <h2>Mon accès API</h2>

    ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "apiEnabled", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "        <p>Votre accès API est <strong>activé</strong>.</p>
        <a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn btn-warning\">
            Désactiver mon accès API
        </a>
    ";
        } else {
            // line 54
            yield "        <p>Votre accès API est <strong>désactivé</strong>.</p>
        <a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn btn-success\">
            Activer mon accès API
        </a>
    ";
        }
        // line 59
        yield "
    <hr>

    <!-- ========================= -->
    <!--   SUPPRESSION COMPTE      -->
    <!-- ========================= -->

    <h2>Supprimer mon compte</h2>

    <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_delete");
        yield "\" class=\"btn btn-danger\">
        Supprimer mon compte
    </a>

</section>

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
        return array (  203 => 68,  192 => 59,  185 => 55,  182 => 54,  175 => 50,  172 => 49,  170 => 48,  159 => 39,  154 => 36,  145 => 33,  141 => 32,  137 => 31,  134 => 30,  130 => 29,  119 => 20,  115 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - GreenGoodies{% endblock %}

{% block body %}

<section class=\"account-page\">

    <h1>Mon compte</h1>

    <!-- ========================= -->
    <!--   MES COMMANDES           -->
    <!-- ========================= -->

    <h2>Mes commandes</h2>

    {% if orders is empty %}
        <p>Aucune commande pour le moment.</p>
    {% else %}
        <table class=\"orders-table\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Date</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                {% for order in orders %}
                    <tr>
                        <td>{{ '%02d'|format(order.id) }}</td>
                        <td>{{ order.createdAt|date('d/m/Y') }}</td>
                        <td>{{ order.totalPrice|number_format(2, ',', ' ') }} €</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <hr>

    <!-- ========================= -->
    <!--   ACCÈS API               -->
    <!-- ========================= -->

    <h2>Mon accès API</h2>

    {% if user.apiEnabled %}
        <p>Votre accès API est <strong>activé</strong>.</p>
        <a href=\"{{ path('app_account_toggle_api') }}\" class=\"btn btn-warning\">
            Désactiver mon accès API
        </a>
    {% else %}
        <p>Votre accès API est <strong>désactivé</strong>.</p>
        <a href=\"{{ path('app_account_toggle_api') }}\" class=\"btn btn-success\">
            Activer mon accès API
        </a>
    {% endif %}

    <hr>

    <!-- ========================= -->
    <!--   SUPPRESSION COMPTE      -->
    <!-- ========================= -->

    <h2>Supprimer mon compte</h2>

    <a href=\"{{ path('app_account_delete') }}\" class=\"btn btn-danger\">
        Supprimer mon compte
    </a>

</section>

{% endblock %}
", "account/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/account/index.html.twig");
    }
}
