<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8289a9aa6768909206d53459e47ae4d0f5ac845c84045bd81222574220bfed7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_d0ae350f488d18c6a7db9d34756ec8f32bc188ba72a6e3fa0fb6051240077d29 = $this->env->getExtension("native_profiler");
        $__internal_d0ae350f488d18c6a7db9d34756ec8f32bc188ba72a6e3fa0fb6051240077d29->enter($__internal_d0ae350f488d18c6a7db9d34756ec8f32bc188ba72a6e3fa0fb6051240077d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ae350f488d18c6a7db9d34756ec8f32bc188ba72a6e3fa0fb6051240077d29->leave($__internal_d0ae350f488d18c6a7db9d34756ec8f32bc188ba72a6e3fa0fb6051240077d29_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_feff39b7d29163f448da8ac7bf0fdb49ab874f1661e672155008ec73cb8e4830 = $this->env->getExtension("native_profiler");
        $__internal_feff39b7d29163f448da8ac7bf0fdb49ab874f1661e672155008ec73cb8e4830->enter($__internal_feff39b7d29163f448da8ac7bf0fdb49ab874f1661e672155008ec73cb8e4830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_feff39b7d29163f448da8ac7bf0fdb49ab874f1661e672155008ec73cb8e4830->leave($__internal_feff39b7d29163f448da8ac7bf0fdb49ab874f1661e672155008ec73cb8e4830_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
