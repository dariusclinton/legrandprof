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
        $__internal_bee46a96366cc9825cd9b5e12df2d3a62a1ed230a6b818918853f4022f5249c7 = $this->env->getExtension("native_profiler");
        $__internal_bee46a96366cc9825cd9b5e12df2d3a62a1ed230a6b818918853f4022f5249c7->enter($__internal_bee46a96366cc9825cd9b5e12df2d3a62a1ed230a6b818918853f4022f5249c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee46a96366cc9825cd9b5e12df2d3a62a1ed230a6b818918853f4022f5249c7->leave($__internal_bee46a96366cc9825cd9b5e12df2d3a62a1ed230a6b818918853f4022f5249c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_889daf80395bac9d14b917f422ad7cba040b18ede59039f79e32c1c13d72e9e2 = $this->env->getExtension("native_profiler");
        $__internal_889daf80395bac9d14b917f422ad7cba040b18ede59039f79e32c1c13d72e9e2->enter($__internal_889daf80395bac9d14b917f422ad7cba040b18ede59039f79e32c1c13d72e9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_889daf80395bac9d14b917f422ad7cba040b18ede59039f79e32c1c13d72e9e2->leave($__internal_889daf80395bac9d14b917f422ad7cba040b18ede59039f79e32c1c13d72e9e2_prof);

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
