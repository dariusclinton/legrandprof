<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a7f36f685fef2fbbecd4614bec9eb3aa9e7ad4cd3e20ae675e5fd5c53f9d38aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_55fc0296c2d11dbd6cf8fb0ff1e02c51586690ef9f1b94b313a8d014ff35dcab = $this->env->getExtension("native_profiler");
        $__internal_55fc0296c2d11dbd6cf8fb0ff1e02c51586690ef9f1b94b313a8d014ff35dcab->enter($__internal_55fc0296c2d11dbd6cf8fb0ff1e02c51586690ef9f1b94b313a8d014ff35dcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55fc0296c2d11dbd6cf8fb0ff1e02c51586690ef9f1b94b313a8d014ff35dcab->leave($__internal_55fc0296c2d11dbd6cf8fb0ff1e02c51586690ef9f1b94b313a8d014ff35dcab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cc0f3736d5b03f64f85158617849c6dec22e46b288d708c867b5a3e43ad77af = $this->env->getExtension("native_profiler");
        $__internal_5cc0f3736d5b03f64f85158617849c6dec22e46b288d708c867b5a3e43ad77af->enter($__internal_5cc0f3736d5b03f64f85158617849c6dec22e46b288d708c867b5a3e43ad77af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5cc0f3736d5b03f64f85158617849c6dec22e46b288d708c867b5a3e43ad77af->leave($__internal_5cc0f3736d5b03f64f85158617849c6dec22e46b288d708c867b5a3e43ad77af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
