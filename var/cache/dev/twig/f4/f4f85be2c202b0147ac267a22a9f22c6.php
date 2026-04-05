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

    <h2>Mes informations</h2>
    <p><strong>Prénom :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "firstname", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
    <p><strong>Nom :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "lastname", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
    <p><strong>Email :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>

    <hr>

    <h2>Accès API</h2>

    ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "apiEnabled", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "        <p>Votre accès API est <strong>activé</strong>.</p>
        <a href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn btn-warning\">
            Désactiver mon accès API
        </a>
    ";
        } else {
            // line 26
            yield "        <p>Votre accès API est <strong>désactivé</strong>.</p>
        <a href=\"";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_toggle_api");
            yield "\" class=\"btn btn-success\">
            Activer mon accès API
        </a>
    ";
        }
        // line 31
        yield "
    <hr>

    <h2>Mes commandes</h2>

    ";
        // line 36
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 36, $this->source); })()))) {
            // line 37
            yield "        <p>Aucune commande pour le moment.</p>
    ";
        } else {
            // line 39
            yield "        <table class=\"orders-table\">
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Date</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 49
                yield "                    <tr>
                        <td>#";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 50), "html", null, true);
                yield "</td>
                        <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 51), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                        <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 52), "html", null, true);
                yield " €</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "            </tbody>
        </table>
    ";
        }
        // line 58
        yield "
    <hr>

    <h2>Supprimer mon compte</h2>
    <a href=\"";
        // line 62
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
        return array (  206 => 62,  200 => 58,  195 => 55,  186 => 52,  182 => 51,  178 => 50,  175 => 49,  171 => 48,  160 => 39,  156 => 37,  154 => 36,  147 => 31,  140 => 27,  137 => 26,  130 => 22,  127 => 21,  125 => 20,  116 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - GreenGoodies{% endblock %}

{% block body %}

<section class=\"account-page\">

    <h1>Mon compte</h1>

    <h2>Mes informations</h2>
    <p><strong>Prénom :</strong> {{ user.firstname }}</p>
    <p><strong>Nom :</strong> {{ user.lastname }}</p>
    <p><strong>Email :</strong> {{ user.email }}</p>

    <hr>

    <h2>Accès API</h2>

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

    <h2>Mes commandes</h2>

    {% if orders is empty %}
        <p>Aucune commande pour le moment.</p>
    {% else %}
        <table class=\"orders-table\">
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Date</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                {% for order in orders %}
                    <tr>
                        <td>#{{ order.id }}</td>
                        <td>{{ order.createdAt|date('d/m/Y H:i') }}</td>
                        <td>{{ order.totalPrice }} €</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <hr>

    <h2>Supprimer mon compte</h2>
    <a href=\"{{ path('app_account_delete') }}\" class=\"btn btn-danger\">
        Supprimer mon compte
    </a>

</section>

{% endblock %}
", "account/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/account/index.html.twig");
    }
}
