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
        $__internal_71c8a8da8ed09158ae7e86b8381af178cdfdbca390a915059d637a2898937800 = $this->env->getExtension("native_profiler");
        $__internal_71c8a8da8ed09158ae7e86b8381af178cdfdbca390a915059d637a2898937800->enter($__internal_71c8a8da8ed09158ae7e86b8381af178cdfdbca390a915059d637a2898937800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c8a8da8ed09158ae7e86b8381af178cdfdbca390a915059d637a2898937800->leave($__internal_71c8a8da8ed09158ae7e86b8381af178cdfdbca390a915059d637a2898937800_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c04b43f1ff555f7d50862309d2b9deb9c3487b2774b19158633d9f9f802a325 = $this->env->getExtension("native_profiler");
        $__internal_9c04b43f1ff555f7d50862309d2b9deb9c3487b2774b19158633d9f9f802a325->enter($__internal_9c04b43f1ff555f7d50862309d2b9deb9c3487b2774b19158633d9f9f802a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9c04b43f1ff555f7d50862309d2b9deb9c3487b2774b19158633d9f9f802a325->leave($__internal_9c04b43f1ff555f7d50862309d2b9deb9c3487b2774b19158633d9f9f802a325_prof);

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
