<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2e046a4820dea23c8f2d0ee89b7fdeca3fb30856beac520f86583e1fb04b2c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_146f60a540c5a4ac60890800ff451424ede6bd56253c3e0df56e57de82f72cd0 = $this->env->getExtension("native_profiler");
        $__internal_146f60a540c5a4ac60890800ff451424ede6bd56253c3e0df56e57de82f72cd0->enter($__internal_146f60a540c5a4ac60890800ff451424ede6bd56253c3e0df56e57de82f72cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146f60a540c5a4ac60890800ff451424ede6bd56253c3e0df56e57de82f72cd0->leave($__internal_146f60a540c5a4ac60890800ff451424ede6bd56253c3e0df56e57de82f72cd0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_988d5e00389accab0eb315562aff47b6e2b6f98b707775447005d034732de7df = $this->env->getExtension("native_profiler");
        $__internal_988d5e00389accab0eb315562aff47b6e2b6f98b707775447005d034732de7df->enter($__internal_988d5e00389accab0eb315562aff47b6e2b6f98b707775447005d034732de7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_988d5e00389accab0eb315562aff47b6e2b6f98b707775447005d034732de7df->leave($__internal_988d5e00389accab0eb315562aff47b6e2b6f98b707775447005d034732de7df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
