<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f36032643373161617b6c78fd63ae1c84b0fc14ea52fe1ba5e77ec9e707778a = $this->env->getExtension("native_profiler");
        $__internal_2f36032643373161617b6c78fd63ae1c84b0fc14ea52fe1ba5e77ec9e707778a->enter($__internal_2f36032643373161617b6c78fd63ae1c84b0fc14ea52fe1ba5e77ec9e707778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f36032643373161617b6c78fd63ae1c84b0fc14ea52fe1ba5e77ec9e707778a->leave($__internal_2f36032643373161617b6c78fd63ae1c84b0fc14ea52fe1ba5e77ec9e707778a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39670d449c8f2163be89f059f67692b13f3af05c95e7078a28e635eb3c6a4ab7 = $this->env->getExtension("native_profiler");
        $__internal_39670d449c8f2163be89f059f67692b13f3af05c95e7078a28e635eb3c6a4ab7->enter($__internal_39670d449c8f2163be89f059f67692b13f3af05c95e7078a28e635eb3c6a4ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_39670d449c8f2163be89f059f67692b13f3af05c95e7078a28e635eb3c6a4ab7->leave($__internal_39670d449c8f2163be89f059f67692b13f3af05c95e7078a28e635eb3c6a4ab7_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e3e9cdaf3469636f7695ffbd1d4d2c35933b5fcc2787ddb42f7183098a33665 = $this->env->getExtension("native_profiler");
        $__internal_5e3e9cdaf3469636f7695ffbd1d4d2c35933b5fcc2787ddb42f7183098a33665->enter($__internal_5e3e9cdaf3469636f7695ffbd1d4d2c35933b5fcc2787ddb42f7183098a33665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_5e3e9cdaf3469636f7695ffbd1d4d2c35933b5fcc2787ddb42f7183098a33665->leave($__internal_5e3e9cdaf3469636f7695ffbd1d4d2c35933b5fcc2787ddb42f7183098a33665_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
