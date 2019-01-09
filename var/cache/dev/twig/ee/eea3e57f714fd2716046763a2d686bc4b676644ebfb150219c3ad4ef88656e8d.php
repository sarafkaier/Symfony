<?php

/* @OCPlatform/Advert/form.html.twig */
class __TwigTemplate_8745df6bb6530b7b16a1db80c95198c29b6460b778719595ea328616ddce271b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/form.html.twig"));

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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "
  ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
            echo "
    
  <div class=\"form-group\">
    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
            echo "
    ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "title", array()), 'errors');
            echo "
    <div class=\"col-sm-10\">
      ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>
    
  <div class=\"form-group\">
    ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
            echo "
    ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "content", array()), 'errors');
            echo "
    <div class=\"col-sm-10\">
      ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>
    
  <div class=\"form-group\">
    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur de l'annonce"));
            echo "
    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "author", array()), 'errors');
            echo "
    <div class=\"col-sm-10\">
      ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div> 
    
  <div class=\"form-group col-sm-10\">
    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", true, true)) {
                // line 41
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "date", array()), 'row');
                echo "
    ";
            }
            // line 43
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "image", array()), 'row');
            echo "
  </div>
    
  <div class=\"form-group\">
    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "categories", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Catégorie"));
            echo "
    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "categories", array()), 'errors');
            echo "
      <div class=\"col-sm-10\">
        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo " <br>
        <a href=\"#\" id=\"add_category\" class=\"btn btn-outline-info\">Ajouter une catégorie</a>
      </div>
  </div>
    
  <div class=\"form-group col-sm-10\">
  ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
  </div>
  ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), 'rest');
            echo "
  ";
            // line 59
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  157 => 65,  148 => 59,  144 => 58,  139 => 56,  130 => 50,  125 => 48,  121 => 47,  113 => 43,  107 => 41,  105 => 40,  97 => 35,  92 => 33,  88 => 32,  80 => 27,  75 => 25,  71 => 24,  63 => 19,  58 => 17,  54 => 16,  48 => 13,  44 => 12,  40 => 10,  38 => 9,  35 => 8,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}
<div style=\"padding:5px 0 5px 5px;
            box-shadow:5px;\" class=\"alert alert-primary\">
<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}

{% if form is defined %}

<div class=\"form-group\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
  {{ form_errors(form) }}
    
  <div class=\"form-group\">
    {{ form_label(form.title, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
    {{ form_errors(form.title) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
    
  <div class=\"form-group\">
    {{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
    {{ form_errors(form.content) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
    
  <div class=\"form-group\">
    {{ form_label(form.author, \"Auteur de l'annonce\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
    {{ form_errors(form.author) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div> 
    
  <div class=\"form-group col-sm-10\">
    {% if form.date is defined %}
        {{ form_row(form.date) }}
    {% endif %}
    {{ form_row(form.image) }}
  </div>
    
  <div class=\"form-group\">
    {{ form_label(form.categories, 'Catégorie', {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
    {{ form_errors(form.categories) }}
      <div class=\"col-sm-10\">
        {{ form_widget(form.categories, {'attr': {'class': 'form-control'}}) }} <br>
        <a href=\"#\" id=\"add_category\" class=\"btn btn-outline-info\">Ajouter une catégorie</a>
      </div>
  </div>
    
  <div class=\"form-group col-sm-10\">
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
  </div>
  {{ form_rest(form) }}
  {{ form_end(form) }}
  
</div>
</div>

{% endif %}

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
", "@OCPlatform/Advert/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}
