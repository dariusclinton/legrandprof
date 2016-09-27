<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c78423cf0a8ad6f08f9fdcd648cfa48ed434ac129e7e4520eba21b49de2bc7c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_8cc951fb7bce91d28c94b4cd37ed8a05d67e2cc30d552bcf0983273f0eb2e71a = $this->env->getExtension("native_profiler");
        $__internal_8cc951fb7bce91d28c94b4cd37ed8a05d67e2cc30d552bcf0983273f0eb2e71a->enter($__internal_8cc951fb7bce91d28c94b4cd37ed8a05d67e2cc30d552bcf0983273f0eb2e71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc951fb7bce91d28c94b4cd37ed8a05d67e2cc30d552bcf0983273f0eb2e71a->leave($__internal_8cc951fb7bce91d28c94b4cd37ed8a05d67e2cc30d552bcf0983273f0eb2e71a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72fbc0d4c2edd34cd348a7fe0cd1ce34af435149b8cbf2c5df32c1fb14b653af = $this->env->getExtension("native_profiler");
        $__internal_72fbc0d4c2edd34cd348a7fe0cd1ce34af435149b8cbf2c5df32c1fb14b653af->enter($__internal_72fbc0d4c2edd34cd348a7fe0cd1ce34af435149b8cbf2c5df32c1fb14b653af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_72fbc0d4c2edd34cd348a7fe0cd1ce34af435149b8cbf2c5df32c1fb14b653af->leave($__internal_72fbc0d4c2edd34cd348a7fe0cd1ce34af435149b8cbf2c5df32c1fb14b653af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
