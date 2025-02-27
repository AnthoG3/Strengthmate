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

/* contact/index.html.twig */
class __TwigTemplate_8b7524f7ef6dc4a6b179c8d184106243 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        yield "Contact";
        
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
        yield "    <h1>Contact</h1>

    ";
        // line 9
        yield "    <form method=\"POST\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_index");
        yield "\">
        <label for=\"name\">Nom :</label>
        <input type=\"text\" name=\"contact[name]\" id=\"name\" required>

        <label for=\"email\">Email :</label>
        <input type=\"email\" name=\"contact[email]\" id=\"email\" required>

        <label for=\"phone\">Téléphone :</label>
        <input type=\"tel\" name=\"contact[phone]\" id=\"phone\" required>

        <label for=\"content\">Message :</label>
        <textarea name=\"contact[content]\" id=\"content\" required></textarea>

        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "_token", [], "any", false, false, false, 22), 'widget');
        yield "

        <button type=\"submit\">Envoyer</button>
    </form>

    ";
        // line 28
        yield "    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            let form = document.querySelector('form');
            if (form) {
                console.log(\"Formulaire détecté ✅\");

                form.addEventListener('submit', function(event) {
                    console.log(\"Tentative de soumission du formulaire...\");

                    if (form.getAttribute('method').toLowerCase() !== 'post') {
                        event.preventDefault();
                        console.warn(\"Le formulaire essayait de se soumettre en GET ! Il est corrigé en POST.\");
                        form.setAttribute('method', 'post');
                        form.submit();
                    }
                });
            } else {
                console.error(\"Le formulaire n'a pas été trouvé ❌\");
            }
        });
    </script>
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
        return "contact/index.html.twig";
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
        return array (  129 => 28,  121 => 22,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
    <h1>Contact</h1>

    {# FORMULAIRE MINIMAL POUR TESTER L’ENVOI EN POST #}
    <form method=\"POST\" action=\"{{ path('app_contact_index') }}\">
        <label for=\"name\">Nom :</label>
        <input type=\"text\" name=\"contact[name]\" id=\"name\" required>

        <label for=\"email\">Email :</label>
        <input type=\"email\" name=\"contact[email]\" id=\"email\" required>

        <label for=\"phone\">Téléphone :</label>
        <input type=\"tel\" name=\"contact[phone]\" id=\"phone\" required>

        <label for=\"content\">Message :</label>
        <textarea name=\"contact[content]\" id=\"content\" required></textarea>

        {{ form_widget(form._token) }}

        <button type=\"submit\">Envoyer</button>
    </form>

    {# TESTER SI LE FORMULAIRE SE SOUMET EN `POST` #}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            let form = document.querySelector('form');
            if (form) {
                console.log(\"Formulaire détecté ✅\");

                form.addEventListener('submit', function(event) {
                    console.log(\"Tentative de soumission du formulaire...\");

                    if (form.getAttribute('method').toLowerCase() !== 'post') {
                        event.preventDefault();
                        console.warn(\"Le formulaire essayait de se soumettre en GET ! Il est corrigé en POST.\");
                        form.setAttribute('method', 'post');
                        form.submit();
                    }
                });
            } else {
                console.error(\"Le formulaire n'a pas été trouvé ❌\");
            }
        });
    </script>
{% endblock %}
", "contact/index.html.twig", "/Applications/MAMP/htdocs/Strengthmate/templates/contact/index.html.twig");
    }
}
