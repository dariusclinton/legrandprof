<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_74c7be5d57db606590f4cd98a29732ed9a362f9fd685cd18d898ca2ad852985c extends Twig_Template
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
        $__internal_8187c2a686f9239a979d63d85aa7d0967c13c1f5f0593584ffdccadafb2f979b = $this->env->getExtension("native_profiler");
        $__internal_8187c2a686f9239a979d63d85aa7d0967c13c1f5f0593584ffdccadafb2f979b->enter($__internal_8187c2a686f9239a979d63d85aa7d0967c13c1f5f0593584ffdccadafb2f979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8187c2a686f9239a979d63d85aa7d0967c13c1f5f0593584ffdccadafb2f979b->leave($__internal_8187c2a686f9239a979d63d85aa7d0967c13c1f5f0593584ffdccadafb2f979b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5524fdbbf0513a9441efd49f3e93907e4ac57fa72a4c675ac544c21ed644067 = $this->env->getExtension("native_profiler");
        $__internal_f5524fdbbf0513a9441efd49f3e93907e4ac57fa72a4c675ac544c21ed644067->enter($__internal_f5524fdbbf0513a9441efd49f3e93907e4ac57fa72a4c675ac544c21ed644067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f5524fdbbf0513a9441efd49f3e93907e4ac57fa72a4c675ac544c21ed644067->leave($__internal_f5524fdbbf0513a9441efd49f3e93907e4ac57fa72a4c675ac544c21ed644067_prof);

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
