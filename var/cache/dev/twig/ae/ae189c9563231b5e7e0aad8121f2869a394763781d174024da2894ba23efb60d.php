<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
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
        $__internal_4d7252845975a58b02ab7de90da53142c6724644b09f1554798df206fab7736b = $this->env->getExtension("native_profiler");
        $__internal_4d7252845975a58b02ab7de90da53142c6724644b09f1554798df206fab7736b->enter($__internal_4d7252845975a58b02ab7de90da53142c6724644b09f1554798df206fab7736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7252845975a58b02ab7de90da53142c6724644b09f1554798df206fab7736b->leave($__internal_4d7252845975a58b02ab7de90da53142c6724644b09f1554798df206fab7736b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13562606b9203b0a587ff52dd887b565c6d459da1e67f82c2532e7b9d587de1a = $this->env->getExtension("native_profiler");
        $__internal_13562606b9203b0a587ff52dd887b565c6d459da1e67f82c2532e7b9d587de1a->enter($__internal_13562606b9203b0a587ff52dd887b565c6d459da1e67f82c2532e7b9d587de1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_13562606b9203b0a587ff52dd887b565c6d459da1e67f82c2532e7b9d587de1a->leave($__internal_13562606b9203b0a587ff52dd887b565c6d459da1e67f82c2532e7b9d587de1a_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d34b47f26f556dca0e8c752f337a9c6d36c6531c243af0e0f357daf16490164 = $this->env->getExtension("native_profiler");
        $__internal_7d34b47f26f556dca0e8c752f337a9c6d36c6531c243af0e0f357daf16490164->enter($__internal_7d34b47f26f556dca0e8c752f337a9c6d36c6531c243af0e0f357daf16490164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_7d34b47f26f556dca0e8c752f337a9c6d36c6531c243af0e0f357daf16490164->leave($__internal_7d34b47f26f556dca0e8c752f337a9c6d36c6531c243af0e0f357daf16490164_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
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
