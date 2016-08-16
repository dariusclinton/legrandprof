<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c506d54736c9c504f7b97107248817a25e8eb2f86d4a0a243bb11ab632866ab9 = $this->env->getExtension("native_profiler");
        $__internal_c506d54736c9c504f7b97107248817a25e8eb2f86d4a0a243bb11ab632866ab9->enter($__internal_c506d54736c9c504f7b97107248817a25e8eb2f86d4a0a243bb11ab632866ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c506d54736c9c504f7b97107248817a25e8eb2f86d4a0a243bb11ab632866ab9->leave($__internal_c506d54736c9c504f7b97107248817a25e8eb2f86d4a0a243bb11ab632866ab9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d299b94f32068ff38e6fbff117e9e90c095c50b86385712bdd9e311ea0c71aec = $this->env->getExtension("native_profiler");
        $__internal_d299b94f32068ff38e6fbff117e9e90c095c50b86385712bdd9e311ea0c71aec->enter($__internal_d299b94f32068ff38e6fbff117e9e90c095c50b86385712bdd9e311ea0c71aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d299b94f32068ff38e6fbff117e9e90c095c50b86385712bdd9e311ea0c71aec->leave($__internal_d299b94f32068ff38e6fbff117e9e90c095c50b86385712bdd9e311ea0c71aec_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b726fd5d8e8c54bfb9737e790909d221252d157fe90208ab563aa19ee551145 = $this->env->getExtension("native_profiler");
        $__internal_3b726fd5d8e8c54bfb9737e790909d221252d157fe90208ab563aa19ee551145->enter($__internal_3b726fd5d8e8c54bfb9737e790909d221252d157fe90208ab563aa19ee551145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_3b726fd5d8e8c54bfb9737e790909d221252d157fe90208ab563aa19ee551145->leave($__internal_3b726fd5d8e8c54bfb9737e790909d221252d157fe90208ab563aa19ee551145_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
