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
        $__internal_b5c2eb0d70f7f1a68b947119c0c322feb43d0b0287120d8d6dc59b9e9839ea11 = $this->env->getExtension("native_profiler");
        $__internal_b5c2eb0d70f7f1a68b947119c0c322feb43d0b0287120d8d6dc59b9e9839ea11->enter($__internal_b5c2eb0d70f7f1a68b947119c0c322feb43d0b0287120d8d6dc59b9e9839ea11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c2eb0d70f7f1a68b947119c0c322feb43d0b0287120d8d6dc59b9e9839ea11->leave($__internal_b5c2eb0d70f7f1a68b947119c0c322feb43d0b0287120d8d6dc59b9e9839ea11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1125881b96c45a56a2d7efa29d1548cd827ba45c949de7954da9f8d41e40b8d0 = $this->env->getExtension("native_profiler");
        $__internal_1125881b96c45a56a2d7efa29d1548cd827ba45c949de7954da9f8d41e40b8d0->enter($__internal_1125881b96c45a56a2d7efa29d1548cd827ba45c949de7954da9f8d41e40b8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1125881b96c45a56a2d7efa29d1548cd827ba45c949de7954da9f8d41e40b8d0->leave($__internal_1125881b96c45a56a2d7efa29d1548cd827ba45c949de7954da9f8d41e40b8d0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_122ad5f6823cd5e88563264ed28d35e08b94d5447c870363f52c8b3414d52dad = $this->env->getExtension("native_profiler");
        $__internal_122ad5f6823cd5e88563264ed28d35e08b94d5447c870363f52c8b3414d52dad->enter($__internal_122ad5f6823cd5e88563264ed28d35e08b94d5447c870363f52c8b3414d52dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_122ad5f6823cd5e88563264ed28d35e08b94d5447c870363f52c8b3414d52dad->leave($__internal_122ad5f6823cd5e88563264ed28d35e08b94d5447c870363f52c8b3414d52dad_prof);

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
