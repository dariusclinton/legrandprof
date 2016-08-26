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
        $__internal_8e96b1cc29543a3a8cc2a1e8c9ead9c486a0f0df30cbabf9f6fb02b4c00c3ec4 = $this->env->getExtension("native_profiler");
        $__internal_8e96b1cc29543a3a8cc2a1e8c9ead9c486a0f0df30cbabf9f6fb02b4c00c3ec4->enter($__internal_8e96b1cc29543a3a8cc2a1e8c9ead9c486a0f0df30cbabf9f6fb02b4c00c3ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e96b1cc29543a3a8cc2a1e8c9ead9c486a0f0df30cbabf9f6fb02b4c00c3ec4->leave($__internal_8e96b1cc29543a3a8cc2a1e8c9ead9c486a0f0df30cbabf9f6fb02b4c00c3ec4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fabf21040ae3d436da604fd5d7aee07c0de35cec66883cd77b3defb237c13b53 = $this->env->getExtension("native_profiler");
        $__internal_fabf21040ae3d436da604fd5d7aee07c0de35cec66883cd77b3defb237c13b53->enter($__internal_fabf21040ae3d436da604fd5d7aee07c0de35cec66883cd77b3defb237c13b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fabf21040ae3d436da604fd5d7aee07c0de35cec66883cd77b3defb237c13b53->leave($__internal_fabf21040ae3d436da604fd5d7aee07c0de35cec66883cd77b3defb237c13b53_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f40a5d5ea0b6dba05bf3d5ec375994deb74008eb596139cc910e66ecb4726bb = $this->env->getExtension("native_profiler");
        $__internal_7f40a5d5ea0b6dba05bf3d5ec375994deb74008eb596139cc910e66ecb4726bb->enter($__internal_7f40a5d5ea0b6dba05bf3d5ec375994deb74008eb596139cc910e66ecb4726bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_7f40a5d5ea0b6dba05bf3d5ec375994deb74008eb596139cc910e66ecb4726bb->leave($__internal_7f40a5d5ea0b6dba05bf3d5ec375994deb74008eb596139cc910e66ecb4726bb_prof);

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
