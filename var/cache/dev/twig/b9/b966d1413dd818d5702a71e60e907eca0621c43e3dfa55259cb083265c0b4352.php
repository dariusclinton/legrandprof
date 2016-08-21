<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_76424bd045e9bf1a54203252e1f6641525ea7cb92f51655ae854943cac288d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41995d85ba85399828d66b1a952743afc7cb7f135d68f359df2cb456df157f09 = $this->env->getExtension("native_profiler");
        $__internal_41995d85ba85399828d66b1a952743afc7cb7f135d68f359df2cb456df157f09->enter($__internal_41995d85ba85399828d66b1a952743afc7cb7f135d68f359df2cb456df157f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41995d85ba85399828d66b1a952743afc7cb7f135d68f359df2cb456df157f09->leave($__internal_41995d85ba85399828d66b1a952743afc7cb7f135d68f359df2cb456df157f09_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd4285d035bb0c5760e5d9d4b1d56bd7dae6a9e6a626e09fef2fe182ed60e9d2 = $this->env->getExtension("native_profiler");
        $__internal_fd4285d035bb0c5760e5d9d4b1d56bd7dae6a9e6a626e09fef2fe182ed60e9d2->enter($__internal_fd4285d035bb0c5760e5d9d4b1d56bd7dae6a9e6a626e09fef2fe182ed60e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_fd4285d035bb0c5760e5d9d4b1d56bd7dae6a9e6a626e09fef2fe182ed60e9d2->leave($__internal_fd4285d035bb0c5760e5d9d4b1d56bd7dae6a9e6a626e09fef2fe182ed60e9d2_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
