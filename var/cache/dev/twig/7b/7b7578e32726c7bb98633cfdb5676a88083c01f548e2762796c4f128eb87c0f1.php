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
        $__internal_ed92ff5c0a438ca2f3418f7600f437769d9f423adc146d7fd7a6be4bed60df1b = $this->env->getExtension("native_profiler");
        $__internal_ed92ff5c0a438ca2f3418f7600f437769d9f423adc146d7fd7a6be4bed60df1b->enter($__internal_ed92ff5c0a438ca2f3418f7600f437769d9f423adc146d7fd7a6be4bed60df1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed92ff5c0a438ca2f3418f7600f437769d9f423adc146d7fd7a6be4bed60df1b->leave($__internal_ed92ff5c0a438ca2f3418f7600f437769d9f423adc146d7fd7a6be4bed60df1b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df67ee2cdab67058ade8a02c50746e72a585a7f1585e8c4948c42fd36fec7d2f = $this->env->getExtension("native_profiler");
        $__internal_df67ee2cdab67058ade8a02c50746e72a585a7f1585e8c4948c42fd36fec7d2f->enter($__internal_df67ee2cdab67058ade8a02c50746e72a585a7f1585e8c4948c42fd36fec7d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_df67ee2cdab67058ade8a02c50746e72a585a7f1585e8c4948c42fd36fec7d2f->leave($__internal_df67ee2cdab67058ade8a02c50746e72a585a7f1585e8c4948c42fd36fec7d2f_prof);

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
