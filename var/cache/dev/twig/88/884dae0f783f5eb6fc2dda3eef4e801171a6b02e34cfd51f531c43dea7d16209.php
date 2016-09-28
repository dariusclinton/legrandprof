<?php

/* LGPUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8289a9aa6768909206d53459e47ae4d0f5ac845c84045bd81222574220bfed7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b51387c895e0f4e7ea50908bb2836f482640efdabcf6926df003e2b766698277 = $this->env->getExtension("native_profiler");
        $__internal_b51387c895e0f4e7ea50908bb2836f482640efdabcf6926df003e2b766698277->enter($__internal_b51387c895e0f4e7ea50908bb2836f482640efdabcf6926df003e2b766698277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51387c895e0f4e7ea50908bb2836f482640efdabcf6926df003e2b766698277->leave($__internal_b51387c895e0f4e7ea50908bb2836f482640efdabcf6926df003e2b766698277_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72a3502ad6617c3e2215b99c707ae02830fa4309642335cfdece0be62bc1d9d1 = $this->env->getExtension("native_profiler");
        $__internal_72a3502ad6617c3e2215b99c707ae02830fa4309642335cfdece0be62bc1d9d1->enter($__internal_72a3502ad6617c3e2215b99c707ae02830fa4309642335cfdece0be62bc1d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_72a3502ad6617c3e2215b99c707ae02830fa4309642335cfdece0be62bc1d9d1->leave($__internal_72a3502ad6617c3e2215b99c707ae02830fa4309642335cfdece0be62bc1d9d1_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Resetting:checkEmail.html.twig";
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
