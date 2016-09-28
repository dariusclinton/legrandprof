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
        $__internal_898d64e04ec8bb54a3e605c6bb52085165525f6a74361f236844d706d2281d67 = $this->env->getExtension("native_profiler");
        $__internal_898d64e04ec8bb54a3e605c6bb52085165525f6a74361f236844d706d2281d67->enter($__internal_898d64e04ec8bb54a3e605c6bb52085165525f6a74361f236844d706d2281d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898d64e04ec8bb54a3e605c6bb52085165525f6a74361f236844d706d2281d67->leave($__internal_898d64e04ec8bb54a3e605c6bb52085165525f6a74361f236844d706d2281d67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a2e8688b671eb8aab9b29857a3f3b108654ea70b0b268ea68b1246f0c386672 = $this->env->getExtension("native_profiler");
        $__internal_3a2e8688b671eb8aab9b29857a3f3b108654ea70b0b268ea68b1246f0c386672->enter($__internal_3a2e8688b671eb8aab9b29857a3f3b108654ea70b0b268ea68b1246f0c386672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "LGPUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_3a2e8688b671eb8aab9b29857a3f3b108654ea70b0b268ea68b1246f0c386672->leave($__internal_3a2e8688b671eb8aab9b29857a3f3b108654ea70b0b268ea68b1246f0c386672_prof);

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
