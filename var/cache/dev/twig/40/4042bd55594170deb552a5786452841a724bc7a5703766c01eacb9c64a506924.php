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
        $__internal_6ceec993c9bee75208573b1bb8bdf68b54788e89eab476cd70fc5af03fba995a = $this->env->getExtension("native_profiler");
        $__internal_6ceec993c9bee75208573b1bb8bdf68b54788e89eab476cd70fc5af03fba995a->enter($__internal_6ceec993c9bee75208573b1bb8bdf68b54788e89eab476cd70fc5af03fba995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ceec993c9bee75208573b1bb8bdf68b54788e89eab476cd70fc5af03fba995a->leave($__internal_6ceec993c9bee75208573b1bb8bdf68b54788e89eab476cd70fc5af03fba995a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a8f5d20c9f877b08b990848630667f00ae1881fa13d2accd260dc9c1cf26ddf = $this->env->getExtension("native_profiler");
        $__internal_7a8f5d20c9f877b08b990848630667f00ae1881fa13d2accd260dc9c1cf26ddf->enter($__internal_7a8f5d20c9f877b08b990848630667f00ae1881fa13d2accd260dc9c1cf26ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7a8f5d20c9f877b08b990848630667f00ae1881fa13d2accd260dc9c1cf26ddf->leave($__internal_7a8f5d20c9f877b08b990848630667f00ae1881fa13d2accd260dc9c1cf26ddf_prof);

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
