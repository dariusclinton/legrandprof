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
        $__internal_e0bf9547f2eb1b9dcbc2d2ba7516276547cd1658b6aa7cafc1d83327d7ab9759 = $this->env->getExtension("native_profiler");
        $__internal_e0bf9547f2eb1b9dcbc2d2ba7516276547cd1658b6aa7cafc1d83327d7ab9759->enter($__internal_e0bf9547f2eb1b9dcbc2d2ba7516276547cd1658b6aa7cafc1d83327d7ab9759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0bf9547f2eb1b9dcbc2d2ba7516276547cd1658b6aa7cafc1d83327d7ab9759->leave($__internal_e0bf9547f2eb1b9dcbc2d2ba7516276547cd1658b6aa7cafc1d83327d7ab9759_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ba959ed8a1348a5e747ff56a62f169d527c86e88ff3f1b619053dfaeb98d8e2 = $this->env->getExtension("native_profiler");
        $__internal_8ba959ed8a1348a5e747ff56a62f169d527c86e88ff3f1b619053dfaeb98d8e2->enter($__internal_8ba959ed8a1348a5e747ff56a62f169d527c86e88ff3f1b619053dfaeb98d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8ba959ed8a1348a5e747ff56a62f169d527c86e88ff3f1b619053dfaeb98d8e2->leave($__internal_8ba959ed8a1348a5e747ff56a62f169d527c86e88ff3f1b619053dfaeb98d8e2_prof);

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
