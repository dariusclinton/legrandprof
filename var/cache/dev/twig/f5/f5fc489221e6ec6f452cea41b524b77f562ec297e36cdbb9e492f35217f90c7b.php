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
        $__internal_9672c512e6ccb0b2f99bf940cac5c333383bd490ec52292de897566272611864 = $this->env->getExtension("native_profiler");
        $__internal_9672c512e6ccb0b2f99bf940cac5c333383bd490ec52292de897566272611864->enter($__internal_9672c512e6ccb0b2f99bf940cac5c333383bd490ec52292de897566272611864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9672c512e6ccb0b2f99bf940cac5c333383bd490ec52292de897566272611864->leave($__internal_9672c512e6ccb0b2f99bf940cac5c333383bd490ec52292de897566272611864_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_443f9347e075355cad3f8433d47dc266b856b999c1b1284eee58311c3e7f5777 = $this->env->getExtension("native_profiler");
        $__internal_443f9347e075355cad3f8433d47dc266b856b999c1b1284eee58311c3e7f5777->enter($__internal_443f9347e075355cad3f8433d47dc266b856b999c1b1284eee58311c3e7f5777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_443f9347e075355cad3f8433d47dc266b856b999c1b1284eee58311c3e7f5777->leave($__internal_443f9347e075355cad3f8433d47dc266b856b999c1b1284eee58311c3e7f5777_prof);

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
