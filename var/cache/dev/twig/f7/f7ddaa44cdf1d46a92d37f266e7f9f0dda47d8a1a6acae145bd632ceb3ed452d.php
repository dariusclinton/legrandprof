<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_cc644ffb9c7fb7ce96c9b90ebe643661824a1ca8c2836189197806ce35ef569e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_ebe0716330bef477abf47942c3e9681d4ddca6abc6bd5ba79e11684ad6aea073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe0716330bef477abf47942c3e9681d4ddca6abc6bd5ba79e11684ad6aea073->enter($__internal_ebe0716330bef477abf47942c3e9681d4ddca6abc6bd5ba79e11684ad6aea073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe0716330bef477abf47942c3e9681d4ddca6abc6bd5ba79e11684ad6aea073->leave($__internal_ebe0716330bef477abf47942c3e9681d4ddca6abc6bd5ba79e11684ad6aea073_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fe413b6df124cd147b030ccf480103d1b234021b03dd6b38bd496fe28e5e7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe413b6df124cd147b030ccf480103d1b234021b03dd6b38bd496fe28e5e7f1->enter($__internal_4fe413b6df124cd147b030ccf480103d1b234021b03dd6b38bd496fe28e5e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4fe413b6df124cd147b030ccf480103d1b234021b03dd6b38bd496fe28e5e7f1->leave($__internal_4fe413b6df124cd147b030ccf480103d1b234021b03dd6b38bd496fe28e5e7f1_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_10a5f14993be371be0d9ce22f679331f005bad22f6c9dfd77e0b79263ff11435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a5f14993be371be0d9ce22f679331f005bad22f6c9dfd77e0b79263ff11435->enter($__internal_10a5f14993be371be0d9ce22f679331f005bad22f6c9dfd77e0b79263ff11435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_10a5f14993be371be0d9ce22f679331f005bad22f6c9dfd77e0b79263ff11435->leave($__internal_10a5f14993be371be0d9ce22f679331f005bad22f6c9dfd77e0b79263ff11435_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eede46d583cae407f102c1d426dfe221bca411dc9f41d9c439d1c8cae537fda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eede46d583cae407f102c1d426dfe221bca411dc9f41d9c439d1c8cae537fda8->enter($__internal_eede46d583cae407f102c1d426dfe221bca411dc9f41d9c439d1c8cae537fda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis");
        echo "\">Mes avis</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_avis_add");
        echo "\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Donner un avis</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
    
  
";
        
        $__internal_eede46d583cae407f102c1d426dfe221bca411dc9f41d9c439d1c8cae537fda8->leave($__internal_eede46d583cae407f102c1d426dfe221bca411dc9f41d9c439d1c8cae537fda8_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  99 => 28,  89 => 21,  85 => 20,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'avis - {{ parent() }}
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
            <h3 class=\"title-block-dash\">Gérer mes avis</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_avis') }}\">Mes avis</a></li>
              <li><a href=\"{{ path('lgp_user_avis_add') }}\">Donner un avis</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">
              <div class=\"notifications-block\">
                <div class=\"notifications-header\">Donner un avis</div>
                <div class=\"notifications-content\">
                    {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
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
