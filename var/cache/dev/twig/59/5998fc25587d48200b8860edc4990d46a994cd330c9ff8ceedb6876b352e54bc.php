<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4e9388e47a351ec26429461ab99f3f6c97b7e94d2628279a1b59d02c9d8f356c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_113f60df5c87c2165fbba3df3e41df6ebd503854ae3ae3c98b8ef7ba8b519670 = $this->env->getExtension("native_profiler");
        $__internal_113f60df5c87c2165fbba3df3e41df6ebd503854ae3ae3c98b8ef7ba8b519670->enter($__internal_113f60df5c87c2165fbba3df3e41df6ebd503854ae3ae3c98b8ef7ba8b519670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_113f60df5c87c2165fbba3df3e41df6ebd503854ae3ae3c98b8ef7ba8b519670->leave($__internal_113f60df5c87c2165fbba3df3e41df6ebd503854ae3ae3c98b8ef7ba8b519670_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d6ca53aa8f6497577eb655d214400007deee0d6c90bb7b09b3553e9ba44755 = $this->env->getExtension("native_profiler");
        $__internal_f2d6ca53aa8f6497577eb655d214400007deee0d6c90bb7b09b3553e9ba44755->enter($__internal_f2d6ca53aa8f6497577eb655d214400007deee0d6c90bb7b09b3553e9ba44755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_f2d6ca53aa8f6497577eb655d214400007deee0d6c90bb7b09b3553e9ba44755->leave($__internal_f2d6ca53aa8f6497577eb655d214400007deee0d6c90bb7b09b3553e9ba44755_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_aec0f03088d00f73ae98bf39d2469307135de6990c273515992923f6faef1ad1 = $this->env->getExtension("native_profiler");
        $__internal_aec0f03088d00f73ae98bf39d2469307135de6990c273515992923f6faef1ad1->enter($__internal_aec0f03088d00f73ae98bf39d2469307135de6990c273515992923f6faef1ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_aec0f03088d00f73ae98bf39d2469307135de6990c273515992923f6faef1ad1->leave($__internal_aec0f03088d00f73ae98bf39d2469307135de6990c273515992923f6faef1ad1_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc150e8c1da9ffe3e3a0de1ece05c98ecc122f1d77b53947c14a1f4965aa5bba = $this->env->getExtension("native_profiler");
        $__internal_dc150e8c1da9ffe3e3a0de1ece05c98ecc122f1d77b53947c14a1f4965aa5bba->enter($__internal_dc150e8c1da9ffe3e3a0de1ece05c98ecc122f1d77b53947c14a1f4965aa5bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_dc150e8c1da9ffe3e3a0de1ece05c98ecc122f1d77b53947c14a1f4965aa5bba->leave($__internal_dc150e8c1da9ffe3e3a0de1ece05c98ecc122f1d77b53947c14a1f4965aa5bba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
  {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} 
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}    
  <div class=\"bg-grey dashboard\">
    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
  </div>
{% endblock fos_user_content %}";
    }
}
