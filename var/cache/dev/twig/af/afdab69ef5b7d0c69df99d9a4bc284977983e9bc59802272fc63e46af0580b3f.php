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
        $__internal_88479fb7de1b41d188d554499fb7e113bebe4615eb3aadadd1deb467b4271974 = $this->env->getExtension("native_profiler");
        $__internal_88479fb7de1b41d188d554499fb7e113bebe4615eb3aadadd1deb467b4271974->enter($__internal_88479fb7de1b41d188d554499fb7e113bebe4615eb3aadadd1deb467b4271974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88479fb7de1b41d188d554499fb7e113bebe4615eb3aadadd1deb467b4271974->leave($__internal_88479fb7de1b41d188d554499fb7e113bebe4615eb3aadadd1deb467b4271974_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2780e6d06375a45ef1809e910be64bc81c974065b90b14dba1f0de610ac193a2 = $this->env->getExtension("native_profiler");
        $__internal_2780e6d06375a45ef1809e910be64bc81c974065b90b14dba1f0de610ac193a2->enter($__internal_2780e6d06375a45ef1809e910be64bc81c974065b90b14dba1f0de610ac193a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2780e6d06375a45ef1809e910be64bc81c974065b90b14dba1f0de610ac193a2->leave($__internal_2780e6d06375a45ef1809e910be64bc81c974065b90b14dba1f0de610ac193a2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_05af661508737c948fc7047c1238cd36d14d86779487626377432b8f7dfb32c0 = $this->env->getExtension("native_profiler");
        $__internal_05af661508737c948fc7047c1238cd36d14d86779487626377432b8f7dfb32c0->enter($__internal_05af661508737c948fc7047c1238cd36d14d86779487626377432b8f7dfb32c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_05af661508737c948fc7047c1238cd36d14d86779487626377432b8f7dfb32c0->leave($__internal_05af661508737c948fc7047c1238cd36d14d86779487626377432b8f7dfb32c0_prof);

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
