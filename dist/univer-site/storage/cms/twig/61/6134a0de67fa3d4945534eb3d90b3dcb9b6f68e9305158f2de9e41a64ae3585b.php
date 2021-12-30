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

/* /var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/pages/about.htm */
class __TwigTemplate_754a3ac59fe89edd2b86ee4b136735774f78d16ba024fa5cd6e39022efdb6691 extends \Twig\Template
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
        echo "<main class=\"container main\">
    <nav class=\"main-sidebar\">
      <h2 class=\"main-sidebar__title\">
        <div class=\"main-sidebar__title-text\">Меню</div>
        <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/down-arrow_dark.svg");
        echo "\" class=\"header-list__link-arrow main-sidebar__title-icon\">
      </h2>
      <!-- /.main-sidebar__title -->

      <ul class=\"main-sidebar-list\">
        <li class=\"main-sidebar-list__item\">
          <a href=\"#about-college\" class=\"main-sidebar-list__link active\">Об университете</a>
        </li>
        <!-- /.main-sidebar-list__item -->
        <li class=\"main-sidebar-list__item\">
          <a href=\"#history\" class=\"main-sidebar-list__link\">История</a>
        </li>
        <!-- /.main-sidebar-list__item -->
        <li class=\"main-sidebar-list__item\">
          <a href=\"#bosses\" class=\"main-sidebar-list__link\">Руководители</a>
        </li>
        <!-- /.main-sidebar-list__item -->
      </ul>
      <!-- /.main-sidebar-list -->
    </nav>
    <!-- /.main-sidebar -->

    <section id=\"about-college\" class=\"main-content visible\">
      <!-- About -->
      ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("info"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "    </section>

    <section id=\"history\" class=\"main-content hidden\">
      ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("history"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "    </section>

    <section id=\"bosses\" class=\"main-content hidden\">
      <h2 class=\"main-content__title\">Руководители</h2>
      <!-- /.main-content__title -->

      ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bossess"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "    </section>
    <!-- /.main-content -->
  </main>";
    }

    public function getTemplateName()
    {
        return "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 41,  91 => 40,  83 => 34,  79 => 33,  74 => 30,  70 => 29,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"container main\">
    <nav class=\"main-sidebar\">
      <h2 class=\"main-sidebar__title\">
        <div class=\"main-sidebar__title-text\">Меню</div>
        <img src=\"{{ 'assets/images/down-arrow_dark.svg'|theme }}\" class=\"header-list__link-arrow main-sidebar__title-icon\">
      </h2>
      <!-- /.main-sidebar__title -->

      <ul class=\"main-sidebar-list\">
        <li class=\"main-sidebar-list__item\">
          <a href=\"#about-college\" class=\"main-sidebar-list__link active\">Об университете</a>
        </li>
        <!-- /.main-sidebar-list__item -->
        <li class=\"main-sidebar-list__item\">
          <a href=\"#history\" class=\"main-sidebar-list__link\">История</a>
        </li>
        <!-- /.main-sidebar-list__item -->
        <li class=\"main-sidebar-list__item\">
          <a href=\"#bosses\" class=\"main-sidebar-list__link\">Руководители</a>
        </li>
        <!-- /.main-sidebar-list__item -->
      </ul>
      <!-- /.main-sidebar-list -->
    </nav>
    <!-- /.main-sidebar -->

    <section id=\"about-college\" class=\"main-content visible\">
      <!-- About -->
      {% partial 'info' %}
    </section>

    <section id=\"history\" class=\"main-content hidden\">
      {% partial 'history' %}
    </section>

    <section id=\"bosses\" class=\"main-content hidden\">
      <h2 class=\"main-content__title\">Руководители</h2>
      <!-- /.main-content__title -->

      {% partial 'bossess' %}
    </section>
    <!-- /.main-content -->
  </main>", "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/pages/about.htm", "");
    }
}
