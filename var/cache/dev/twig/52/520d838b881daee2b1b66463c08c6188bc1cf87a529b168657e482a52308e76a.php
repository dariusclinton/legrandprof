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
        $__internal_21cb5f031f80a4101be41eefb3c9c554f92aa59d5c1f60239f216fcfc7083ad7 = $this->env->getExtension("native_profiler");
        $__internal_21cb5f031f80a4101be41eefb3c9c554f92aa59d5c1f60239f216fcfc7083ad7->enter($__internal_21cb5f031f80a4101be41eefb3c9c554f92aa59d5c1f60239f216fcfc7083ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21cb5f031f80a4101be41eefb3c9c554f92aa59d5c1f60239f216fcfc7083ad7->leave($__internal_21cb5f031f80a4101be41eefb3c9c554f92aa59d5c1f60239f216fcfc7083ad7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bb512ee28d9224be99a21e307e71081bafb2550bfc2f7473e4ce9c16023cfef = $this->env->getExtension("native_profiler");
        $__internal_9bb512ee28d9224be99a21e307e71081bafb2550bfc2f7473e4ce9c16023cfef->enter($__internal_9bb512ee28d9224be99a21e307e71081bafb2550bfc2f7473e4ce9c16023cfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9bb512ee28d9224be99a21e307e71081bafb2550bfc2f7473e4ce9c16023cfef->leave($__internal_9bb512ee28d9224be99a21e307e71081bafb2550bfc2f7473e4ce9c16023cfef_prof);

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
