<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_9e738a5cdb0f3384d6e7280cfe3700f2096f9421318985dea485cb3eefbd5728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_65d2a05973d4bf5ea68bfaaf0aed3fc770632e2388d91f763b537dcd02785d88 = $this->env->getExtension("native_profiler");
        $__internal_65d2a05973d4bf5ea68bfaaf0aed3fc770632e2388d91f763b537dcd02785d88->enter($__internal_65d2a05973d4bf5ea68bfaaf0aed3fc770632e2388d91f763b537dcd02785d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d2a05973d4bf5ea68bfaaf0aed3fc770632e2388d91f763b537dcd02785d88->leave($__internal_65d2a05973d4bf5ea68bfaaf0aed3fc770632e2388d91f763b537dcd02785d88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_341c0eeaa8859ae82f60b2b9c8558c31bd582e86c2ad6e0098541b5425d2f4cf = $this->env->getExtension("native_profiler");
        $__internal_341c0eeaa8859ae82f60b2b9c8558c31bd582e86c2ad6e0098541b5425d2f4cf->enter($__internal_341c0eeaa8859ae82f60b2b9c8558c31bd582e86c2ad6e0098541b5425d2f4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_341c0eeaa8859ae82f60b2b9c8558c31bd582e86c2ad6e0098541b5425d2f4cf->leave($__internal_341c0eeaa8859ae82f60b2b9c8558c31bd582e86c2ad6e0098541b5425d2f4cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
