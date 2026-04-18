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

/* register/index.html.twig */
class __TwigTemplate_4594286768efd8d9429f77efec33b851 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

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

        yield "Inscription - GreenGoodies";
        
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
<div class=\"register-page\">

    <!-- IMAGE GAUCHE -->
    <div class=\"register-left\">
        <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/register.jpg"), "html", null, true);
        yield "\" alt=\"Green leaves\">
    </div>

    <!-- FORMULAIRE -->
    <div class=\"register-right\">
        <h1>Page inscription</h1>

        <form method=\"post\">

            <label for=\"lastname\">Nom</label>
            <input type=\"text\" id=\"lastname\" name=\"lastname\">

            <label for=\"firstname\">Prénom</label>
            <input type=\"text\" id=\"firstname\" name=\"firstname\">

            <label for=\"email\">Adresse email</label>
            <input type=\"email\" id=\"email\" name=\"email\">

            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" id=\"password\" name=\"password\">

            <label for=\"password_confirm\">Confirmation mot de passe</label>
            <input type=\"password\" id=\"password_confirm\" name=\"password_confirm\">

            <div class=\"checkbox\">
                <input type=\"checkbox\" id=\"cgu\" name=\"cgu\">
                <label for=\"cgu\">J’accepte les CGU de GreenGoodies</label>
            </div>

            <button type=\"submit\" class=\"register-btn\">S’inscrire</button>

            <p class=\"register-login\">
                Déjà un compte ?
                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a>
            </p>

        </form>
    </div>

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
        return "register/index.html.twig";
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
        return array (  143 => 44,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription - GreenGoodies{% endblock %}

{% block body %}

<div class=\"register-page\">

    <!-- IMAGE GAUCHE -->
    <div class=\"register-left\">
        <img src=\"{{ asset('images/register.jpg') }}\" alt=\"Green leaves\">
    </div>

    <!-- FORMULAIRE -->
    <div class=\"register-right\">
        <h1>Page inscription</h1>

        <form method=\"post\">

            <label for=\"lastname\">Nom</label>
            <input type=\"text\" id=\"lastname\" name=\"lastname\">

            <label for=\"firstname\">Prénom</label>
            <input type=\"text\" id=\"firstname\" name=\"firstname\">

            <label for=\"email\">Adresse email</label>
            <input type=\"email\" id=\"email\" name=\"email\">

            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" id=\"password\" name=\"password\">

            <label for=\"password_confirm\">Confirmation mot de passe</label>
            <input type=\"password\" id=\"password_confirm\" name=\"password_confirm\">

            <div class=\"checkbox\">
                <input type=\"checkbox\" id=\"cgu\" name=\"cgu\">
                <label for=\"cgu\">J’accepte les CGU de GreenGoodies</label>
            </div>

            <button type=\"submit\" class=\"register-btn\">S’inscrire</button>

            <p class=\"register-login\">
                Déjà un compte ?
                <a href=\"{{ path('app_login') }}\">Se connecter</a>
            </p>

        </form>
    </div>

</div>

{% endblock %}
", "register/index.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC13/templates/register/index.html.twig");
    }
}
