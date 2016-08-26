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
        $__internal_a0a8d6a12a60c9a703ad647b9721a49e13166d2ed6c7f9cd32c732618b03e781 = $this->env->getExtension("native_profiler");
        $__internal_a0a8d6a12a60c9a703ad647b9721a49e13166d2ed6c7f9cd32c732618b03e781->enter($__internal_a0a8d6a12a60c9a703ad647b9721a49e13166d2ed6c7f9cd32c732618b03e781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a8d6a12a60c9a703ad647b9721a49e13166d2ed6c7f9cd32c732618b03e781->leave($__internal_a0a8d6a12a60c9a703ad647b9721a49e13166d2ed6c7f9cd32c732618b03e781_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec16d5e50e78ede4218ff60e441b98d54e6b9f172b94acfee8ce97d209d6719 = $this->env->getExtension("native_profiler");
        $__internal_3ec16d5e50e78ede4218ff60e441b98d54e6b9f172b94acfee8ce97d209d6719->enter($__internal_3ec16d5e50e78ede4218ff60e441b98d54e6b9f172b94acfee8ce97d209d6719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_3ec16d5e50e78ede4218ff60e441b98d54e6b9f172b94acfee8ce97d209d6719->leave($__internal_3ec16d5e50e78ede4218ff60e441b98d54e6b9f172b94acfee8ce97d209d6719_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53b6267f8418892d5dc2590014c1e05d2ff89d2d8acb888a74e93c8ed5846b61 = $this->env->getExtension("native_profiler");
        $__internal_53b6267f8418892d5dc2590014c1e05d2ff89d2d8acb888a74e93c8ed5846b61->enter($__internal_53b6267f8418892d5dc2590014c1e05d2ff89d2d8acb888a74e93c8ed5846b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_53b6267f8418892d5dc2590014c1e05d2ff89d2d8acb888a74e93c8ed5846b61->leave($__internal_53b6267f8418892d5dc2590014c1e05d2ff89d2d8acb888a74e93c8ed5846b61_prof);

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
