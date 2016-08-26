<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_05f97206c866e841e82ab59108611b22ba2733585480458282fb6f7f5800801e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_77d80dd329b3234cf2ba6e5cafc6b397183e3186dff0a7fc512d6c15cc9d84e6 = $this->env->getExtension("native_profiler");
        $__internal_77d80dd329b3234cf2ba6e5cafc6b397183e3186dff0a7fc512d6c15cc9d84e6->enter($__internal_77d80dd329b3234cf2ba6e5cafc6b397183e3186dff0a7fc512d6c15cc9d84e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d80dd329b3234cf2ba6e5cafc6b397183e3186dff0a7fc512d6c15cc9d84e6->leave($__internal_77d80dd329b3234cf2ba6e5cafc6b397183e3186dff0a7fc512d6c15cc9d84e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff9eee1deff681cae6ed1cc8500abe165f0aa466caa08fe4a6ae0347d7fd38a7 = $this->env->getExtension("native_profiler");
        $__internal_ff9eee1deff681cae6ed1cc8500abe165f0aa466caa08fe4a6ae0347d7fd38a7->enter($__internal_ff9eee1deff681cae6ed1cc8500abe165f0aa466caa08fe4a6ae0347d7fd38a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ff9eee1deff681cae6ed1cc8500abe165f0aa466caa08fe4a6ae0347d7fd38a7->leave($__internal_ff9eee1deff681cae6ed1cc8500abe165f0aa466caa08fe4a6ae0347d7fd38a7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f46036fa74f63e741b5d0c6cafdd080b52e55c3efcfc353cb833f0ff6c021aee = $this->env->getExtension("native_profiler");
        $__internal_f46036fa74f63e741b5d0c6cafdd080b52e55c3efcfc353cb833f0ff6c021aee->enter($__internal_f46036fa74f63e741b5d0c6cafdd080b52e55c3efcfc353cb833f0ff6c021aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_f46036fa74f63e741b5d0c6cafdd080b52e55c3efcfc353cb833f0ff6c021aee->leave($__internal_f46036fa74f63e741b5d0c6cafdd080b52e55c3efcfc353cb833f0ff6c021aee_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
/*   Modification d'un avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Modification d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
