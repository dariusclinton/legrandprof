<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cbda278794cabdd7761947d618d06fad8e546c83246d51a558af1f2bf75cf3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_78509ef9ed3312ee98da898ae9d90db53341c9bb19056a2b8b5ff6d19ab1f6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78509ef9ed3312ee98da898ae9d90db53341c9bb19056a2b8b5ff6d19ab1f6ff->enter($__internal_78509ef9ed3312ee98da898ae9d90db53341c9bb19056a2b8b5ff6d19ab1f6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78509ef9ed3312ee98da898ae9d90db53341c9bb19056a2b8b5ff6d19ab1f6ff->leave($__internal_78509ef9ed3312ee98da898ae9d90db53341c9bb19056a2b8b5ff6d19ab1f6ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d6cd9a3b81159ec86e93a35fb2c47a1d4fe8da639cdd90a9b082ffe7217c4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6cd9a3b81159ec86e93a35fb2c47a1d4fe8da639cdd90a9b082ffe7217c4da->enter($__internal_3d6cd9a3b81159ec86e93a35fb2c47a1d4fe8da639cdd90a9b082ffe7217c4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_3d6cd9a3b81159ec86e93a35fb2c47a1d4fe8da639cdd90a9b082ffe7217c4da->leave($__internal_3d6cd9a3b81159ec86e93a35fb2c47a1d4fe8da639cdd90a9b082ffe7217c4da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
