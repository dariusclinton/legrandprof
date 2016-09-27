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
        $__internal_b57caa50335240f2079eaeabe9d8af90d81ec44b8c0c4029362abc8f60007421 = $this->env->getExtension("native_profiler");
        $__internal_b57caa50335240f2079eaeabe9d8af90d81ec44b8c0c4029362abc8f60007421->enter($__internal_b57caa50335240f2079eaeabe9d8af90d81ec44b8c0c4029362abc8f60007421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b57caa50335240f2079eaeabe9d8af90d81ec44b8c0c4029362abc8f60007421->leave($__internal_b57caa50335240f2079eaeabe9d8af90d81ec44b8c0c4029362abc8f60007421_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba7f9db07450c043bf9ae2c10c7ce0f1dec910f273d31b71dd364ace44e645cf = $this->env->getExtension("native_profiler");
        $__internal_ba7f9db07450c043bf9ae2c10c7ce0f1dec910f273d31b71dd364ace44e645cf->enter($__internal_ba7f9db07450c043bf9ae2c10c7ce0f1dec910f273d31b71dd364ace44e645cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ba7f9db07450c043bf9ae2c10c7ce0f1dec910f273d31b71dd364ace44e645cf->leave($__internal_ba7f9db07450c043bf9ae2c10c7ce0f1dec910f273d31b71dd364ace44e645cf_prof);

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
