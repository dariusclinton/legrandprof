<?php

/* LGPUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7c06de2a11d83b7ee2c184a6f56bdc5b34b8f11f6f8487cd1d4a5bf2c6726815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c13c20291efdda1df3deebd361ee4dbf0c93bddc9d2d59251cf647736f4724b6 = $this->env->getExtension("native_profiler");
        $__internal_c13c20291efdda1df3deebd361ee4dbf0c93bddc9d2d59251cf647736f4724b6->enter($__internal_c13c20291efdda1df3deebd361ee4dbf0c93bddc9d2d59251cf647736f4724b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13c20291efdda1df3deebd361ee4dbf0c93bddc9d2d59251cf647736f4724b6->leave($__internal_c13c20291efdda1df3deebd361ee4dbf0c93bddc9d2d59251cf647736f4724b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61f5fa6926adcabe778ca78a0cf10a86eddfae7f87f638a9cf6051d503261243 = $this->env->getExtension("native_profiler");
        $__internal_61f5fa6926adcabe778ca78a0cf10a86eddfae7f87f638a9cf6051d503261243->enter($__internal_61f5fa6926adcabe778ca78a0cf10a86eddfae7f87f638a9cf6051d503261243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "LGPUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_61f5fa6926adcabe778ca78a0cf10a86eddfae7f87f638a9cf6051d503261243->leave($__internal_61f5fa6926adcabe778ca78a0cf10a86eddfae7f87f638a9cf6051d503261243_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:ChangePassword:changePassword.html.twig";
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
