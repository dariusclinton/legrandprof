<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_2f5049bf237955eb14e2d31bfd6f70228fc5c565f62530ed1404c45f0665dfd9 = $this->env->getExtension("native_profiler");
        $__internal_2f5049bf237955eb14e2d31bfd6f70228fc5c565f62530ed1404c45f0665dfd9->enter($__internal_2f5049bf237955eb14e2d31bfd6f70228fc5c565f62530ed1404c45f0665dfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5049bf237955eb14e2d31bfd6f70228fc5c565f62530ed1404c45f0665dfd9->leave($__internal_2f5049bf237955eb14e2d31bfd6f70228fc5c565f62530ed1404c45f0665dfd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c71f46543f00a1b43e8395b4de4dab7ade1cb956f7a515e5dec829c172286e92 = $this->env->getExtension("native_profiler");
        $__internal_c71f46543f00a1b43e8395b4de4dab7ade1cb956f7a515e5dec829c172286e92->enter($__internal_c71f46543f00a1b43e8395b4de4dab7ade1cb956f7a515e5dec829c172286e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c71f46543f00a1b43e8395b4de4dab7ade1cb956f7a515e5dec829c172286e92->leave($__internal_c71f46543f00a1b43e8395b4de4dab7ade1cb956f7a515e5dec829c172286e92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
