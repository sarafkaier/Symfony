<?php

/* @OCPlatform/Advert/menu.html.twig */
class __TwigTemplate_5fa2da7b2a2a891d0ce7a360e7fa98503708d4d7e094a84fc39b7ca4ae8d9e3d extends Twig_Template
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
";
        // line 4
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "    <li>
      <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->source, $context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  41 => 9,  37 => 8,  34 => 7,  30 => 6,  26 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCPlatform/Advert/menu.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
