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
        $__internal_fbe12476441931d82be951bd6694a6f10261cc36bd0917d7c9ec60d4aa4c24c4 = $this->env->getExtension("native_profiler");
        $__internal_fbe12476441931d82be951bd6694a6f10261cc36bd0917d7c9ec60d4aa4c24c4->enter($__internal_fbe12476441931d82be951bd6694a6f10261cc36bd0917d7c9ec60d4aa4c24c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe12476441931d82be951bd6694a6f10261cc36bd0917d7c9ec60d4aa4c24c4->leave($__internal_fbe12476441931d82be951bd6694a6f10261cc36bd0917d7c9ec60d4aa4c24c4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c6d964b0b01f7c364d88b54b8e498709786aa4ff7586ba8abb6ec2c04a5b4b5 = $this->env->getExtension("native_profiler");
        $__internal_7c6d964b0b01f7c364d88b54b8e498709786aa4ff7586ba8abb6ec2c04a5b4b5->enter($__internal_7c6d964b0b01f7c364d88b54b8e498709786aa4ff7586ba8abb6ec2c04a5b4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_7c6d964b0b01f7c364d88b54b8e498709786aa4ff7586ba8abb6ec2c04a5b4b5->leave($__internal_7c6d964b0b01f7c364d88b54b8e498709786aa4ff7586ba8abb6ec2c04a5b4b5_prof);

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
