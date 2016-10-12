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
        $__internal_08f22ce625578084bf6cdc3c2931545adfd557dd9a632a9637164b6292423507 = $this->env->getExtension("native_profiler");
        $__internal_08f22ce625578084bf6cdc3c2931545adfd557dd9a632a9637164b6292423507->enter($__internal_08f22ce625578084bf6cdc3c2931545adfd557dd9a632a9637164b6292423507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f22ce625578084bf6cdc3c2931545adfd557dd9a632a9637164b6292423507->leave($__internal_08f22ce625578084bf6cdc3c2931545adfd557dd9a632a9637164b6292423507_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c9e9bfefc5c996a737d114ccdfd152834d537a7fc26935dee88384e34cb4c71 = $this->env->getExtension("native_profiler");
        $__internal_5c9e9bfefc5c996a737d114ccdfd152834d537a7fc26935dee88384e34cb4c71->enter($__internal_5c9e9bfefc5c996a737d114ccdfd152834d537a7fc26935dee88384e34cb4c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c9e9bfefc5c996a737d114ccdfd152834d537a7fc26935dee88384e34cb4c71->leave($__internal_5c9e9bfefc5c996a737d114ccdfd152834d537a7fc26935dee88384e34cb4c71_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9b4b842576060837c5d703de9541777c3be626f7974622f9babcfb8f72ce924f = $this->env->getExtension("native_profiler");
        $__internal_9b4b842576060837c5d703de9541777c3be626f7974622f9babcfb8f72ce924f->enter($__internal_9b4b842576060837c5d703de9541777c3be626f7974622f9babcfb8f72ce924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9b4b842576060837c5d703de9541777c3be626f7974622f9babcfb8f72ce924f->leave($__internal_9b4b842576060837c5d703de9541777c3be626f7974622f9babcfb8f72ce924f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c21c09581b571c06555d844869ce0bba994e457bfd2a9e61875b03bde070fb2 = $this->env->getExtension("native_profiler");
        $__internal_7c21c09581b571c06555d844869ce0bba994e457bfd2a9e61875b03bde070fb2->enter($__internal_7c21c09581b571c06555d844869ce0bba994e457bfd2a9e61875b03bde070fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c21c09581b571c06555d844869ce0bba994e457bfd2a9e61875b03bde070fb2->leave($__internal_7c21c09581b571c06555d844869ce0bba994e457bfd2a9e61875b03bde070fb2_prof);

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
