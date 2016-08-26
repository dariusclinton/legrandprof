<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6e65b62ede2bb5764409f4dbbc5c6c5845b409605ca8acd8cbefe76fa64afda8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_511b850ff34bec5397d8428bbdcb22251c4db12dd30bd916d787aab6118c1029 = $this->env->getExtension("native_profiler");
        $__internal_511b850ff34bec5397d8428bbdcb22251c4db12dd30bd916d787aab6118c1029->enter($__internal_511b850ff34bec5397d8428bbdcb22251c4db12dd30bd916d787aab6118c1029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511b850ff34bec5397d8428bbdcb22251c4db12dd30bd916d787aab6118c1029->leave($__internal_511b850ff34bec5397d8428bbdcb22251c4db12dd30bd916d787aab6118c1029_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa55beca16b2164c2dc60518fddb267a13966890be7beaf7c2bdf455ed3e0773 = $this->env->getExtension("native_profiler");
        $__internal_aa55beca16b2164c2dc60518fddb267a13966890be7beaf7c2bdf455ed3e0773->enter($__internal_aa55beca16b2164c2dc60518fddb267a13966890be7beaf7c2bdf455ed3e0773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_aa55beca16b2164c2dc60518fddb267a13966890be7beaf7c2bdf455ed3e0773->leave($__internal_aa55beca16b2164c2dc60518fddb267a13966890be7beaf7c2bdf455ed3e0773_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
