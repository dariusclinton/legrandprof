<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_db14e56c91cba01ca8113b481797ac28913369168c358aeb920a6f3c5c96339e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b1ac3c45882786d934098c32ab48a982eac49576e08fb34ef8f05bfbf1373856 = $this->env->getExtension("native_profiler");
        $__internal_b1ac3c45882786d934098c32ab48a982eac49576e08fb34ef8f05bfbf1373856->enter($__internal_b1ac3c45882786d934098c32ab48a982eac49576e08fb34ef8f05bfbf1373856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ac3c45882786d934098c32ab48a982eac49576e08fb34ef8f05bfbf1373856->leave($__internal_b1ac3c45882786d934098c32ab48a982eac49576e08fb34ef8f05bfbf1373856_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7695f93dbef43ce8c85e0fab920297bf719c4bb55b0488c4481a0e14c4262d9 = $this->env->getExtension("native_profiler");
        $__internal_a7695f93dbef43ce8c85e0fab920297bf719c4bb55b0488c4481a0e14c4262d9->enter($__internal_a7695f93dbef43ce8c85e0fab920297bf719c4bb55b0488c4481a0e14c4262d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a7695f93dbef43ce8c85e0fab920297bf719c4bb55b0488c4481a0e14c4262d9->leave($__internal_a7695f93dbef43ce8c85e0fab920297bf719c4bb55b0488c4481a0e14c4262d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
