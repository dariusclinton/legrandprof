<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
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
        $__internal_85a7130fd7f6167307928bf10a8d8f1d133b8234bf594e38d2d48dc86f1b4904 = $this->env->getExtension("native_profiler");
        $__internal_85a7130fd7f6167307928bf10a8d8f1d133b8234bf594e38d2d48dc86f1b4904->enter($__internal_85a7130fd7f6167307928bf10a8d8f1d133b8234bf594e38d2d48dc86f1b4904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a7130fd7f6167307928bf10a8d8f1d133b8234bf594e38d2d48dc86f1b4904->leave($__internal_85a7130fd7f6167307928bf10a8d8f1d133b8234bf594e38d2d48dc86f1b4904_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4b10ac2092c5755f2c5ae811fbfc5a6620f14f3c5f613b6be4f83928a5ee31f = $this->env->getExtension("native_profiler");
        $__internal_d4b10ac2092c5755f2c5ae811fbfc5a6620f14f3c5f613b6be4f83928a5ee31f->enter($__internal_d4b10ac2092c5755f2c5ae811fbfc5a6620f14f3c5f613b6be4f83928a5ee31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d4b10ac2092c5755f2c5ae811fbfc5a6620f14f3c5f613b6be4f83928a5ee31f->leave($__internal_d4b10ac2092c5755f2c5ae811fbfc5a6620f14f3c5f613b6be4f83928a5ee31f_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4723e1cb82cfc4dc604d00cafb9af844b7631de38d8741fd1d64149f1c7c124f = $this->env->getExtension("native_profiler");
        $__internal_4723e1cb82cfc4dc604d00cafb9af844b7631de38d8741fd1d64149f1c7c124f->enter($__internal_4723e1cb82cfc4dc604d00cafb9af844b7631de38d8741fd1d64149f1c7c124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_4723e1cb82cfc4dc604d00cafb9af844b7631de38d8741fd1d64149f1c7c124f->leave($__internal_4723e1cb82cfc4dc604d00cafb9af844b7631de38d8741fd1d64149f1c7c124f_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
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
