<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_201fa1a72332bdde9f3fe0ca8e829b417d38717419c46cb25bc94b877bf55eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_c3fade6b289ec85f9f84c12363c33795e6a772dae0d2247017eb57189e48f768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fade6b289ec85f9f84c12363c33795e6a772dae0d2247017eb57189e48f768->enter($__internal_c3fade6b289ec85f9f84c12363c33795e6a772dae0d2247017eb57189e48f768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3fade6b289ec85f9f84c12363c33795e6a772dae0d2247017eb57189e48f768->leave($__internal_c3fade6b289ec85f9f84c12363c33795e6a772dae0d2247017eb57189e48f768_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3855ec82ecd936fc3ae8ad652cfbbf8d4a87488102b2af635d5942a34331a687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3855ec82ecd936fc3ae8ad652cfbbf8d4a87488102b2af635d5942a34331a687->enter($__internal_3855ec82ecd936fc3ae8ad652cfbbf8d4a87488102b2af635d5942a34331a687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3855ec82ecd936fc3ae8ad652cfbbf8d4a87488102b2af635d5942a34331a687->leave($__internal_3855ec82ecd936fc3ae8ad652cfbbf8d4a87488102b2af635d5942a34331a687_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_6b175bce14f6304f45e305bbea2f4c9221b11e64e457f178dea81b12fb54623b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b175bce14f6304f45e305bbea2f4c9221b11e64e457f178dea81b12fb54623b->enter($__internal_6b175bce14f6304f45e305bbea2f4c9221b11e64e457f178dea81b12fb54623b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_6b175bce14f6304f45e305bbea2f4c9221b11e64e457f178dea81b12fb54623b->leave($__internal_6b175bce14f6304f45e305bbea2f4c9221b11e64e457f178dea81b12fb54623b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9665eaa39275e78acf00137712a32e89d7a4f164e300b41ec1009bd01b250a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9665eaa39275e78acf00137712a32e89d7a4f164e300b41ec1009bd01b250a56->enter($__internal_9665eaa39275e78acf00137712a32e89d7a4f164e300b41ec1009bd01b250a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"notifications-header\">Modifier un avis</div>
                <div class=\"notifications-content\">
                    ";
        // line 28
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 28)->display($context);
        // line 29
        echo "                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
";
        
        $__internal_9665eaa39275e78acf00137712a32e89d7a4f164e300b41ec1009bd01b250a56->leave($__internal_9665eaa39275e78acf00137712a32e89d7a4f164e300b41ec1009bd01b250a56_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
  Modification d'un avis - {{ parent() }}
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
                <div class=\"notifications-header\">Modifier un avis</div>
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
