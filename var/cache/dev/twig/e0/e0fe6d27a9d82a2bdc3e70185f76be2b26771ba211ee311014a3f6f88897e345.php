<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* auth/index.html.twig */
class __TwigTemplate_9103d0d70e7bdc73ee060e400095b612737fdac990eff0e23961871ad28c09f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AuthController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>Login 08</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

\t</head>
\t<body>
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 text-center mb-5\">
\t\t\t\t\t<h2 class=\"heading-section\">Login to FSEGN-VIP</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t<div class=\"login-wrap p-4 p-md-5\">
\t\t      \t<div class=\"icon d-flex align-items-center justify-content-center\">
\t\t      \t\t<span class=\"fa fa-user-o\"></span>
\t\t      \t</div>
\t\t      \t<h3 class=\"text-center mb-4\">Have an account?</h3>
\t\t\t\t\t\t<form action=\"#\" class=\"login-form\">
\t\t      \t\t<div class=\"form-group\">
\t\t      \t\t\t<input type=\"text\" class=\"form-control rounded-left\" placeholder=\"Username\" required>
\t\t      \t\t</div>
\t            <div class=\"form-group d-flex\">
\t              <input type=\"password\" class=\"form-control rounded-left\" placeholder=\"Password\" required>
\t            </div>
\t            <div class=\"form-group d-md-flex\">
\t\t\t\t\t\t\t\t<div class=\"w-50 text-md-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t</div>
\t            </div>
\t            <div class=\"form-group\">
\t            \t<button type=\"submit\" class=\"btn btn-primary rounded submit p-3 px-5\">Get Started</button>
\t            </div>
\t          </form>
\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.js\" "), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

\t</body>
</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auth/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  152 => 59,  148 => 58,  144 => 57,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AuthController!{% endblock %}

{% block body %}
<!doctype html>
<html lang=\"en\">
  <head>
  \t<title>Login 08</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t<link rel=\"stylesheet\" href=\"{{ asset ('css/style.css') }}\">

\t</head>
\t<body>
\t<section class=\"ftco-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 text-center mb-5\">
\t\t\t\t\t<h2 class=\"heading-section\">Login to FSEGN-VIP</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6 col-lg-5\">
\t\t\t\t\t<div class=\"login-wrap p-4 p-md-5\">
\t\t      \t<div class=\"icon d-flex align-items-center justify-content-center\">
\t\t      \t\t<span class=\"fa fa-user-o\"></span>
\t\t      \t</div>
\t\t      \t<h3 class=\"text-center mb-4\">Have an account?</h3>
\t\t\t\t\t\t<form action=\"#\" class=\"login-form\">
\t\t      \t\t<div class=\"form-group\">
\t\t      \t\t\t<input type=\"text\" class=\"form-control rounded-left\" placeholder=\"Username\" required>
\t\t      \t\t</div>
\t            <div class=\"form-group d-flex\">
\t              <input type=\"password\" class=\"form-control rounded-left\" placeholder=\"Password\" required>
\t            </div>
\t            <div class=\"form-group d-md-flex\">
\t\t\t\t\t\t\t\t<div class=\"w-50 text-md-right\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t\t\t</div>
\t            </div>
\t            <div class=\"form-group\">
\t            \t<button type=\"submit\" class=\"btn btn-primary rounded submit p-3 px-5\">Get Started</button>
\t            </div>
\t          </form>
\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<script src=\"{{ asset ('js/jquery.min.js') }}\"></script>
  <script src=\"{{ asset ('js/popper.js\" ') }}\"></script>
  <script src=\"{{ asset ('js/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset ('js/main.js') }}\"></script>

\t</body>
</html>


{% endblock %}
", "auth/index.html.twig", "/home/mmo/workspace/symphony/my-project/templates/auth/index.html.twig");
    }
}
