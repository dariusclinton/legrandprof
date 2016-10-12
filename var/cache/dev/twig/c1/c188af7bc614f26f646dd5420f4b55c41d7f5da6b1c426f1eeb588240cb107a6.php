<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1ccf89c9c9c2f0a8f5b83a0ede3ef30d3eaf998a48140f91d564cfd346d9e4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10f6ed7a5c9fa3353be5678b6fe4766d376f0d60cf95bc77477e11a0c1a6f649 = $this->env->getExtension("native_profiler");
        $__internal_10f6ed7a5c9fa3353be5678b6fe4766d376f0d60cf95bc77477e11a0c1a6f649->enter($__internal_10f6ed7a5c9fa3353be5678b6fe4766d376f0d60cf95bc77477e11a0c1a6f649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10f6ed7a5c9fa3353be5678b6fe4766d376f0d60cf95bc77477e11a0c1a6f649->leave($__internal_10f6ed7a5c9fa3353be5678b6fe4766d376f0d60cf95bc77477e11a0c1a6f649_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4391865dd1f8969a2ed152775d279e66220d1cdb64f2d908a1b672326768fc7 = $this->env->getExtension("native_profiler");
        $__internal_b4391865dd1f8969a2ed152775d279e66220d1cdb64f2d908a1b672326768fc7->enter($__internal_b4391865dd1f8969a2ed152775d279e66220d1cdb64f2d908a1b672326768fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b4391865dd1f8969a2ed152775d279e66220d1cdb64f2d908a1b672326768fc7->leave($__internal_b4391865dd1f8969a2ed152775d279e66220d1cdb64f2d908a1b672326768fc7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
