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
        $__internal_83004fed6475ee925c3d732f3ac62f2d478959b1968e21749c70fbde2f828537 = $this->env->getExtension("native_profiler");
        $__internal_83004fed6475ee925c3d732f3ac62f2d478959b1968e21749c70fbde2f828537->enter($__internal_83004fed6475ee925c3d732f3ac62f2d478959b1968e21749c70fbde2f828537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83004fed6475ee925c3d732f3ac62f2d478959b1968e21749c70fbde2f828537->leave($__internal_83004fed6475ee925c3d732f3ac62f2d478959b1968e21749c70fbde2f828537_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a31ce97f6d5b0593bdc5842e9d9c7ea3d0fdbcdc6c42042fa78dcd6a217dc2db = $this->env->getExtension("native_profiler");
        $__internal_a31ce97f6d5b0593bdc5842e9d9c7ea3d0fdbcdc6c42042fa78dcd6a217dc2db->enter($__internal_a31ce97f6d5b0593bdc5842e9d9c7ea3d0fdbcdc6c42042fa78dcd6a217dc2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_a31ce97f6d5b0593bdc5842e9d9c7ea3d0fdbcdc6c42042fa78dcd6a217dc2db->leave($__internal_a31ce97f6d5b0593bdc5842e9d9c7ea3d0fdbcdc6c42042fa78dcd6a217dc2db_prof);

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
