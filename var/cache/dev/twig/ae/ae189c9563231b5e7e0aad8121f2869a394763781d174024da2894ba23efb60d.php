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
        $__internal_64d5ac9d203533202b01e932853f3bad604bf5921b34298b0d30254346702647 = $this->env->getExtension("native_profiler");
        $__internal_64d5ac9d203533202b01e932853f3bad604bf5921b34298b0d30254346702647->enter($__internal_64d5ac9d203533202b01e932853f3bad604bf5921b34298b0d30254346702647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d5ac9d203533202b01e932853f3bad604bf5921b34298b0d30254346702647->leave($__internal_64d5ac9d203533202b01e932853f3bad604bf5921b34298b0d30254346702647_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_61fee0170835841c9fa1318a2a8cdb3cdfb5d7221731c7ee2b3f45fa2dd11cb9 = $this->env->getExtension("native_profiler");
        $__internal_61fee0170835841c9fa1318a2a8cdb3cdfb5d7221731c7ee2b3f45fa2dd11cb9->enter($__internal_61fee0170835841c9fa1318a2a8cdb3cdfb5d7221731c7ee2b3f45fa2dd11cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_61fee0170835841c9fa1318a2a8cdb3cdfb5d7221731c7ee2b3f45fa2dd11cb9->leave($__internal_61fee0170835841c9fa1318a2a8cdb3cdfb5d7221731c7ee2b3f45fa2dd11cb9_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07a824e58857d8b0509b3ddd83da937c403afbe1d508f7c160b2469d574f7df5 = $this->env->getExtension("native_profiler");
        $__internal_07a824e58857d8b0509b3ddd83da937c403afbe1d508f7c160b2469d574f7df5->enter($__internal_07a824e58857d8b0509b3ddd83da937c403afbe1d508f7c160b2469d574f7df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_07a824e58857d8b0509b3ddd83da937c403afbe1d508f7c160b2469d574f7df5->leave($__internal_07a824e58857d8b0509b3ddd83da937c403afbe1d508f7c160b2469d574f7df5_prof);

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
