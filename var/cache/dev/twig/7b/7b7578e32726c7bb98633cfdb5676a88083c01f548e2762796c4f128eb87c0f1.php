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
        $__internal_27d756a77bd14c149204b845db9c011e4f1219cf69ba583d8e85c0701e140df4 = $this->env->getExtension("native_profiler");
        $__internal_27d756a77bd14c149204b845db9c011e4f1219cf69ba583d8e85c0701e140df4->enter($__internal_27d756a77bd14c149204b845db9c011e4f1219cf69ba583d8e85c0701e140df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d756a77bd14c149204b845db9c011e4f1219cf69ba583d8e85c0701e140df4->leave($__internal_27d756a77bd14c149204b845db9c011e4f1219cf69ba583d8e85c0701e140df4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d44cc5efd0b3e3600c386b630fbbbab4cf869262d978d628907412f8b7031dc = $this->env->getExtension("native_profiler");
        $__internal_1d44cc5efd0b3e3600c386b630fbbbab4cf869262d978d628907412f8b7031dc->enter($__internal_1d44cc5efd0b3e3600c386b630fbbbab4cf869262d978d628907412f8b7031dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1d44cc5efd0b3e3600c386b630fbbbab4cf869262d978d628907412f8b7031dc->leave($__internal_1d44cc5efd0b3e3600c386b630fbbbab4cf869262d978d628907412f8b7031dc_prof);

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
