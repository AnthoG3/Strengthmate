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

/* admin/admin_dashboard/index.html.twig */
class __TwigTemplate_fa88b3b23d4ffa3325d5a61a7a42a558 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_dashboard/index.html.twig", 1);
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

        yield "Tableau de bord | Strengthmate";
        
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
        yield "    <div class=\"container\">
        <h1 class=\"mb-4\">Dashboard Admin</h1>

        <!-- Affichage des messages flash ici -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
        <!-- Bouton de déconnexion -->
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        yield "\" class=\"btn btn-danger mb-3 btn-block\">Se déconnecter</a>

        <!-- Section Présentations -->
        <h2 class=\"mb-3\">Présentations</h2>
        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_create", ["entityType" => "presentation"]);
        yield "\" class=\"btn btn-warning mb-3 btn-block\">Ajouter une nouvelle présentation</a>
        <div class=\"row\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["presentations"]) || array_key_exists("presentations", $context) ? $context["presentations"] : (function () { throw new RuntimeError('Variable "presentations" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 27
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card admin-card h-100\">
                        ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "image", [], "any", false, false, false, 29)) {
                // line 30
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/presentations/" . CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "image", [], "any", false, false, false, 30))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "title", [], "any", false, false, false, 30), "html", null, true);
                yield "\">
                        ";
            }
            // line 32
            yield "                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "title", [], "any", false, false, false, 33), "html", null, true);
            yield "</h5>
                            <div class=\"mt-auto\">
                                ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 35)) {
                // line 36
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\" class=\"btn btn-warning mb-2 btn-block voir-plus\">Voir plus</a>
                                    <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" class=\"btn btn-secondary mb-2 btn-block\">Modifier</a>
                                    <form method=\"post\" action=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette présentation ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 39))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger mb-2 btn-block\">Supprimer</button>
                                    </form>
                                ";
            }
            // line 43
            yield "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['presentation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </div>

        <!-- Section Suivis -->
        <h2 class=\"mb-3\">Suivis</h2>
        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_create", ["entityType" => "suivis"]);
        yield "\" class=\"btn btn-warning mb-3 btn-block\">Ajouter un nouveau suivi</a>
        <div class=\"row\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["suivis"]);
        foreach ($context['_seq'] as $context["_key"] => $context["suivis"]) {
            // line 55
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card admin-card h-100\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivis"], "title", [], "any", false, false, false, 58), "html", null, true);
            yield "</h5>
                            <div class=\"mt-auto\">
                                ";
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, $context["suivis"], "id", [], "any", false, false, false, 60)) {
                // line 61
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivis"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                yield "\" class=\"btn btn-warning mb-2 btn-block voir-plus\">Voir plus</a>
                                    <a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivis"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" class=\"btn btn-secondary mb-2 btn-block\">Modifier</a>
                                    <form method=\"post\" action=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivis"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["suivis"], "id", [], "any", false, false, false, 64))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger mb-2 btn-block\">Supprimer</button>
                                    </form>
                                ";
            }
            // line 68
            yield "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['suivis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "        </div>

        <!-- Section Témoignages -->
        <h2 class=\"mb-3\">Témoignages</h2>
        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_create", ["entityType" => "temoignages"]);
        yield "\" class=\"btn btn-warning mb-3 btn-block\">Ajouter un nouveau témoignage</a>
        <div class=\"row\">
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["temoignages"]) || array_key_exists("temoignages", $context) ? $context["temoignages"] : (function () { throw new RuntimeError('Variable "temoignages" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
            // line 80
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card admin-card h-100\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "title", [], "any", false, false, false, 83), "html", null, true);
            yield "</h5>
                            <div class=\"mt-auto\">
                                ";
            // line 85
            if (CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 85)) {
                // line 86
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" class=\"btn btn-warning mb-2 btn-block voir-plus\">Voir plus</a>
                                    <a href=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" class=\"btn btn-secondary mb-2 btn-block\">Modifier</a>
                                    <form method=\"post\" action=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce témoignage ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 89))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger mb-2 btn-block\">Supprimer</button>
                                    </form>
                                ";
            }
            // line 93
            yield "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['temoignage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "        </div>
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
        return "admin/admin_dashboard/index.html.twig";
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
        return array (  324 => 98,  314 => 93,  307 => 89,  303 => 88,  299 => 87,  294 => 86,  292 => 85,  287 => 83,  282 => 80,  278 => 79,  273 => 77,  267 => 73,  257 => 68,  250 => 64,  246 => 63,  242 => 62,  237 => 61,  235 => 60,  230 => 58,  225 => 55,  221 => 54,  216 => 52,  210 => 48,  200 => 43,  193 => 39,  189 => 38,  185 => 37,  180 => 36,  178 => 35,  173 => 33,  170 => 32,  162 => 30,  160 => 29,  156 => 27,  152 => 26,  147 => 24,  140 => 20,  136 => 18,  130 => 17,  120 => 13,  115 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block metatitle %}Tableau de bord | Strengthmate{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mb-4\">Dashboard Admin</h1>

        <!-- Affichage des messages flash ici -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <!-- Bouton de déconnexion -->
        <a href=\"{{ path('admin_logout') }}\" class=\"btn btn-danger mb-3 btn-block\">Se déconnecter</a>

        <!-- Section Présentations -->
        <h2 class=\"mb-3\">Présentations</h2>
        <a href=\"{{ path('app_admin_entity_create', {'entityType': 'presentation'}) }}\" class=\"btn btn-warning mb-3 btn-block\">Ajouter une nouvelle présentation</a>
        <div class=\"row\">
            {% for presentation in presentations %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card admin-card h-100\">
                        {% if presentation.image %}
                            <img src=\"{{ asset('uploads/presentations/' ~ presentation.image) }}\" class=\"card-img-top\" alt=\"{{ presentation.title }}\">
                        {% endif %}
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">{{ presentation.title }}</h5>
                            <div class=\"mt-auto\">
                                {% if presentation.id %}
                                    <a href=\"{{ path('app_admin_entity_show', {'entityType': 'presentation', 'id': presentation.id}) }}\" class=\"btn btn-warning mb-2 btn-block voir-plus\">Voir plus</a>
                                    <a href=\"{{ path('app_admin_entity_edit', {'entityType': 'presentation', 'id': presentation.id}) }}\" class=\"btn btn-secondary mb-2 btn-block\">Modifier</a>
                                    <form method=\"post\" action=\"{{ path('app_admin_entity_delete', {'entityType': 'presentation', 'id': presentation.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette présentation ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ presentation.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger mb-2 btn-block\">Supprimer</button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Section Suivis -->
        <h2 class=\"mb-3\">Suivis</h2>
        <a href=\"{{ path('app_admin_entity_create', {'entityType': 'suivis'}) }}\" class=\"btn btn-warning mb-3 btn-block\">Ajouter un nouveau suivi</a>
        <div class=\"row\">
            {% for suivis in suivis %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card admin-card h-100\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">{{ suivis.title }}</h5>
                            <div class=\"mt-auto\">
                                {% if suivis.id %}
                                    <a href=\"{{ path('app_admin_entity_show', {'entityType': 'suivis', 'id': suivis.id}) }}\" class=\"btn btn-warning mb-2 btn-block voir-plus\">Voir plus</a>
                                    <a href=\"{{ path('app_admin_entity_edit', {'entityType': 'suivis', 'id': suivis.id}) }}\" class=\"btn btn-secondary mb-2 btn-block\">Modifier</a>
                                    <form method=\"post\" action=\"{{ path('app_admin_entity_delete', {'entityType': 'suivis', 'id': suivis.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ suivis.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger mb-2 btn-block\">Supprimer</button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Section Témoignages -->
        <h2 class=\"mb-3\">Témoignages</h2>
        <a href=\"{{ path('app_admin_entity_create', {'entityType': 'temoignages'}) }}\" class=\"btn btn-warning mb-3 btn-block\">Ajouter un nouveau témoignage</a>
        <div class=\"row\">
            {% for temoignage in temoignages %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card admin-card h-100\">
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">{{ temoignage.title }}</h5>
                            <div class=\"mt-auto\">
                                {% if temoignage.id %}
                                    <a href=\"{{ path('app_admin_entity_show', {'entityType': 'temoignages', 'id': temoignage.id}) }}\" class=\"btn btn-warning mb-2 btn-block voir-plus\">Voir plus</a>
                                    <a href=\"{{ path('app_admin_entity_edit', {'entityType': 'temoignages', 'id': temoignage.id}) }}\" class=\"btn btn-secondary mb-2 btn-block\">Modifier</a>
                                    <form method=\"post\" action=\"{{ path('app_admin_entity_delete', {'entityType': 'temoignages', 'id': temoignage.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce témoignage ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ temoignage.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger mb-2 btn-block\">Supprimer</button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "admin/admin_dashboard/index.html.twig", "/Applications/MAMP/htdocs/strengthmate/templates/admin/admin_dashboard/index.html.twig");
    }
}
