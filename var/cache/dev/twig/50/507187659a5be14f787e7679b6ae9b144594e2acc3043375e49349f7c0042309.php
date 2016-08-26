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
        $__internal_76c1442e6371aa3bbbf14b36e8af5ab57459314ea118fb157963e7d42732b1d0 = $this->env->getExtension("native_profiler");
        $__internal_76c1442e6371aa3bbbf14b36e8af5ab57459314ea118fb157963e7d42732b1d0->enter($__internal_76c1442e6371aa3bbbf14b36e8af5ab57459314ea118fb157963e7d42732b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76c1442e6371aa3bbbf14b36e8af5ab57459314ea118fb157963e7d42732b1d0->leave($__internal_76c1442e6371aa3bbbf14b36e8af5ab57459314ea118fb157963e7d42732b1d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8c582d7c504e7ff697b823cbfa95f71a97b8e741d5b344b7c6b7f031f252f55 = $this->env->getExtension("native_profiler");
        $__internal_f8c582d7c504e7ff697b823cbfa95f71a97b8e741d5b344b7c6b7f031f252f55->enter($__internal_f8c582d7c504e7ff697b823cbfa95f71a97b8e741d5b344b7c6b7f031f252f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f8c582d7c504e7ff697b823cbfa95f71a97b8e741d5b344b7c6b7f031f252f55->leave($__internal_f8c582d7c504e7ff697b823cbfa95f71a97b8e741d5b344b7c6b7f031f252f55_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_41dfcb10aebee44124bbf8862074802421f475c8f74a4525475639d631267eaf = $this->env->getExtension("native_profiler");
        $__internal_41dfcb10aebee44124bbf8862074802421f475c8f74a4525475639d631267eaf->enter($__internal_41dfcb10aebee44124bbf8862074802421f475c8f74a4525475639d631267eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_41dfcb10aebee44124bbf8862074802421f475c8f74a4525475639d631267eaf->leave($__internal_41dfcb10aebee44124bbf8862074802421f475c8f74a4525475639d631267eaf_prof);

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
