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
        $__internal_6b3bdab8185968888a2828bbd66e86fad8d5b17fdb771b9f6151283adcd287e9 = $this->env->getExtension("native_profiler");
        $__internal_6b3bdab8185968888a2828bbd66e86fad8d5b17fdb771b9f6151283adcd287e9->enter($__internal_6b3bdab8185968888a2828bbd66e86fad8d5b17fdb771b9f6151283adcd287e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3bdab8185968888a2828bbd66e86fad8d5b17fdb771b9f6151283adcd287e9->leave($__internal_6b3bdab8185968888a2828bbd66e86fad8d5b17fdb771b9f6151283adcd287e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_769b0a142b0377bfc369eea08bb2ee57ae9ef281535ae0b46b2c23723e850ec9 = $this->env->getExtension("native_profiler");
        $__internal_769b0a142b0377bfc369eea08bb2ee57ae9ef281535ae0b46b2c23723e850ec9->enter($__internal_769b0a142b0377bfc369eea08bb2ee57ae9ef281535ae0b46b2c23723e850ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_769b0a142b0377bfc369eea08bb2ee57ae9ef281535ae0b46b2c23723e850ec9->leave($__internal_769b0a142b0377bfc369eea08bb2ee57ae9ef281535ae0b46b2c23723e850ec9_prof);

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
