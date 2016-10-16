<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42cfbfb6741769ca2075c566da8f902c19e3935fe0db0961b599b2c0c81605e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0f5f077ca9840ad77583625d85fb04d541c126028b892b5386bafd577439ab75 = $this->env->getExtension("native_profiler");
        $__internal_0f5f077ca9840ad77583625d85fb04d541c126028b892b5386bafd577439ab75->enter($__internal_0f5f077ca9840ad77583625d85fb04d541c126028b892b5386bafd577439ab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f5f077ca9840ad77583625d85fb04d541c126028b892b5386bafd577439ab75->leave($__internal_0f5f077ca9840ad77583625d85fb04d541c126028b892b5386bafd577439ab75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c76c1372c9d46d519750835bdeb1aa40d7778933d7fa33c2246d198f884bf96c = $this->env->getExtension("native_profiler");
        $__internal_c76c1372c9d46d519750835bdeb1aa40d7778933d7fa33c2246d198f884bf96c->enter($__internal_c76c1372c9d46d519750835bdeb1aa40d7778933d7fa33c2246d198f884bf96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c76c1372c9d46d519750835bdeb1aa40d7778933d7fa33c2246d198f884bf96c->leave($__internal_c76c1372c9d46d519750835bdeb1aa40d7778933d7fa33c2246d198f884bf96c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
