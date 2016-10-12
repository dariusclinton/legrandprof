<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_aee0adb452f4ca037c48c800836f5e195b7f07cf4d7a1e9376be1a705ad2abb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_ca19d0480645a066846a180a56c9d2536a95d4d8c92af4698bc1450c7aac171e = $this->env->getExtension("native_profiler");
        $__internal_ca19d0480645a066846a180a56c9d2536a95d4d8c92af4698bc1450c7aac171e->enter($__internal_ca19d0480645a066846a180a56c9d2536a95d4d8c92af4698bc1450c7aac171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca19d0480645a066846a180a56c9d2536a95d4d8c92af4698bc1450c7aac171e->leave($__internal_ca19d0480645a066846a180a56c9d2536a95d4d8c92af4698bc1450c7aac171e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6984f7977b9d73bd6b1f67e23804ff6f867e4899dee58d6d8a2fb1e045fb8ea = $this->env->getExtension("native_profiler");
        $__internal_e6984f7977b9d73bd6b1f67e23804ff6f867e4899dee58d6d8a2fb1e045fb8ea->enter($__internal_e6984f7977b9d73bd6b1f67e23804ff6f867e4899dee58d6d8a2fb1e045fb8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e6984f7977b9d73bd6b1f67e23804ff6f867e4899dee58d6d8a2fb1e045fb8ea->leave($__internal_e6984f7977b9d73bd6b1f67e23804ff6f867e4899dee58d6d8a2fb1e045fb8ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
