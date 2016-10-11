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
        $__internal_8904678a78ffba68222e3d3be3e2cceaabdda8b07aa080730e4138e50b503005 = $this->env->getExtension("native_profiler");
        $__internal_8904678a78ffba68222e3d3be3e2cceaabdda8b07aa080730e4138e50b503005->enter($__internal_8904678a78ffba68222e3d3be3e2cceaabdda8b07aa080730e4138e50b503005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8904678a78ffba68222e3d3be3e2cceaabdda8b07aa080730e4138e50b503005->leave($__internal_8904678a78ffba68222e3d3be3e2cceaabdda8b07aa080730e4138e50b503005_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcf4891d9d29b2a1a5c42e2b1d26e334ece813f31f5d816e83e87464def7bc4f = $this->env->getExtension("native_profiler");
        $__internal_dcf4891d9d29b2a1a5c42e2b1d26e334ece813f31f5d816e83e87464def7bc4f->enter($__internal_dcf4891d9d29b2a1a5c42e2b1d26e334ece813f31f5d816e83e87464def7bc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_dcf4891d9d29b2a1a5c42e2b1d26e334ece813f31f5d816e83e87464def7bc4f->leave($__internal_dcf4891d9d29b2a1a5c42e2b1d26e334ece813f31f5d816e83e87464def7bc4f_prof);

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
