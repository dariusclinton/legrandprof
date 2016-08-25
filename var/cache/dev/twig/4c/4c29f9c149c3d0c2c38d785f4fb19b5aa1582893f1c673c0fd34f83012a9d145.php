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
        $__internal_14e8800854bee2c3158d2472ab60a01f6590e4a53a08b1a918620ce6a5d8978a = $this->env->getExtension("native_profiler");
        $__internal_14e8800854bee2c3158d2472ab60a01f6590e4a53a08b1a918620ce6a5d8978a->enter($__internal_14e8800854bee2c3158d2472ab60a01f6590e4a53a08b1a918620ce6a5d8978a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e8800854bee2c3158d2472ab60a01f6590e4a53a08b1a918620ce6a5d8978a->leave($__internal_14e8800854bee2c3158d2472ab60a01f6590e4a53a08b1a918620ce6a5d8978a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42017ab6cc526e05ec189b3109167319e71eee5452402ba2dadb539d804cb672 = $this->env->getExtension("native_profiler");
        $__internal_42017ab6cc526e05ec189b3109167319e71eee5452402ba2dadb539d804cb672->enter($__internal_42017ab6cc526e05ec189b3109167319e71eee5452402ba2dadb539d804cb672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_42017ab6cc526e05ec189b3109167319e71eee5452402ba2dadb539d804cb672->leave($__internal_42017ab6cc526e05ec189b3109167319e71eee5452402ba2dadb539d804cb672_prof);

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
