<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7c06de2a11d83b7ee2c184a6f56bdc5b34b8f11f6f8487cd1d4a5bf2c6726815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_3b8f3a4b93bfea41f55d0783dcd816d51fac36b49ffb884b66f6212c2989152d = $this->env->getExtension("native_profiler");
        $__internal_3b8f3a4b93bfea41f55d0783dcd816d51fac36b49ffb884b66f6212c2989152d->enter($__internal_3b8f3a4b93bfea41f55d0783dcd816d51fac36b49ffb884b66f6212c2989152d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b8f3a4b93bfea41f55d0783dcd816d51fac36b49ffb884b66f6212c2989152d->leave($__internal_3b8f3a4b93bfea41f55d0783dcd816d51fac36b49ffb884b66f6212c2989152d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd94aa3e1eb130b45d7da2d1e238709f58efa82d254214ab47dd5eae14863ea4 = $this->env->getExtension("native_profiler");
        $__internal_cd94aa3e1eb130b45d7da2d1e238709f58efa82d254214ab47dd5eae14863ea4->enter($__internal_cd94aa3e1eb130b45d7da2d1e238709f58efa82d254214ab47dd5eae14863ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_cd94aa3e1eb130b45d7da2d1e238709f58efa82d254214ab47dd5eae14863ea4->leave($__internal_cd94aa3e1eb130b45d7da2d1e238709f58efa82d254214ab47dd5eae14863ea4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
