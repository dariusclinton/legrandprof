<?php

/* @LGPUser/Indisponibilite/add.html.twig */
class __TwigTemplate_2ee49e30452d35eebd11255cafd08c488f29838bb6b1fde8462571fefe1928ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 1);
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
        $__internal_a8d077ce4ae0ed1049e361e59bd78a052ebbc5224018c928c8a51dfd6f0dee9f = $this->env->getExtension("native_profiler");
        $__internal_a8d077ce4ae0ed1049e361e59bd78a052ebbc5224018c928c8a51dfd6f0dee9f->enter($__internal_a8d077ce4ae0ed1049e361e59bd78a052ebbc5224018c928c8a51dfd6f0dee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8d077ce4ae0ed1049e361e59bd78a052ebbc5224018c928c8a51dfd6f0dee9f->leave($__internal_a8d077ce4ae0ed1049e361e59bd78a052ebbc5224018c928c8a51dfd6f0dee9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b45935a9dccdaea4002e60d05d9c9e2ed656ac3f1f14b90f055a10b18acbed42 = $this->env->getExtension("native_profiler");
        $__internal_b45935a9dccdaea4002e60d05d9c9e2ed656ac3f1f14b90f055a10b18acbed42->enter($__internal_b45935a9dccdaea4002e60d05d9c9e2ed656ac3f1f14b90f055a10b18acbed42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b45935a9dccdaea4002e60d05d9c9e2ed656ac3f1f14b90f055a10b18acbed42->leave($__internal_b45935a9dccdaea4002e60d05d9c9e2ed656ac3f1f14b90f055a10b18acbed42_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9929da729402d99fbc26f9fdf91f27722dab5855452d6c82c4669f378e9da4c = $this->env->getExtension("native_profiler");
        $__internal_f9929da729402d99fbc26f9fdf91f27722dab5855452d6c82c4669f378e9da4c->enter($__internal_f9929da729402d99fbc26f9fdf91f27722dab5855452d6c82c4669f378e9da4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_f9929da729402d99fbc26f9fdf91f27722dab5855452d6c82c4669f378e9da4c->leave($__internal_f9929da729402d99fbc26f9fdf91f27722dab5855452d6c82c4669f378e9da4c_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/add.html.twig";
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
/*   Ajout d'une indisponibilité - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'une indiponibilité</h1>*/
/*   */
/*   {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}*/
/*   */
/* {% endblock %}*/
