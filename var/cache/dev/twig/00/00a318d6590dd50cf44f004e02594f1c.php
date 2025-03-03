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

/* admin/admin_dashboard/show.html.twig */
class __TwigTemplate_68213053c518564a32ea15e0fca6fa8b extends Template
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
            'metatitle' => [$this, 'block_metatitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_dashboard/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_dashboard/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_dashboard/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatitle"));

        yield "Détails - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " | Strengthmate";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">
            ";
        // line 8
        yield ((array_key_exists("entity_type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["entity_type"]) || array_key_exists("entity_type", $context) ? $context["entity_type"] : (function () { throw new RuntimeError('Variable "entity_type" does not exist.', 8, $this->source); })())), "html", null, true)) : ("Élément"));
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        yield "
        </h1>

        <div class=\"text-center mb-4\">
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-warning\">Retour au tableau de bord</a>
        </div>

        <div class=\"card form-card1 p-3\">
            ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16)) {
            // line 17
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/" . ((array_key_exists("entity_type", $context)) ? (((isset($context["entity_type"]) || array_key_exists("entity_type", $context) ? $context["entity_type"] : (function () { throw new RuntimeError('Variable "entity_type" does not exist.', 17, $this->source); })()) . "s/")) : (""))) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17))), "html", null, true);
            yield "\"
                     class=\"card-img-top rounded mx-auto d-block\"
                     style=\"max-width: 100%; height: auto;\"
                     alt=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
            ";
        }
        // line 22
        yield "            <div class=\"card-body\">
                <h5 class=\"card-title text-center\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
        yield "</h5>
                <p class=\"card-text formatted-content\">";
        // line 24
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24);
        yield "</p>

                ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "createdAt", [], "any", true, true, false, 26) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "createdAt", [], "any", false, false, false, 26))) {
            // line 27
            yield "                    <p class=\"card-text\">
                        <small class=\"text-muted\">Créé le : ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "createdAt", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
            yield "</small>
                    </p>
                ";
        }
        // line 31
        yield "            </div>
        </div>

        <div class=\"d-flex justify-content-center mt-4 gap-3\">
            <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => (isset($context["entity_type"]) || array_key_exists("entity_type", $context) ? $context["entity_type"] : (function () { throw new RuntimeError('Variable "entity_type" does not exist.', 35, $this->source); })()), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                Modifier
            </a>
            <form action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => (isset($context["entity_type"]) || array_key_exists("entity_type", $context) ? $context["entity_type"] : (function () { throw new RuntimeError('Variable "entity_type" does not exist.', 38, $this->source); })()), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" method=\"post\" style=\"display:inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                    Supprimer
                </button>
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
        return "admin/admin_dashboard/show.html.twig";
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
        return array (  175 => 39,  171 => 38,  165 => 35,  159 => 31,  153 => 28,  150 => 27,  148 => 26,  143 => 24,  139 => 23,  136 => 22,  131 => 20,  124 => 17,  122 => 16,  115 => 12,  106 => 8,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block metatitle %}Détails - {{ entity.title }} | Strengthmate{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">
            {{ entity_type is defined ? entity_type|capitalize : 'Élément' }} - {{ entity.title }}
        </h1>

        <div class=\"text-center mb-4\">
            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-warning\">Retour au tableau de bord</a>
        </div>

        <div class=\"card form-card1 p-3\">
            {% if entity.image %}
                <img src=\"{{ asset('uploads/' ~ (entity_type is defined ? entity_type ~ 's/' : '') ~ entity.image) }}\"
                     class=\"card-img-top rounded mx-auto d-block\"
                     style=\"max-width: 100%; height: auto;\"
                     alt=\"{{ entity.title }}\">
            {% endif %}
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\">{{ entity.title }}</h5>
                <p class=\"card-text formatted-content\">{{ entity.content|raw }}</p>

                {% if entity.createdAt is defined and entity.createdAt %}
                    <p class=\"card-text\">
                        <small class=\"text-muted\">Créé le : {{ entity.createdAt|date('d/m/Y') }}</small>
                    </p>
                {% endif %}
            </div>
        </div>

        <div class=\"d-flex justify-content-center mt-4 gap-3\">
            <a href=\"{{ path('app_admin_entity_edit', {'entityType': entity_type, 'id': entity.id}) }}\" class=\"btn btn-primary\">
                Modifier
            </a>
            <form action=\"{{ path('app_admin_entity_delete', {'entityType': entity_type, 'id': entity.id}) }}\" method=\"post\" style=\"display:inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ entity.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
{% endblock %}
", "admin/admin_dashboard/show.html.twig", "/Applications/MAMP/htdocs/strengthmate/templates/admin/admin_dashboard/show.html.twig");
    }
}
