<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65bf60ec878b87bf7aa5bd6fc1e5adfda07d0a44e500f8e95091af386b0d1be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8460dfc9118e683daa017d55450a991a55d42612ef434b3ef10442c5f31ab53d = $this->env->getExtension("native_profiler");
        $__internal_8460dfc9118e683daa017d55450a991a55d42612ef434b3ef10442c5f31ab53d->enter($__internal_8460dfc9118e683daa017d55450a991a55d42612ef434b3ef10442c5f31ab53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8460dfc9118e683daa017d55450a991a55d42612ef434b3ef10442c5f31ab53d->leave($__internal_8460dfc9118e683daa017d55450a991a55d42612ef434b3ef10442c5f31ab53d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65216547ca8119f254cdfec84f07c2cb134d26d366474df105459b814a868e0d = $this->env->getExtension("native_profiler");
        $__internal_65216547ca8119f254cdfec84f07c2cb134d26d366474df105459b814a868e0d->enter($__internal_65216547ca8119f254cdfec84f07c2cb134d26d366474df105459b814a868e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_65216547ca8119f254cdfec84f07c2cb134d26d366474df105459b814a868e0d->leave($__internal_65216547ca8119f254cdfec84f07c2cb134d26d366474df105459b814a868e0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
