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
class __TwigTemplate_5fe16473fb73ec138d1f80dee26c80d1 extends Template
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

        yield "Tableau de bord admin | Strengthmate";
        
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
        yield "    <div class=\"admin-dashboard\">
        <div class=\"container mt-5\">
            <h1 class=\"text-center mb-4\">Tableau de bord administrateur</h1>

            <!-- Section Présentations -->
            <h2 class=\"mb-3 text-start\">Présentations</h2>
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_create", ["entityType" => "presentation"]);
        yield "\" class=\"btn btn-success mb-3\">Ajouter une présentation</a>
            <table class=\"table table-dark table-striped\">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["presentations"]) || array_key_exists("presentations", $context) ? $context["presentations"] : (function () { throw new RuntimeError('Variable "presentations" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 23
            yield "                    <tr>
                        <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "title", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "content", [], "any", false, false, false, 25), 0, 50), "html", null, true);
            yield "...</td>
                        <td>
                            <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            <form action=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 30))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette présentation ?');\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 35
        if (!$context['_iterated']) {
            // line 36
            yield "                    <tr>
                        <td colspan=\"3\" class=\"text-center\">Aucune présentation disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['presentation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                </tbody>
            </table>

            <!-- Section Suivis -->
            <h2 class=\"mt-5 mb-3 text-start\">Suivis</h2>
            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_create", ["entityType" => "suivis"]);
        yield "\" class=\"btn btn-success mb-3\">Ajouter un suivi</a>
            <table class=\"table table-dark table-striped\">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["suivi"]) {
            // line 56
            yield "                    <tr>
                        <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "title", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                        <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "content", [], "any", false, false, false, 58), 0, 50), "html", null, true);
            yield "...</td>
                        <td>
                            <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            <form action=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 63))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ?');\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 68
        if (!$context['_iterated']) {
            // line 69
            yield "                    <tr>
                        <td colspan=\"3\" class=\"text-center\">Aucun suivi disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['suivi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "                </tbody>
            </table>

            <!-- Section Témoignages -->
            <h2 class=\"mt-5 mb-3 text-start\">Témoignages</h2>
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_create", ["entityType" => "temoignages"]);
        yield "\" class=\"btn btn-success mb-3\">Ajouter un témoignage</a>
            <table class=\"table table-dark table-striped\">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th class=\"align-middle text-center\">Note</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["temoignages"]) || array_key_exists("temoignages", $context) ? $context["temoignages"] : (function () { throw new RuntimeError('Variable "temoignages" does not exist.', 89, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
            // line 90
            yield "                    <tr>
                        <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "title", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                        <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "content", [], "any", false, false, false, 92), 0, 50), "html", null, true);
            yield "...</td>
                        <td class=\"text-center\">
                            <div class=\"rating\">
                                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 96
                yield "                                    <input type=\"radio\" id=\"star";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 96), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" name=\"rating[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 96), "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" ";
                if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "rating", [], "any", false, false, false, 96))) {
                    yield "checked";
                }
                yield " disabled/>
                                    <label for=\"star";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 97), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield " stars\">★</label>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                            </div>
                        </td>
                        <td>
                            <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            <form action=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 105))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce témoignage ?');\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 110
        if (!$context['_iterated']) {
            // line 111
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center\">Aucun témoignage disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['temoignage'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "                </tbody>
            </table>
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
        return array (  349 => 115,  340 => 111,  338 => 110,  328 => 105,  324 => 104,  320 => 103,  316 => 102,  311 => 99,  299 => 97,  284 => 96,  280 => 95,  274 => 92,  270 => 91,  267 => 90,  262 => 89,  248 => 78,  241 => 73,  232 => 69,  230 => 68,  220 => 63,  216 => 62,  212 => 61,  208 => 60,  203 => 58,  199 => 57,  196 => 56,  191 => 55,  178 => 45,  171 => 40,  162 => 36,  160 => 35,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  133 => 25,  129 => 24,  126 => 23,  121 => 22,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_dashboard/index.html.twig", "/Applications/MAMP/htdocs/strengthmate/templates/admin/admin_dashboard/index.html.twig");
    }
}
