<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_6a88d2a2f0a77016e5516f783f6a3d0e21113b81a4b628bea429a33880d89069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_105653403906391bcfd1edc1b18f81669f63061f989a338d140d845d887b246f = $this->env->getExtension("native_profiler");
        $__internal_105653403906391bcfd1edc1b18f81669f63061f989a338d140d845d887b246f->enter($__internal_105653403906391bcfd1edc1b18f81669f63061f989a338d140d845d887b246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105653403906391bcfd1edc1b18f81669f63061f989a338d140d845d887b246f->leave($__internal_105653403906391bcfd1edc1b18f81669f63061f989a338d140d845d887b246f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df751f46fdfd2618d4a0a03ba6c251f1247b01dc6c00e2c4a1ba33e627f7b6e4 = $this->env->getExtension("native_profiler");
        $__internal_df751f46fdfd2618d4a0a03ba6c251f1247b01dc6c00e2c4a1ba33e627f7b6e4->enter($__internal_df751f46fdfd2618d4a0a03ba6c251f1247b01dc6c00e2c4a1ba33e627f7b6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_df751f46fdfd2618d4a0a03ba6c251f1247b01dc6c00e2c4a1ba33e627f7b6e4->leave($__internal_df751f46fdfd2618d4a0a03ba6c251f1247b01dc6c00e2c4a1ba33e627f7b6e4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_13b0320394b1ffbbd11d4147ea3b5d5680bc96995d29612d4a2ad196efc03246 = $this->env->getExtension("native_profiler");
        $__internal_13b0320394b1ffbbd11d4147ea3b5d5680bc96995d29612d4a2ad196efc03246->enter($__internal_13b0320394b1ffbbd11d4147ea3b5d5680bc96995d29612d4a2ad196efc03246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_13b0320394b1ffbbd11d4147ea3b5d5680bc96995d29612d4a2ad196efc03246->leave($__internal_13b0320394b1ffbbd11d4147ea3b5d5680bc96995d29612d4a2ad196efc03246_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
