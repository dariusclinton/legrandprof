<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_be6c7f2b096be647d479829cca8498d84c3f87fef54159512158eaa778795de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_5fbe99e03363c7fc557d4c9bd0efe3bdbcc6e7a2139f6314b0f0709b2ea481d3 = $this->env->getExtension("native_profiler");
        $__internal_5fbe99e03363c7fc557d4c9bd0efe3bdbcc6e7a2139f6314b0f0709b2ea481d3->enter($__internal_5fbe99e03363c7fc557d4c9bd0efe3bdbcc6e7a2139f6314b0f0709b2ea481d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fbe99e03363c7fc557d4c9bd0efe3bdbcc6e7a2139f6314b0f0709b2ea481d3->leave($__internal_5fbe99e03363c7fc557d4c9bd0efe3bdbcc6e7a2139f6314b0f0709b2ea481d3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f558c1306739494505924b81fbefe28c236909c05bf750f075b116e7838c52d = $this->env->getExtension("native_profiler");
        $__internal_8f558c1306739494505924b81fbefe28c236909c05bf750f075b116e7838c52d->enter($__internal_8f558c1306739494505924b81fbefe28c236909c05bf750f075b116e7838c52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8f558c1306739494505924b81fbefe28c236909c05bf750f075b116e7838c52d->leave($__internal_8f558c1306739494505924b81fbefe28c236909c05bf750f075b116e7838c52d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
