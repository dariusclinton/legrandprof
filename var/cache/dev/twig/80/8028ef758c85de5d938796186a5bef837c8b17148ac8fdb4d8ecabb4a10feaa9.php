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
        $__internal_039eb023816086b88b9fec76c4e3e89c472dc4a07569814c9987c5abffe0aa6a = $this->env->getExtension("native_profiler");
        $__internal_039eb023816086b88b9fec76c4e3e89c472dc4a07569814c9987c5abffe0aa6a->enter($__internal_039eb023816086b88b9fec76c4e3e89c472dc4a07569814c9987c5abffe0aa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039eb023816086b88b9fec76c4e3e89c472dc4a07569814c9987c5abffe0aa6a->leave($__internal_039eb023816086b88b9fec76c4e3e89c472dc4a07569814c9987c5abffe0aa6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bf6a0b08410b85a83f640c4671270731949b066a1ea3b647efe1c2fcd0ad076 = $this->env->getExtension("native_profiler");
        $__internal_7bf6a0b08410b85a83f640c4671270731949b066a1ea3b647efe1c2fcd0ad076->enter($__internal_7bf6a0b08410b85a83f640c4671270731949b066a1ea3b647efe1c2fcd0ad076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_7bf6a0b08410b85a83f640c4671270731949b066a1ea3b647efe1c2fcd0ad076->leave($__internal_7bf6a0b08410b85a83f640c4671270731949b066a1ea3b647efe1c2fcd0ad076_prof);

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
