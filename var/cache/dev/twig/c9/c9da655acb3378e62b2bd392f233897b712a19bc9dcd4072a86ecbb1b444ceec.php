<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_a93338cbd748ce6f4688999482470fc650fc1880887c7e4e364f085839f12335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a4dd099b025a77105d5718a1cf1cfbf661a0c4629f92b97c8c41264231e9496 = $this->env->getExtension("native_profiler");
        $__internal_5a4dd099b025a77105d5718a1cf1cfbf661a0c4629f92b97c8c41264231e9496->enter($__internal_5a4dd099b025a77105d5718a1cf1cfbf661a0c4629f92b97c8c41264231e9496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a4dd099b025a77105d5718a1cf1cfbf661a0c4629f92b97c8c41264231e9496->leave($__internal_5a4dd099b025a77105d5718a1cf1cfbf661a0c4629f92b97c8c41264231e9496_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4ca4f26b736a5376615f0840ce6b5bc4f69fc77f301dafe80883701f1b2ca60 = $this->env->getExtension("native_profiler");
        $__internal_a4ca4f26b736a5376615f0840ce6b5bc4f69fc77f301dafe80883701f1b2ca60->enter($__internal_a4ca4f26b736a5376615f0840ce6b5bc4f69fc77f301dafe80883701f1b2ca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4ca4f26b736a5376615f0840ce6b5bc4f69fc77f301dafe80883701f1b2ca60->leave($__internal_a4ca4f26b736a5376615f0840ce6b5bc4f69fc77f301dafe80883701f1b2ca60_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_256a2bf6d4fc6dd492c44390a6b563e208414407cbe902ea1ed012f79cbc6d49 = $this->env->getExtension("native_profiler");
        $__internal_256a2bf6d4fc6dd492c44390a6b563e208414407cbe902ea1ed012f79cbc6d49->enter($__internal_256a2bf6d4fc6dd492c44390a6b563e208414407cbe902ea1ed012f79cbc6d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_256a2bf6d4fc6dd492c44390a6b563e208414407cbe902ea1ed012f79cbc6d49->leave($__internal_256a2bf6d4fc6dd492c44390a6b563e208414407cbe902ea1ed012f79cbc6d49_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5358ba3499d7808567ececdc08af7a0ad22680aea7142f4b1757d68292fdfb07 = $this->env->getExtension("native_profiler");
        $__internal_5358ba3499d7808567ececdc08af7a0ad22680aea7142f4b1757d68292fdfb07->enter($__internal_5358ba3499d7808567ececdc08af7a0ad22680aea7142f4b1757d68292fdfb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite_add");
        echo "\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mise à jour d'une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 29)->display($context);
        // line 30
        echo "                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_5358ba3499d7808567ececdc08af7a0ad22680aea7142f4b1757d68292fdfb07->leave($__internal_5358ba3499d7808567ececdc08af7a0ad22680aea7142f4b1757d68292fdfb07_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  100 => 29,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mise à jour d'une indisponibilité - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes indisponibilités</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite') }}\">Mes indisponibilités</a></li>
              <li><a href=\"{{ path('lgp_user_prof_indisponibilite_add') }}\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Mise à jour d'une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}
                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
{% endblock %}";
    }
}
