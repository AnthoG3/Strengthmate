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

/* home.html.twig */
class __TwigTemplate_7c6a357f87080f0b02eef1a47b021f61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        yield "Strength mate";
        
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
    </div>
    <img class=\"home_wall\" src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/logo.png"), "html", null, true);
        yield "\" alt=\"logo.accueil\">

    <div class=\"cards-wrapper mx-auto\" style=\"max-width: 1000px;\">
        <div class=\"row\" style=\"margin-bottom: 200px;\">
            <div class=\"col-md-5\">
                <div class=\"card position-relative\" style=\"width: 450px; height: 300px;\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presentation_index");
        yield "\" class=\"stretched-link\"></a>
                    <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/couple.jpg"), "html", null, true);
        yield "\" alt=\"coach\">
                    <div class=\"card__content\">
                        <h1 class=\"card__title\">Qui sommes-nous ?</h1>
                        <p class=\"card__description\">
                            Nous sommes deux passionnés de musculation et de fitness, offrant des conseils,
                            des programmes d'entraînement et du contenu motivant pour aider chacun à atteindre ses objectifs de force et de condition physique.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"col-md-5 offset-md-2\">
                <div class=\"card position-relative\" style=\"width: 450px; height: 300px;\">
                    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivis_index");
        yield "\" class=\"stretched-link\"></a>
                    <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/nutri.jpg"), "html", null, true);
        yield "\" alt=\"nutrition\">
                    <div class=\"card__content\">
                        <h1 class=\"card__title\">Nos suivis</h1>
                        <p class=\"card__description\">
                            Chez Strength Mate, nous vous accompagnons avec des suivis personnalisés pour optimiser
                            vos performances. Plans d'entraînement, conseils nutritionnels et motivation :
                            tout est conçu pour vous aider à atteindre vos objectifs efficacement.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\" style=\"margin-bottom: 200px;\">
            <div class=\"col-md-5\">
                <div class=\"card position-relative\" style=\"width: 450px; height: 300px;\">
                    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temoignages_index");
        yield "\" class=\"stretched-link\"></a>
                    <img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/avis.jpg"), "html", null, true);
        yield "\" alt=\"avis\">
                    <div class=\"card__content\">
                        <h1 class=\"card__title\">Témoignages</h1>
                        <p class=\"card__description\">
                            Nos membres partagent leur évolution avec vous ! Grâce à nos suivis et conseils, ils atteignent leurs objectifs et repoussent leurs limites. Rejoignez-nous et écrivez votre propre succès !
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 offset-md-2\">
                <div class=\"card position-relative\" style=\"width: 450px; height: 300px;\">
                    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_index");
        yield "\" class=\"stretched-link\"></a>
                    <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/contact.jpg"), "html", null, true);
        yield "\" alt=\"contact\">
                    <div class=\"card__content\">
                        <h1 class=\"card__title\">Contact</h1>
                        <p class=\"card__description\">
                            Une question ou besoin d'un suivi ?
                            Nous sommes à votre écoute ! Contactez-nous pour un accompagnement personnalisé et des conseils adaptés à vos objectifs.
                        </p>
                    </div>
                </div>
            </div>
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
        return "home.html.twig";
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
        return array (  178 => 58,  174 => 57,  160 => 46,  156 => 45,  137 => 29,  133 => 28,  117 => 15,  113 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home.html.twig", "/Applications/MAMP/htdocs/strengthmate/templates/home.html.twig");
    }
}
