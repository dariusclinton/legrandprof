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
        $__internal_e224ad803d25aea36ee9361e58137e814d77dd8f46b8c216ae782a8540e11d6b = $this->env->getExtension("native_profiler");
        $__internal_e224ad803d25aea36ee9361e58137e814d77dd8f46b8c216ae782a8540e11d6b->enter($__internal_e224ad803d25aea36ee9361e58137e814d77dd8f46b8c216ae782a8540e11d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e224ad803d25aea36ee9361e58137e814d77dd8f46b8c216ae782a8540e11d6b->leave($__internal_e224ad803d25aea36ee9361e58137e814d77dd8f46b8c216ae782a8540e11d6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e27c55265f0c274069da3d8004e9609d49fb8d991bb45bcc7f6e6a488350236a = $this->env->getExtension("native_profiler");
        $__internal_e27c55265f0c274069da3d8004e9609d49fb8d991bb45bcc7f6e6a488350236a->enter($__internal_e27c55265f0c274069da3d8004e9609d49fb8d991bb45bcc7f6e6a488350236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e27c55265f0c274069da3d8004e9609d49fb8d991bb45bcc7f6e6a488350236a->leave($__internal_e27c55265f0c274069da3d8004e9609d49fb8d991bb45bcc7f6e6a488350236a_prof);

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
