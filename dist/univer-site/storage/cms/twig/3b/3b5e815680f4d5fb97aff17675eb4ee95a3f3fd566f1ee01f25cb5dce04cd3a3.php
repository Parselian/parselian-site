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

/* /var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/header-home.htm */
class __TwigTemplate_bebe7a764d5fd17fa8f7808c5d53652cda09ad15b62a38a1733fa724e6949630 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header\">
  <ul class=\"burger-menu\">
    <svg id=\"burger-menu-btn\" class=\"ham hamRotate ham4 burger-menu__close\" viewBox=\"0 0 100 100\" width=\"60\">
      <path class=\"line top\" d=\"m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20\" />
      <path class=\"line middle\" d=\"m 70,50 h -40\" />
      <path class=\"line bottom\"
        d=\"m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20\" />
    </svg>
    ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("simpleMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "    <!-- /.burger-menu__item -->
    <li class=\"burger-menu__item\">
      <a href=\"https://jellar-web.ru/dist/abiturient/index.php\" class=\"burger-menu__link burger-menu-button\">
        <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/log-in.svg");
        echo "\" alt=\"вход\" class=\"burger-menu-button__img\">
        <span class=\"burger-menu-button__text\">Войти</span>
      </a>
    </li>
    <!-- /.burger-menu__item -->
  </ul>
  <!-- /.burger-menu -->

  <div class=\"container header-wrap header-wrap_fixed\">
    <a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" class=\"header-logo\">
      <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"лого ВУЗа\" class=\"header-logo__img\">
    </a>
    <!-- /.header__link -->

    <ul class=\"header-list\">
                <li class=\"header-list__item \">
        \t            <a href=\"https://jellar-web.ru/dist/univer-site/about\" class=\"\">Об организации</a>
                    </li>
            <li class=\"header-list__item \">
        \t            <a href=\"https://jellar-web.ru/dist/univer-site/receipt\" class=\"\">Поступление</a>
                    </li>
    
    </ul>

    <svg id=\"burger-btn\" class=\"ham hamRotate ham4 header-burger__btn\" viewBox=\"0 0 100 100\" width=\"60\">
      <path class=\"line top\" d=\"m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20\" />
      <path class=\"line middle\" d=\"m 70,50 h -40\" />
      <path class=\"line bottom\"
        d=\"m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20\" />
    </svg>

    <div class=\"buttons-wrap\">
      <a href=\"https://jellar-web.ru/dist/abiturient/index.php\" class=\"button button-authorization\">
        <span class=\"button-authorization__text\">Войти</span>
        <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/log-in.svg");
        echo "\" alt=\"log-in\" class=\"button-authorization__img\">
      </a>
      <!-- /.authoriation__button -->
    </div>
    <!-- /.buttons-wrap -->
  </div>
  <!-- /.container -->

  <div class=\"slider\">
    <div class=\"slider-wrap\">
      <div class=\"slider-slide slider-slide_active\">
        <img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-1.jpg");
        echo "\" alt=\"photo\" class=\"slider-slide__img\">
      </div>
      <!-- /.slider__slide -->
      <div class=\"slider-slide\">
        <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" alt=\"photo\" class=\"slider-slide__img\">
      </div>
      <!-- /.slider__slide -->
      <div class=\"slider-slide\">
        <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-3.png");
        echo "\" alt=\"photo\" class=\"slider-slide__img\">
      </div>
      <!-- /.slider__slide -->
    </div>
    <!-- /.slider-wrap -->

    <ul class=\"slider-dots\">
      <div class=\"slider__arrow slider__arrow_prev\"></div>
      <div class=\"slider__arrow slider__arrow_next\"></div>
    </ul>
    <!-- /.slider-dots -->
  </div>
  <!-- /.slider -->
</header>
<!-- /.header -->";
    }

    public function getTemplateName()
    {
        return "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/header-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 66,  120 => 62,  113 => 58,  99 => 47,  72 => 23,  68 => 22,  56 => 13,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header\">
  <ul class=\"burger-menu\">
    <svg id=\"burger-menu-btn\" class=\"ham hamRotate ham4 burger-menu__close\" viewBox=\"0 0 100 100\" width=\"60\">
      <path class=\"line top\" d=\"m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20\" />
      <path class=\"line middle\" d=\"m 70,50 h -40\" />
      <path class=\"line bottom\"
        d=\"m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20\" />
    </svg>
    {% component 'simpleMenu' %}
    <!-- /.burger-menu__item -->
    <li class=\"burger-menu__item\">
      <a href=\"https://jellar-web.ru/dist/abiturient/index.php\" class=\"burger-menu__link burger-menu-button\">
        <img src=\"{{ 'assets/images/log-in.svg'|theme }}\" alt=\"вход\" class=\"burger-menu-button__img\">
        <span class=\"burger-menu-button__text\">Войти</span>
      </a>
    </li>
    <!-- /.burger-menu__item -->
  </ul>
  <!-- /.burger-menu -->

  <div class=\"container header-wrap header-wrap_fixed\">
    <a href=\"{{ ''|page }}\" class=\"header-logo\">
      <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"лого ВУЗа\" class=\"header-logo__img\">
    </a>
    <!-- /.header__link -->

    <ul class=\"header-list\">
                <li class=\"header-list__item \">
        \t            <a href=\"https://jellar-web.ru/dist/univer-site/about\" class=\"\">Об организации</a>
                    </li>
            <li class=\"header-list__item \">
        \t            <a href=\"https://jellar-web.ru/dist/univer-site/receipt\" class=\"\">Поступление</a>
                    </li>
    
    </ul>

    <svg id=\"burger-btn\" class=\"ham hamRotate ham4 header-burger__btn\" viewBox=\"0 0 100 100\" width=\"60\">
      <path class=\"line top\" d=\"m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20\" />
      <path class=\"line middle\" d=\"m 70,50 h -40\" />
      <path class=\"line bottom\"
        d=\"m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20\" />
    </svg>

    <div class=\"buttons-wrap\">
      <a href=\"https://jellar-web.ru/dist/abiturient/index.php\" class=\"button button-authorization\">
        <span class=\"button-authorization__text\">Войти</span>
        <img src=\"{{ 'assets/images/log-in.svg'|theme }}\" alt=\"log-in\" class=\"button-authorization__img\">
      </a>
      <!-- /.authoriation__button -->
    </div>
    <!-- /.buttons-wrap -->
  </div>
  <!-- /.container -->

  <div class=\"slider\">
    <div class=\"slider-wrap\">
      <div class=\"slider-slide slider-slide_active\">
        <img src=\"{{ 'assets/images/slide-1.jpg'|theme }}\" alt=\"photo\" class=\"slider-slide__img\">
      </div>
      <!-- /.slider__slide -->
      <div class=\"slider-slide\">
        <img src=\"{{ 'assets/images/slide-2.jpg'|theme }}\" alt=\"photo\" class=\"slider-slide__img\">
      </div>
      <!-- /.slider__slide -->
      <div class=\"slider-slide\">
        <img src=\"{{ 'assets/images/slide-3.png'|theme }}\" alt=\"photo\" class=\"slider-slide__img\">
      </div>
      <!-- /.slider__slide -->
    </div>
    <!-- /.slider-wrap -->

    <ul class=\"slider-dots\">
      <div class=\"slider__arrow slider__arrow_prev\"></div>
      <div class=\"slider__arrow slider__arrow_next\"></div>
    </ul>
    <!-- /.slider-dots -->
  </div>
  <!-- /.slider -->
</header>
<!-- /.header -->", "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/partials/header-home.htm", "");
    }
}
