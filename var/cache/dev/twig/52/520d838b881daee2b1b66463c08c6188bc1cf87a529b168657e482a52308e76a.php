<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_1708e650438bb1a635fa9ba66f380ac39aa5aa60107211c6576f3f9d880f4fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_f55a1717c4a724959dfcf71c37621164186e0c2208ea434369baf06ffcb4e84a = $this->env->getExtension("native_profiler");
        $__internal_f55a1717c4a724959dfcf71c37621164186e0c2208ea434369baf06ffcb4e84a->enter($__internal_f55a1717c4a724959dfcf71c37621164186e0c2208ea434369baf06ffcb4e84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f55a1717c4a724959dfcf71c37621164186e0c2208ea434369baf06ffcb4e84a->leave($__internal_f55a1717c4a724959dfcf71c37621164186e0c2208ea434369baf06ffcb4e84a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b4ca5d1b1bd573fefdc714993522bbeae3f87d9767207b58f60fd70fe8ceed5 = $this->env->getExtension("native_profiler");
        $__internal_0b4ca5d1b1bd573fefdc714993522bbeae3f87d9767207b58f60fd70fe8ceed5->enter($__internal_0b4ca5d1b1bd573fefdc714993522bbeae3f87d9767207b58f60fd70fe8ceed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0b4ca5d1b1bd573fefdc714993522bbeae3f87d9767207b58f60fd70fe8ceed5->leave($__internal_0b4ca5d1b1bd573fefdc714993522bbeae3f87d9767207b58f60fd70fe8ceed5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
