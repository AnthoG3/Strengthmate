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

/* base.html.twig */
class __TwigTemplate_9461086a0b969f56ec611570d391bf84 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'metatitle' => [$this, 'block_metatitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\"> <!-- Déclaration du type de document HTML5 et la langue de la page -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> <!-- Rendre la page responsive pour les appareils mobiles -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('metatitle', $context, $blocks);
        yield "</title>

    <!-- Intégration de Bootstrap à partir d'un CDN pour la mise en forme réactive et les composants -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">

    <!-- Préconnexion aux serveurs Google Fonts pour améliorer la performance de l'importation des polices -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

    <!-- Importation des polices Google Fonts Inria Sans et Dancing Script -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Bangers&family=Roboto+Slab:wght@100..900&display=swap\" rel=\"stylesheet\">

    <!-- Lien vers un fichier CSS personnalisé pour appliquer des styles spécifiques au projet -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

    <!-- Définition du favicon (petite icône visible dans l'onglet du navigateur) -->
    <link rel=\"shortcut icon\" type=\"image/svg\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/favicon.svg"), "html", null, true);
        yield "\"/>
    </head>

<body>
<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <!-- Bouton burger pour afficher ou masquer le menu sur les petits écrans -->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <!-- Menu de navigation qui se déplie sur les petits écrans -->
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <!-- Liste des éléments du menu -->
                <ul class=\"navbar-nav me-auto custom-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Qui sommes-nous ?</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Nos suivis</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Témoignages</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Contact</a></li>
                    <!-- Icône Instagram avec un lien vers le profil Instagram -->
                    <li class=\"nav-item\">
                        <a href=\"https://www.instagram.com/strength__mate/\" target=\"_blank\" class=\"nav-link\">
                            <img class=\"nav-icon\" src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/instagram.svg"), "html", null, true);
        yield "\" alt=\"instagram\" aria-hidden=\"true\">
                            <span class=\"visually-hidden\">Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Section principale où le contenu dynamique de chaque page sera injecté -->
<main class=\"container my-0\">
    ";
        // line 61
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 63
        yield "</main>

<!-- Pied de page avec des informations de contact et un lien vers le haut de la page -->
<footer class=\"text-dark py-3 mt-5\" style=\"background-color: rgb(240,237,228); font-family: Playwrite, serif;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-12 text-center d-flex justify-content-center align-items-center\">
                <!-- Copyright et informations de contact -->
                <p class=\"mb-0 me-3\">Copyright &copy; 2025 Strength Mate. Tous droits réservés.<br></p>
                <div class=\"up\">
                    <!-- Lien pour remonter en haut de la page -->
                    <a href=\"#accueil\">
                        <img src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/image/arrow.png"), "html", null, true);
        yield "\" alt=\"arrow_up\">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Script Bootstrap pour activer les fonctionnalités de la navbar, gestion du menu burger et autres composants interactifs -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
        crossorigin=\"anonymous\"></script>

</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  205 => 62,  192 => 61,  170 => 8,  143 => 75,  129 => 63,  127 => 61,  113 => 50,  102 => 42,  83 => 26,  77 => 23,  59 => 8,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\"> <!-- Déclaration du type de document HTML5 et la langue de la page -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> <!-- Rendre la page responsive pour les appareils mobiles -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>{% block metatitle %}{% endblock metatitle %}</title>

    <!-- Intégration de Bootstrap à partir d'un CDN pour la mise en forme réactive et les composants -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">

    <!-- Préconnexion aux serveurs Google Fonts pour améliorer la performance de l'importation des polices -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

    <!-- Importation des polices Google Fonts Inria Sans et Dancing Script -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Bangers&family=Roboto+Slab:wght@100..900&display=swap\" rel=\"stylesheet\">

    <!-- Lien vers un fichier CSS personnalisé pour appliquer des styles spécifiques au projet -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

    <!-- Définition du favicon (petite icône visible dans l'onglet du navigateur) -->
    <link rel=\"shortcut icon\" type=\"image/svg\" href=\"{{ asset('assets/image/favicon.svg') }}\"/>
    </head>

<body>
<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <!-- Bouton burger pour afficher ou masquer le menu sur les petits écrans -->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <!-- Menu de navigation qui se déplie sur les petits écrans -->
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <!-- Liste des éléments du menu -->
                <ul class=\"navbar-nav me-auto custom-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Qui sommes-nous ?</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Nos suivis</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Témoignages</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\">Contact</a></li>
                    <!-- Icône Instagram avec un lien vers le profil Instagram -->
                    <li class=\"nav-item\">
                        <a href=\"https://www.instagram.com/strength__mate/\" target=\"_blank\" class=\"nav-link\">
                            <img class=\"nav-icon\" src=\"{{ asset('assets/image/instagram.svg') }}\" alt=\"instagram\" aria-hidden=\"true\">
                            <span class=\"visually-hidden\">Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Section principale où le contenu dynamique de chaque page sera injecté -->
<main class=\"container my-0\">
    {% block body %}
    {% endblock %}
</main>

<!-- Pied de page avec des informations de contact et un lien vers le haut de la page -->
<footer class=\"text-dark py-3 mt-5\" style=\"background-color: rgb(240,237,228); font-family: Playwrite, serif;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-12 text-center d-flex justify-content-center align-items-center\">
                <!-- Copyright et informations de contact -->
                <p class=\"mb-0 me-3\">Copyright &copy; 2025 Strength Mate. Tous droits réservés.<br></p>
                <div class=\"up\">
                    <!-- Lien pour remonter en haut de la page -->
                    <a href=\"#accueil\">
                        <img src=\"{{ asset('assets/image/arrow.png') }}\" alt=\"arrow_up\">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Script Bootstrap pour activer les fonctionnalités de la navbar, gestion du menu burger et autres composants interactifs -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\"
        crossorigin=\"anonymous\"></script>

</body>
</html>

", "base.html.twig", "/Applications/MAMP/htdocs/strengthmate/templates/base.html.twig");
    }
}
