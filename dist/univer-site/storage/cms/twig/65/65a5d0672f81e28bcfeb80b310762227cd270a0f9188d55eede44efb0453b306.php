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

/* /var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/bossess.htm */
class __TwigTemplate_e29ccad7705890af381a94c283513f0985fb92a0de5648b4cb4b38a3c7e15036 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "<div class=\"main-content-card\">
  <img src=\"";
            // line 5
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/photo-1.jpg");
            echo "\" alt=\"photo\" class=\"main-content-card__img\">

  <div class=\"main-content-card-text\">
    <h3 class=\"main-content-card__title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</h3>
    <!-- /.main-content-card__title -->
    
    ";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 11);
            echo "
  </div>
  <!-- /.main-content-card-text -->
</div>
<!-- /.main-content-card -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/bossess.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 8,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

{% for post in posts %}
<div class=\"main-content-card\">
  <img src=\"{{ 'assets/images/photo-1.jpg'|theme }}\" alt=\"photo\" class=\"main-content-card__img\">

  <div class=\"main-content-card-text\">
    <h3 class=\"main-content-card__title\">{{ post.title }}</h3>
    <!-- /.main-content-card__title -->
    
    {{ post.content_html|raw }}
  </div>
  <!-- /.main-content-card-text -->
</div>
<!-- /.main-content-card -->
{% endfor %}", "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/bossess.htm", "");
    }
}
