<?php

/* LGPUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ab7d8ab7690ad087adb8c2924316d3d8566ff3aee919ecf6938f4ce5e9d89669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_9465619cd13c0b89662160ee00ea1cb306376c56fa860814613ad6833f73b3b3 = $this->env->getExtension("native_profiler");
        $__internal_9465619cd13c0b89662160ee00ea1cb306376c56fa860814613ad6833f73b3b3->enter($__internal_9465619cd13c0b89662160ee00ea1cb306376c56fa860814613ad6833f73b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9465619cd13c0b89662160ee00ea1cb306376c56fa860814613ad6833f73b3b3->leave($__internal_9465619cd13c0b89662160ee00ea1cb306376c56fa860814613ad6833f73b3b3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_340e5b3b9dc3757c3d6877b85e9fee6b28d5f4957369ed2236a1c3c3d7577497 = $this->env->getExtension("native_profiler");
        $__internal_340e5b3b9dc3757c3d6877b85e9fee6b28d5f4957369ed2236a1c3c3d7577497->enter($__internal_340e5b3b9dc3757c3d6877b85e9fee6b28d5f4957369ed2236a1c3c3d7577497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_340e5b3b9dc3757c3d6877b85e9fee6b28d5f4957369ed2236a1c3c3d7577497->leave($__internal_340e5b3b9dc3757c3d6877b85e9fee6b28d5f4957369ed2236a1c3c3d7577497_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Registration:checkEmail.html.twig";
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
