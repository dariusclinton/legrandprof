<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_4384c7ad6765fe7b2bf28a451a3e9acac2947795bfe51cc66ddcc7e1b7c81739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c931ca38e00c221a8b84e6252074dd852a37dd35cb22febb9e29c106d76ab7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c931ca38e00c221a8b84e6252074dd852a37dd35cb22febb9e29c106d76ab7d3->enter($__internal_c931ca38e00c221a8b84e6252074dd852a37dd35cb22febb9e29c106d76ab7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c931ca38e00c221a8b84e6252074dd852a37dd35cb22febb9e29c106d76ab7d3->leave($__internal_c931ca38e00c221a8b84e6252074dd852a37dd35cb22febb9e29c106d76ab7d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b71f6fccc6214cb2fce38971ffd21d0ab6fce299553ff66a1825a31c4921fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b71f6fccc6214cb2fce38971ffd21d0ab6fce299553ff66a1825a31c4921fb5->enter($__internal_4b71f6fccc6214cb2fce38971ffd21d0ab6fce299553ff66a1825a31c4921fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4b71f6fccc6214cb2fce38971ffd21d0ab6fce299553ff66a1825a31c4921fb5->leave($__internal_4b71f6fccc6214cb2fce38971ffd21d0ab6fce299553ff66a1825a31c4921fb5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
