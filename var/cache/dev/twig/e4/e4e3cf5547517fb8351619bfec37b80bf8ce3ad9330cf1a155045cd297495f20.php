<?php

/* LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e9fee84088b688574dd8d2e907e013f4d0839ed48f6eda39b0d6d05c42107a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_191b2dfe9999d09755d41f4065bca107a5489e4c249048b1643f20e9e2f035bf = $this->env->getExtension("native_profiler");
        $__internal_191b2dfe9999d09755d41f4065bca107a5489e4c249048b1643f20e9e2f035bf->enter($__internal_191b2dfe9999d09755d41f4065bca107a5489e4c249048b1643f20e9e2f035bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_191b2dfe9999d09755d41f4065bca107a5489e4c249048b1643f20e9e2f035bf->leave($__internal_191b2dfe9999d09755d41f4065bca107a5489e4c249048b1643f20e9e2f035bf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90fed4fabdb00dc1d6b6108ad3666c7838a0ceda44059fe65524b0b3e8243462 = $this->env->getExtension("native_profiler");
        $__internal_90fed4fabdb00dc1d6b6108ad3666c7838a0ceda44059fe65524b0b3e8243462->enter($__internal_90fed4fabdb00dc1d6b6108ad3666c7838a0ceda44059fe65524b0b3e8243462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_90fed4fabdb00dc1d6b6108ad3666c7838a0ceda44059fe65524b0b3e8243462->leave($__internal_90fed4fabdb00dc1d6b6108ad3666c7838a0ceda44059fe65524b0b3e8243462_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
