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
        $__internal_e359d5cdf797ac7dd5e1bde76b9870b8108c5b2072229cf30e30892f03e97124 = $this->env->getExtension("native_profiler");
        $__internal_e359d5cdf797ac7dd5e1bde76b9870b8108c5b2072229cf30e30892f03e97124->enter($__internal_e359d5cdf797ac7dd5e1bde76b9870b8108c5b2072229cf30e30892f03e97124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e359d5cdf797ac7dd5e1bde76b9870b8108c5b2072229cf30e30892f03e97124->leave($__internal_e359d5cdf797ac7dd5e1bde76b9870b8108c5b2072229cf30e30892f03e97124_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2aa2e3e9cb01db4fc03490ef4d6cea4a5d1e7d369d277eb09390a9c801ca3ccc = $this->env->getExtension("native_profiler");
        $__internal_2aa2e3e9cb01db4fc03490ef4d6cea4a5d1e7d369d277eb09390a9c801ca3ccc->enter($__internal_2aa2e3e9cb01db4fc03490ef4d6cea4a5d1e7d369d277eb09390a9c801ca3ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2aa2e3e9cb01db4fc03490ef4d6cea4a5d1e7d369d277eb09390a9c801ca3ccc->leave($__internal_2aa2e3e9cb01db4fc03490ef4d6cea4a5d1e7d369d277eb09390a9c801ca3ccc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_819312e31614f0796212ad042ace200823c566cee28f014f6239c5b5f838d0aa = $this->env->getExtension("native_profiler");
        $__internal_819312e31614f0796212ad042ace200823c566cee28f014f6239c5b5f838d0aa->enter($__internal_819312e31614f0796212ad042ace200823c566cee28f014f6239c5b5f838d0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_819312e31614f0796212ad042ace200823c566cee28f014f6239c5b5f838d0aa->leave($__internal_819312e31614f0796212ad042ace200823c566cee28f014f6239c5b5f838d0aa_prof);

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
