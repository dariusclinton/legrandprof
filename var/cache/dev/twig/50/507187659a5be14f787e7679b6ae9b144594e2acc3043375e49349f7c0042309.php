<?php

/* @LGPUser/Avis/add.html.twig */
class __TwigTemplate_fd84e8fe955c49d0175413fe6f3a1a5e2d65d06ce8abcfb13436de4a03b25cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a67ccec4575b1a669f3ac0ad40d024196beb6a42a7dbeede48df770fbeeedf45 = $this->env->getExtension("native_profiler");
        $__internal_a67ccec4575b1a669f3ac0ad40d024196beb6a42a7dbeede48df770fbeeedf45->enter($__internal_a67ccec4575b1a669f3ac0ad40d024196beb6a42a7dbeede48df770fbeeedf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67ccec4575b1a669f3ac0ad40d024196beb6a42a7dbeede48df770fbeeedf45->leave($__internal_a67ccec4575b1a669f3ac0ad40d024196beb6a42a7dbeede48df770fbeeedf45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf60af39cb66db6504493517140d614a8c5c1e3e8eb7a9f88eb666e4dd6649ff = $this->env->getExtension("native_profiler");
        $__internal_bf60af39cb66db6504493517140d614a8c5c1e3e8eb7a9f88eb666e4dd6649ff->enter($__internal_bf60af39cb66db6504493517140d614a8c5c1e3e8eb7a9f88eb666e4dd6649ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bf60af39cb66db6504493517140d614a8c5c1e3e8eb7a9f88eb666e4dd6649ff->leave($__internal_bf60af39cb66db6504493517140d614a8c5c1e3e8eb7a9f88eb666e4dd6649ff_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfd44323e7802375e738c364006f0ae2f9743763d94aaac565a99bb8e8bebe16 = $this->env->getExtension("native_profiler");
        $__internal_cfd44323e7802375e738c364006f0ae2f9743763d94aaac565a99bb8e8bebe16->enter($__internal_cfd44323e7802375e738c364006f0ae2f9743763d94aaac565a99bb8e8bebe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_cfd44323e7802375e738c364006f0ae2f9743763d94aaac565a99bb8e8bebe16->leave($__internal_cfd44323e7802375e738c364006f0ae2f9743763d94aaac565a99bb8e8bebe16_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajout d'avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
