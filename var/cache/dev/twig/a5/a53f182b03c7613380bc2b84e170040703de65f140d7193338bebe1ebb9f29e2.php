<?php

/* @LGPUser/Indisponibilite/update.html.twig */
class __TwigTemplate_7ce6c3dc86e7088e4a1e265274824070f068606aa733c4391f554039345818aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 1);
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
        $__internal_63e7f49bd0f352fc369bb2668653c6edd183158e62f017b9fc6f09a3294b3875 = $this->env->getExtension("native_profiler");
        $__internal_63e7f49bd0f352fc369bb2668653c6edd183158e62f017b9fc6f09a3294b3875->enter($__internal_63e7f49bd0f352fc369bb2668653c6edd183158e62f017b9fc6f09a3294b3875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e7f49bd0f352fc369bb2668653c6edd183158e62f017b9fc6f09a3294b3875->leave($__internal_63e7f49bd0f352fc369bb2668653c6edd183158e62f017b9fc6f09a3294b3875_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77404fdf08b659fa4ce5653079e806905955046b78023fc8878be1dac8b9c5be = $this->env->getExtension("native_profiler");
        $__internal_77404fdf08b659fa4ce5653079e806905955046b78023fc8878be1dac8b9c5be->enter($__internal_77404fdf08b659fa4ce5653079e806905955046b78023fc8878be1dac8b9c5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_77404fdf08b659fa4ce5653079e806905955046b78023fc8878be1dac8b9c5be->leave($__internal_77404fdf08b659fa4ce5653079e806905955046b78023fc8878be1dac8b9c5be_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ac6257084b473e339dfcd482346e2464664df5cb61921f29c199af115c1a94a = $this->env->getExtension("native_profiler");
        $__internal_8ac6257084b473e339dfcd482346e2464664df5cb61921f29c199af115c1a94a->enter($__internal_8ac6257084b473e339dfcd482346e2464664df5cb61921f29c199af115c1a94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_8ac6257084b473e339dfcd482346e2464664df5cb61921f29c199af115c1a94a->leave($__internal_8ac6257084b473e339dfcd482346e2464664df5cb61921f29c199af115c1a94a_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/update.html.twig";
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
/*   Mise à jour d'une indisponibilité - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Mise à d'une indiponibilité</h1>*/
/*   */
/*   {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}*/
/*   */
/* {% endblock %}*/
