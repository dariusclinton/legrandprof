<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
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
        $__internal_9d79d8b95b3346c334f5c83ba83d73e64f1dc5e6bcd94c3544e6eaa4bcd36a71 = $this->env->getExtension("native_profiler");
        $__internal_9d79d8b95b3346c334f5c83ba83d73e64f1dc5e6bcd94c3544e6eaa4bcd36a71->enter($__internal_9d79d8b95b3346c334f5c83ba83d73e64f1dc5e6bcd94c3544e6eaa4bcd36a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d79d8b95b3346c334f5c83ba83d73e64f1dc5e6bcd94c3544e6eaa4bcd36a71->leave($__internal_9d79d8b95b3346c334f5c83ba83d73e64f1dc5e6bcd94c3544e6eaa4bcd36a71_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_80818fd20a2014e95420c8f0b566f655978778b4023cee7e32f3ddd18b4da766 = $this->env->getExtension("native_profiler");
        $__internal_80818fd20a2014e95420c8f0b566f655978778b4023cee7e32f3ddd18b4da766->enter($__internal_80818fd20a2014e95420c8f0b566f655978778b4023cee7e32f3ddd18b4da766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_80818fd20a2014e95420c8f0b566f655978778b4023cee7e32f3ddd18b4da766->leave($__internal_80818fd20a2014e95420c8f0b566f655978778b4023cee7e32f3ddd18b4da766_prof);

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
