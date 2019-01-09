<?php

/* @OCPlatform/Advert/view.html.twig */
class __TwigTemplate_7d715a837cfd7e54af1c0f9f9c81a387c515d7d1a2f09881db9277e4fb181583 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "  <div style=\"display: flex;\">
    ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "image", array()))) {
            // line 12
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "image", array()), "alt", array()), "html", null, true);
            echo "\"/>
    ";
        }
        // line 14
        echo "    <div>
      <h2>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
      <i>Par ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
    </div>
  </div>

  <div class=\"well\">
    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "categories", array()), "empty", array())) {
            // line 25
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </p>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if ((twig_length_filter($this->env, ($context["listAdvertSkills"] ?? null)) > 0)) {
            // line 34
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listAdvertSkills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 38
                echo "          <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </ul>
    </div>
  ";
        }
        // line 43
        echo "
  <p>
    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["advert"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>
";
    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  170 => 49,  163 => 45,  159 => 43,  154 => 40,  143 => 38,  139 => 37,  134 => 34,  132 => 33,  129 => 32,  125 => 30,  111 => 29,  105 => 28,  88 => 27,  84 => 25,  82 => 24,  76 => 21,  66 => 16,  62 => 15,  59 => 14,  51 => 12,  49 => 11,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCPlatform/Advert/view.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
