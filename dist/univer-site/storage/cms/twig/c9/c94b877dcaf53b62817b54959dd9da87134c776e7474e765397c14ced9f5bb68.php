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

/* /var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/documents.htm */
class __TwigTemplate_4e26411709e0cb8184ec40ce39b8f00c767cb380ce9c75b7b858b0c1f4c7c23e extends \Twig\Template
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
            echo "<div class=\"info__wrap\">
  <h3 class=\"main-content__subtitle\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "</h3>
  <!-- /.main-content-list__title -->

  <div class=\"main-content-list main-content-list-documents\">
    ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 9);
            echo "
  </div>
  <!-- /.main-content-list -->
</div>
<!-- /.info__wrap -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/documents.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

{% for post in posts %}
<div class=\"info__wrap\">
  <h3 class=\"main-content__subtitle\">{{ post.title }}</h3>
  <!-- /.main-content-list__title -->

  <div class=\"main-content-list main-content-list-documents\">
    {{ post.content_html|raw }}
  </div>
  <!-- /.main-content-list -->
</div>
<!-- /.info__wrap -->
{% endfor %}", "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/documents.htm", "");
    }
}
