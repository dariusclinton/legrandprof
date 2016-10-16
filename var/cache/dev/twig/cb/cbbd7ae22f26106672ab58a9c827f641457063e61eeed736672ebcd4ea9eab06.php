<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_80a7730cacec30effed7e81faca6284b070ad7a7ccd0ac2f3fb7e58b437c93d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_6be69291256386d32f235924cbb70cb1b944850e18a096aed6e4c3b2ecec45b3 = $this->env->getExtension("native_profiler");
        $__internal_6be69291256386d32f235924cbb70cb1b944850e18a096aed6e4c3b2ecec45b3->enter($__internal_6be69291256386d32f235924cbb70cb1b944850e18a096aed6e4c3b2ecec45b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6be69291256386d32f235924cbb70cb1b944850e18a096aed6e4c3b2ecec45b3->leave($__internal_6be69291256386d32f235924cbb70cb1b944850e18a096aed6e4c3b2ecec45b3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd0520aef872799fcb24dccfa827e93ed5756785e2ae5ccdab9d1925671c2578 = $this->env->getExtension("native_profiler");
        $__internal_fd0520aef872799fcb24dccfa827e93ed5756785e2ae5ccdab9d1925671c2578->enter($__internal_fd0520aef872799fcb24dccfa827e93ed5756785e2ae5ccdab9d1925671c2578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fd0520aef872799fcb24dccfa827e93ed5756785e2ae5ccdab9d1925671c2578->leave($__internal_fd0520aef872799fcb24dccfa827e93ed5756785e2ae5ccdab9d1925671c2578_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
