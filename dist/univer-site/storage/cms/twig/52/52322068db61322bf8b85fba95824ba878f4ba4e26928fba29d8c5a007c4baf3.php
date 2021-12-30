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

/* /var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/pages/home.htm */
class __TwigTemplate_9174f4e956802493e505b636faea43263ccfccfebff38783fb75edb4980a5772 extends \Twig\Template
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
        echo "<section class=\"about\">
    <div class=\"container about-wrap\">
      <div class=\"about-text\">
        <h2 class=\"about-text__title\">Кратко о нас</h2>
        <p class=\"about-text__info\">
          Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Равным образом рамки и место обучения кадров в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.

            Товарищи! рамки и место обучения кадров влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. Задача организации, в особенности же новая модель организационной деятельности в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Равным образом постоянный количественный рост и сфера нашей активности требуют от нас анализа форм развития. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности требуют от нас анализа соответствующий условий активизации. Не следует, однако забывать, что рамки и место обучения кадров требуют от нас анализа системы обучения кадров, соответствует насущным потребностям.
        </p>
      </div>
      <!-- /.about__text -->
      <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/college.jpg");
        echo "\" alt=\"университет\" class=\"about__img\">
    </div>
    <!-- /.conteiner about-wrap -->
  </section>
  <!-- /.about -->";
    }

    public function getTemplateName()
    {
        return "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"about\">
    <div class=\"container about-wrap\">
      <div class=\"about-text\">
        <h2 class=\"about-text__title\">Кратко о нас</h2>
        <p class=\"about-text__info\">
          Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Равным образом рамки и место обучения кадров в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.

            Товарищи! рамки и место обучения кадров влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. Задача организации, в особенности же новая модель организационной деятельности в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Равным образом постоянный количественный рост и сфера нашей активности требуют от нас анализа форм развития. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности требуют от нас анализа соответствующий условий активизации. Не следует, однако забывать, что рамки и место обучения кадров требуют от нас анализа системы обучения кадров, соответствует насущным потребностям.
        </p>
      </div>
      <!-- /.about__text -->
      <img src=\"{{ 'assets/images/college.jpg'|theme }}\" alt=\"университет\" class=\"about__img\">
    </div>
    <!-- /.conteiner about-wrap -->
  </section>
  <!-- /.about -->", "/var/www/vyach392/data/www/jellar-web.ru/dist/univer-site/themes/univer-site/pages/home.htm", "");
    }
}
