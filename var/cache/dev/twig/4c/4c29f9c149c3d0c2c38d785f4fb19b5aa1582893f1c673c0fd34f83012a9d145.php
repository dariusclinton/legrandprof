<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
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
        $__internal_b9c5432842cb707ca16dbb48c5d191090d212b5dbddfe124c997df774dbe8e56 = $this->env->getExtension("native_profiler");
        $__internal_b9c5432842cb707ca16dbb48c5d191090d212b5dbddfe124c997df774dbe8e56->enter($__internal_b9c5432842cb707ca16dbb48c5d191090d212b5dbddfe124c997df774dbe8e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c5432842cb707ca16dbb48c5d191090d212b5dbddfe124c997df774dbe8e56->leave($__internal_b9c5432842cb707ca16dbb48c5d191090d212b5dbddfe124c997df774dbe8e56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c151f7b29843b8b3087eb2a50295ff02d509cbf4f94953ed76a1de8514709b0 = $this->env->getExtension("native_profiler");
        $__internal_5c151f7b29843b8b3087eb2a50295ff02d509cbf4f94953ed76a1de8514709b0->enter($__internal_5c151f7b29843b8b3087eb2a50295ff02d509cbf4f94953ed76a1de8514709b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5c151f7b29843b8b3087eb2a50295ff02d509cbf4f94953ed76a1de8514709b0->leave($__internal_5c151f7b29843b8b3087eb2a50295ff02d509cbf4f94953ed76a1de8514709b0_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
