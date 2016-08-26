<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
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
        $__internal_22cf6f840903e501fac945330a8073c979585eba91586829ab34e2b5850aeaf9 = $this->env->getExtension("native_profiler");
        $__internal_22cf6f840903e501fac945330a8073c979585eba91586829ab34e2b5850aeaf9->enter($__internal_22cf6f840903e501fac945330a8073c979585eba91586829ab34e2b5850aeaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22cf6f840903e501fac945330a8073c979585eba91586829ab34e2b5850aeaf9->leave($__internal_22cf6f840903e501fac945330a8073c979585eba91586829ab34e2b5850aeaf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47b30637a91188cc7b6bd13295e8701d08cc4780e41bd9fa1c65b36a2b872130 = $this->env->getExtension("native_profiler");
        $__internal_47b30637a91188cc7b6bd13295e8701d08cc4780e41bd9fa1c65b36a2b872130->enter($__internal_47b30637a91188cc7b6bd13295e8701d08cc4780e41bd9fa1c65b36a2b872130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_47b30637a91188cc7b6bd13295e8701d08cc4780e41bd9fa1c65b36a2b872130->leave($__internal_47b30637a91188cc7b6bd13295e8701d08cc4780e41bd9fa1c65b36a2b872130_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
