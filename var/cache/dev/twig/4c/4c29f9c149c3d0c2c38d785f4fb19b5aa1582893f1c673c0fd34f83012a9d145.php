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
        $__internal_3f7228e711eead72ffff51bf43b66eef3a44437c6ca41e81ddf63ec3433e7c27 = $this->env->getExtension("native_profiler");
        $__internal_3f7228e711eead72ffff51bf43b66eef3a44437c6ca41e81ddf63ec3433e7c27->enter($__internal_3f7228e711eead72ffff51bf43b66eef3a44437c6ca41e81ddf63ec3433e7c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7228e711eead72ffff51bf43b66eef3a44437c6ca41e81ddf63ec3433e7c27->leave($__internal_3f7228e711eead72ffff51bf43b66eef3a44437c6ca41e81ddf63ec3433e7c27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c215a9fff2960b5dbe6ca7d1169481ea06f209e192fe32f43d41250f4038ec1 = $this->env->getExtension("native_profiler");
        $__internal_1c215a9fff2960b5dbe6ca7d1169481ea06f209e192fe32f43d41250f4038ec1->enter($__internal_1c215a9fff2960b5dbe6ca7d1169481ea06f209e192fe32f43d41250f4038ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1c215a9fff2960b5dbe6ca7d1169481ea06f209e192fe32f43d41250f4038ec1->leave($__internal_1c215a9fff2960b5dbe6ca7d1169481ea06f209e192fe32f43d41250f4038ec1_prof);

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
