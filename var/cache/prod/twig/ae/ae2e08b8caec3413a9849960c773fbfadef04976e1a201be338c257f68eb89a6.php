<?php

/* @OCPlatform/Advert/translation.html.twig */
class __TwigTemplate_844aab7f61df19dab0fc69a2f81a3cbef8d0dfe92656cd3b981c3af279720f54 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<html>
  <body>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hello", array("%name%" => ($context["name"] ?? null))), "html", null, true);
        echo "
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCPlatform/Advert/translation.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\translation.html.twig");
    }
}
