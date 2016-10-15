<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_db14e56c91cba01ca8113b481797ac28913369168c358aeb920a6f3c5c96339e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_edfe4f8df70ef14f6be8129958e42a25767c52314cc3c84176adee2ac3ba93a0 = $this->env->getExtension("native_profiler");
        $__internal_edfe4f8df70ef14f6be8129958e42a25767c52314cc3c84176adee2ac3ba93a0->enter($__internal_edfe4f8df70ef14f6be8129958e42a25767c52314cc3c84176adee2ac3ba93a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfe4f8df70ef14f6be8129958e42a25767c52314cc3c84176adee2ac3ba93a0->leave($__internal_edfe4f8df70ef14f6be8129958e42a25767c52314cc3c84176adee2ac3ba93a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95d7635dbb469ceae9de30e2e1a47d11b3f8d814e707800521788f639231f30a = $this->env->getExtension("native_profiler");
        $__internal_95d7635dbb469ceae9de30e2e1a47d11b3f8d814e707800521788f639231f30a->enter($__internal_95d7635dbb469ceae9de30e2e1a47d11b3f8d814e707800521788f639231f30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_95d7635dbb469ceae9de30e2e1a47d11b3f8d814e707800521788f639231f30a->leave($__internal_95d7635dbb469ceae9de30e2e1a47d11b3f8d814e707800521788f639231f30a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
