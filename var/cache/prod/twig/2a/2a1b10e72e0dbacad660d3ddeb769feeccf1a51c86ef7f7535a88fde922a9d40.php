<?php

/* @OCPlatform/Advert/form.html.twig */
class __TwigTemplate_3123cbe6d0ac9d3d296103adc316ed13c759bf232c34e5c6b4234e6fa4859275 extends Twig_Template
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
        echo "<div style=\"padding:5px 0 5px 5px;
            box-shadow:5px;\" class=\"alert alert-primary\">
<h3>Formulaire d'annonce</h3>

";
        // line 8
        echo "
";
        // line 9
        if ((isset($context["form"]) || array_key_exists("form", $context))) {
            // line 10
            echo "
<div class=\"form-group\">
  ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "
  ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    
  <div class=\"form-group\">
    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
            echo "
    ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'errors');
            echo "
    <div class=\"col-sm-10\">
      ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>
    
  <div class=\"form-group\">
    ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
            echo "
    ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'errors');
            echo "
    <div class=\"col-sm-10\">
      ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>
    
  <div class=\"form-group\">
    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur de l'annonce"));
            echo "
    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "author", array()), 'errors');
            echo "
    <div class=\"col-sm-10\">
      ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div> 
    
  <div class=\"form-group col-sm-10\">
    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", true, true)) {
                // line 41
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'row');
                echo "
    ";
            }
            // line 43
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array()), 'row');
            echo "
  </div>
    
  <div class=\"form-group\">
    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Catégorie"));
            echo "
    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'errors');
            echo "
      <div class=\"col-sm-10\">
        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo " <br>
        <a href=\"#\" id=\"add_category\" class=\"btn btn-outline-info\">Ajouter une catégorie</a>
      </div>
  </div>
    
  <div class=\"form-group col-sm-10\">
  ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
  </div>
  ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
  ";
            // line 59
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
  
</div>
</div>

";
        }
        // line 65
        echo "
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        var \$container = \$('div#oc_platformbundle_advert_categories');
        var index = \$container.find(':input').length;
        
        \$('#add_category').click(function(e){
            addCategory(\$container);
            e.preventDefault();
            return false;
        });
        
        
        if (index == 0){
            addCategory(\$container);
        } else {
            \$container.children('div').each(function(){
                addDeleteLink(\$(this));
            });
        }
        
        
        function addCategory(\$container){
            var template = \$container.attr('data-prototype')
                .replace(/__name__label__/g, 'Ajoutez une catégorie')
                .replace(/__name__/g, index);
            var \$prototype = \$(template);
            addDeleteLink(\$prototype);
            \$container.append(\$prototype);
            index++;
        }
        
        function addDeleteLink(\$prototype){
            var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-outline-danger\">Supprimer</a>');
            \$prototype.append(\$deleteLink);
            \$deleteLink.click(function(e){
                \$prototype.remove();
                e.preventDefault();
                index--;
                return false;
            });
        }    
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  142 => 59,  138 => 58,  133 => 56,  124 => 50,  119 => 48,  115 => 47,  107 => 43,  101 => 41,  99 => 40,  91 => 35,  86 => 33,  82 => 32,  74 => 27,  69 => 25,  65 => 24,  57 => 19,  52 => 17,  48 => 16,  42 => 13,  38 => 12,  34 => 10,  32 => 9,  29 => 8,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCPlatform/Advert/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}
