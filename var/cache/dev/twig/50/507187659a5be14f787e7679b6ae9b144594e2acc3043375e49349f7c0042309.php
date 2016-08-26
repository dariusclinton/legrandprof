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
        $__internal_a860b152ada68489b9027528b958c221832a627c87fa2014dfb4e0ba7be6e88b = $this->env->getExtension("native_profiler");
        $__internal_a860b152ada68489b9027528b958c221832a627c87fa2014dfb4e0ba7be6e88b->enter($__internal_a860b152ada68489b9027528b958c221832a627c87fa2014dfb4e0ba7be6e88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a860b152ada68489b9027528b958c221832a627c87fa2014dfb4e0ba7be6e88b->leave($__internal_a860b152ada68489b9027528b958c221832a627c87fa2014dfb4e0ba7be6e88b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02ecb82152ae9058efe7b13be99480ab3a7c4bd8e2b38cb658c6ab4f7188be5c = $this->env->getExtension("native_profiler");
        $__internal_02ecb82152ae9058efe7b13be99480ab3a7c4bd8e2b38cb658c6ab4f7188be5c->enter($__internal_02ecb82152ae9058efe7b13be99480ab3a7c4bd8e2b38cb658c6ab4f7188be5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_02ecb82152ae9058efe7b13be99480ab3a7c4bd8e2b38cb658c6ab4f7188be5c->leave($__internal_02ecb82152ae9058efe7b13be99480ab3a7c4bd8e2b38cb658c6ab4f7188be5c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c68824e2e197a46d8c79255e43ebda0c6aa7ca1e4cc09ed23e006091d87236 = $this->env->getExtension("native_profiler");
        $__internal_23c68824e2e197a46d8c79255e43ebda0c6aa7ca1e4cc09ed23e006091d87236->enter($__internal_23c68824e2e197a46d8c79255e43ebda0c6aa7ca1e4cc09ed23e006091d87236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_23c68824e2e197a46d8c79255e43ebda0c6aa7ca1e4cc09ed23e006091d87236->leave($__internal_23c68824e2e197a46d8c79255e43ebda0c6aa7ca1e4cc09ed23e006091d87236_prof);

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
