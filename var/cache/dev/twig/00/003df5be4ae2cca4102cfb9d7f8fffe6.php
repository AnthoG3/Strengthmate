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
class __TwigTemplate_b1d67bd607deadb2cb12b060f9b40683 extends Template
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

            <!-- Section Témoignages -->
            <h2 class=\"mb-3\">Témoignages</h2>
            <a href=\"";
        // line 12
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["temoignages"]) || array_key_exists("temoignages", $context) ? $context["temoignages"] : (function () { throw new RuntimeError('Variable "temoignages" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
            // line 24
            yield "                    <tr>
                        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "title", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "content", [], "any", false, false, false, 26), 0, 50), "html", null, true);
            yield "...</td>
                        <td class=\"text-center\">
                            <div class=\"rating-dashboard\">
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                yield "                                    <span class=\"star ";
                yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "rating", [], "any", false, false, false, 30))) ? ("filled") : (""));
                yield "\">★</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                            </div>
                        </td>
                        <td>
                            <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            <form action=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "temoignages", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["temoignage"], "id", [], "any", false, false, false, 38))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce témoignage ?');\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 43
        if (!$context['_iterated']) {
            // line 44
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center\">Aucun témoignage disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['temoignage'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                </tbody>
            </table>

            <!-- Section Présentations -->
            <h2 class=\"mt-5 mb-3\">Présentations</h2>
            <a href=\"";
        // line 53
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
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["presentations"]) || array_key_exists("presentations", $context) ? $context["presentations"] : (function () { throw new RuntimeError('Variable "presentations" does not exist.', 63, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 64
            yield "                    <tr>
                        <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "title", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                        <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "content", [], "any", false, false, false, 66), 0, 50), "html", null, true);
            yield "...</td>
                        <td>
                            <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            <form action=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "presentation", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 71))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette présentation ?');\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "                    <tr>
                        <td colspan=\"3\" class=\"text-center\">Aucune présentation disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['presentation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </tbody>
            </table>

            <!-- Section Suivis -->
            <h2 class=\"mt-5 mb-3\">Suivis</h2>
            <a href=\"";
        // line 86
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 96, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["suivi"]) {
            // line 97
            yield "                    <tr>
                        <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "title", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                        <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "content", [], "any", false, false, false, 99), 0, 50), "html", null, true);
            yield "...</td>
                        <td>
                            <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_show", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_edit", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            <form action=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entity_delete", ["entityType" => "suivis", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 104))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce suivi ?');\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 109
        if (!$context['_iterated']) {
            // line 110
            yield "                    <tr>
                        <td colspan=\"3\" class=\"text-center\">Aucun suivi disponible.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['suivi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
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
        return array (  331 => 114,  322 => 110,  320 => 109,  310 => 104,  306 => 103,  302 => 102,  298 => 101,  293 => 99,  289 => 98,  286 => 97,  281 => 96,  268 => 86,  261 => 81,  252 => 77,  250 => 76,  240 => 71,  236 => 70,  232 => 69,  228 => 68,  223 => 66,  219 => 65,  216 => 64,  211 => 63,  198 => 53,  191 => 48,  182 => 44,  180 => 43,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  153 => 32,  144 => 30,  140 => 29,  134 => 26,  130 => 25,  127 => 24,  122 => 23,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_dashboard/index.html.twig", "/Applications/MAMP/htdocs/Strengthmate/templates/admin/admin_dashboard/index.html.twig");
    }
}
