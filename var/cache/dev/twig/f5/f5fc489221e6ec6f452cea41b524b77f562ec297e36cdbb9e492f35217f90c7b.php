<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c569f9891ea703df050261c3cdba45df7a6efbb1520c9e6f384a471cf4a82140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_0fab2910e0c5f380f0194eb6ac3b77cb2616dbf8ca0f082bd0f315f056fe66fa = $this->env->getExtension("native_profiler");
        $__internal_0fab2910e0c5f380f0194eb6ac3b77cb2616dbf8ca0f082bd0f315f056fe66fa->enter($__internal_0fab2910e0c5f380f0194eb6ac3b77cb2616dbf8ca0f082bd0f315f056fe66fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fab2910e0c5f380f0194eb6ac3b77cb2616dbf8ca0f082bd0f315f056fe66fa->leave($__internal_0fab2910e0c5f380f0194eb6ac3b77cb2616dbf8ca0f082bd0f315f056fe66fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b4dceca7737b92d0a245165b704d4350a2d3f56fef41f7f86c5f3e02b306dec = $this->env->getExtension("native_profiler");
        $__internal_6b4dceca7737b92d0a245165b704d4350a2d3f56fef41f7f86c5f3e02b306dec->enter($__internal_6b4dceca7737b92d0a245165b704d4350a2d3f56fef41f7f86c5f3e02b306dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_6b4dceca7737b92d0a245165b704d4350a2d3f56fef41f7f86c5f3e02b306dec->leave($__internal_6b4dceca7737b92d0a245165b704d4350a2d3f56fef41f7f86c5f3e02b306dec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
