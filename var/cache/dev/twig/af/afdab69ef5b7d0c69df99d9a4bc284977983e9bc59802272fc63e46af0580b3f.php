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
        $__internal_e1333479ec6b18082650de73cb10b3cecb21ad7ea2cc3de5d9d76cd31b51a9f5 = $this->env->getExtension("native_profiler");
        $__internal_e1333479ec6b18082650de73cb10b3cecb21ad7ea2cc3de5d9d76cd31b51a9f5->enter($__internal_e1333479ec6b18082650de73cb10b3cecb21ad7ea2cc3de5d9d76cd31b51a9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1333479ec6b18082650de73cb10b3cecb21ad7ea2cc3de5d9d76cd31b51a9f5->leave($__internal_e1333479ec6b18082650de73cb10b3cecb21ad7ea2cc3de5d9d76cd31b51a9f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_033835f04174d9150333b995981b245d08fa96eea1f482179c76cf1e8b0a56d0 = $this->env->getExtension("native_profiler");
        $__internal_033835f04174d9150333b995981b245d08fa96eea1f482179c76cf1e8b0a56d0->enter($__internal_033835f04174d9150333b995981b245d08fa96eea1f482179c76cf1e8b0a56d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_033835f04174d9150333b995981b245d08fa96eea1f482179c76cf1e8b0a56d0->leave($__internal_033835f04174d9150333b995981b245d08fa96eea1f482179c76cf1e8b0a56d0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_03f9faa2863186f05239827a4b90da94be7a47c830ce7742ea57418ec67e8ef9 = $this->env->getExtension("native_profiler");
        $__internal_03f9faa2863186f05239827a4b90da94be7a47c830ce7742ea57418ec67e8ef9->enter($__internal_03f9faa2863186f05239827a4b90da94be7a47c830ce7742ea57418ec67e8ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_03f9faa2863186f05239827a4b90da94be7a47c830ce7742ea57418ec67e8ef9->leave($__internal_03f9faa2863186f05239827a4b90da94be7a47c830ce7742ea57418ec67e8ef9_prof);

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
