<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d7378bbf6b1ae594a260ee0ca57afbaea467696fdaf24151374392056a69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3d4e1bfe235a762b7ecf4ac416bdd5f3e372ebc5f0bcb028e6016916a3550dea = $this->env->getExtension("native_profiler");
        $__internal_3d4e1bfe235a762b7ecf4ac416bdd5f3e372ebc5f0bcb028e6016916a3550dea->enter($__internal_3d4e1bfe235a762b7ecf4ac416bdd5f3e372ebc5f0bcb028e6016916a3550dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4e1bfe235a762b7ecf4ac416bdd5f3e372ebc5f0bcb028e6016916a3550dea->leave($__internal_3d4e1bfe235a762b7ecf4ac416bdd5f3e372ebc5f0bcb028e6016916a3550dea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa95bf76013155c96d955f0c4d3f611542137811697c14018efec3ff11201d77 = $this->env->getExtension("native_profiler");
        $__internal_fa95bf76013155c96d955f0c4d3f611542137811697c14018efec3ff11201d77->enter($__internal_fa95bf76013155c96d955f0c4d3f611542137811697c14018efec3ff11201d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fa95bf76013155c96d955f0c4d3f611542137811697c14018efec3ff11201d77->leave($__internal_fa95bf76013155c96d955f0c4d3f611542137811697c14018efec3ff11201d77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
