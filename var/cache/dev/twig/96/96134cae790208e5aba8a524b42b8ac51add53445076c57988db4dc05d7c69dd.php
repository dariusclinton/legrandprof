<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_df4d71d2cd9c8c30c89e26642ce6b944c300b02ab19d6fd55e8265fe50ff9ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 1);
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
        $__internal_ec38b70750d947db3a16882e579e346c7581cfd3e760bcdb3a742880992e1fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec38b70750d947db3a16882e579e346c7581cfd3e760bcdb3a742880992e1fc0->enter($__internal_ec38b70750d947db3a16882e579e346c7581cfd3e760bcdb3a742880992e1fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec38b70750d947db3a16882e579e346c7581cfd3e760bcdb3a742880992e1fc0->leave($__internal_ec38b70750d947db3a16882e579e346c7581cfd3e760bcdb3a742880992e1fc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff5ceebf0d1ba92e4b983f4573a8aae947ccf1b3ba7394fd6dfffee999f19541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5ceebf0d1ba92e4b983f4573a8aae947ccf1b3ba7394fd6dfffee999f19541->enter($__internal_ff5ceebf0d1ba92e4b983f4573a8aae947ccf1b3ba7394fd6dfffee999f19541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ff5ceebf0d1ba92e4b983f4573a8aae947ccf1b3ba7394fd6dfffee999f19541->leave($__internal_ff5ceebf0d1ba92e4b983f4573a8aae947ccf1b3ba7394fd6dfffee999f19541_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_a52a4896f59f969a6540a5998786969802e4fb8c3e4e4308c5ee0bcc37d075cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52a4896f59f969a6540a5998786969802e4fb8c3e4e4308c5ee0bcc37d075cb->enter($__internal_a52a4896f59f969a6540a5998786969802e4fb8c3e4e4308c5ee0bcc37d075cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_a52a4896f59f969a6540a5998786969802e4fb8c3e4e4308c5ee0bcc37d075cb->leave($__internal_a52a4896f59f969a6540a5998786969802e4fb8c3e4e4308c5ee0bcc37d075cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89b33b1230f96bbbc46a02202858bb8aaa07d7d1243320a69627008a01f7dd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b33b1230f96bbbc46a02202858bb8aaa07d7d1243320a69627008a01f7dd2e->enter($__internal_89b33b1230f96bbbc46a02202858bb8aaa07d7d1243320a69627008a01f7dd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite");
        echo "\">Mes indisponibilités</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_indisponibilite_add");
        echo "\">Signaler une indisponibilité</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Signaler une indisponibilité</div>
                <div class=\"notifications-content\">
                    
                    ";
        // line 30
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 30)->display($context);
        // line 31
        echo "                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
  
";
        
        $__internal_89b33b1230f96bbbc46a02202858bb8aaa07d7d1243320a69627008a01f7dd2e->leave($__internal_89b33b1230f96bbbc46a02202858bb8aaa07d7d1243320a69627008a01f7dd2e_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  101 => 30,  90 => 22,  86 => 21,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'une indisponibilité - {{ parent() }}
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
                <div class=\"notifications-header\">Signaler une indisponibilité</div>
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
