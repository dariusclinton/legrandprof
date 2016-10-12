<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42cfbfb6741769ca2075c566da8f902c19e3935fe0db0961b599b2c0c81605e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_44a4830379b49b6898aeebeb40772056321d85a44eafaa513981b63a3afd12cb = $this->env->getExtension("native_profiler");
        $__internal_44a4830379b49b6898aeebeb40772056321d85a44eafaa513981b63a3afd12cb->enter($__internal_44a4830379b49b6898aeebeb40772056321d85a44eafaa513981b63a3afd12cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a4830379b49b6898aeebeb40772056321d85a44eafaa513981b63a3afd12cb->leave($__internal_44a4830379b49b6898aeebeb40772056321d85a44eafaa513981b63a3afd12cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34c8e0643ae3d6b92f7413fa64ccdfe9b916135f8916f1f1a52f5d7b840532fb = $this->env->getExtension("native_profiler");
        $__internal_34c8e0643ae3d6b92f7413fa64ccdfe9b916135f8916f1f1a52f5d7b840532fb->enter($__internal_34c8e0643ae3d6b92f7413fa64ccdfe9b916135f8916f1f1a52f5d7b840532fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_34c8e0643ae3d6b92f7413fa64ccdfe9b916135f8916f1f1a52f5d7b840532fb->leave($__internal_34c8e0643ae3d6b92f7413fa64ccdfe9b916135f8916f1f1a52f5d7b840532fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
