<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ccb8917722725ab3ed3b4a5b03873b5888ba7e00c8ed07339024e8ae38618321 extends Twig_Template
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
        $__internal_7a22dc2cf56496494c9c55232959fec5bdde1e86add6f8ec43b13f6daaf51ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a22dc2cf56496494c9c55232959fec5bdde1e86add6f8ec43b13f6daaf51ef7->enter($__internal_7a22dc2cf56496494c9c55232959fec5bdde1e86add6f8ec43b13f6daaf51ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a22dc2cf56496494c9c55232959fec5bdde1e86add6f8ec43b13f6daaf51ef7->leave($__internal_7a22dc2cf56496494c9c55232959fec5bdde1e86add6f8ec43b13f6daaf51ef7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f8c1c7fb9834c4e8f9eb2ddffc0c3629b51e55803f1cccbaf3df11d2e6a8a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8c1c7fb9834c4e8f9eb2ddffc0c3629b51e55803f1cccbaf3df11d2e6a8a8d->enter($__internal_6f8c1c7fb9834c4e8f9eb2ddffc0c3629b51e55803f1cccbaf3df11d2e6a8a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_6f8c1c7fb9834c4e8f9eb2ddffc0c3629b51e55803f1cccbaf3df11d2e6a8a8d->leave($__internal_6f8c1c7fb9834c4e8f9eb2ddffc0c3629b51e55803f1cccbaf3df11d2e6a8a8d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0495b5f810ac5dc28cffadb5408396c8828352228c3c995221a35542937f06e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0495b5f810ac5dc28cffadb5408396c8828352228c3c995221a35542937f06e0->enter($__internal_0495b5f810ac5dc28cffadb5408396c8828352228c3c995221a35542937f06e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0495b5f810ac5dc28cffadb5408396c8828352228c3c995221a35542937f06e0->leave($__internal_0495b5f810ac5dc28cffadb5408396c8828352228c3c995221a35542937f06e0_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4001a953e108ebdbdcc1ebc34e88c2c24628ff096d232cfd89823d9cc9bfe6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4001a953e108ebdbdcc1ebc34e88c2c24628ff096d232cfd89823d9cc9bfe6a2->enter($__internal_4001a953e108ebdbdcc1ebc34e88c2c24628ff096d232cfd89823d9cc9bfe6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_4001a953e108ebdbdcc1ebc34e88c2c24628ff096d232cfd89823d9cc9bfe6a2->leave($__internal_4001a953e108ebdbdcc1ebc34e88c2c24628ff096d232cfd89823d9cc9bfe6a2_prof);

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
