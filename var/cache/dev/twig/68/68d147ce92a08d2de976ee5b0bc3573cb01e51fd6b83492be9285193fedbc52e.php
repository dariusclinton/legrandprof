<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_4202970eb30f55ceb07e8e391efa0c83ba7d257a0b78d2a54c34bcffb5c53e5d = $this->env->getExtension("native_profiler");
        $__internal_4202970eb30f55ceb07e8e391efa0c83ba7d257a0b78d2a54c34bcffb5c53e5d->enter($__internal_4202970eb30f55ceb07e8e391efa0c83ba7d257a0b78d2a54c34bcffb5c53e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4202970eb30f55ceb07e8e391efa0c83ba7d257a0b78d2a54c34bcffb5c53e5d->leave($__internal_4202970eb30f55ceb07e8e391efa0c83ba7d257a0b78d2a54c34bcffb5c53e5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5c64e11f106a7817f89b78de206865f36e34808a60de1f178306da883116a7d = $this->env->getExtension("native_profiler");
        $__internal_b5c64e11f106a7817f89b78de206865f36e34808a60de1f178306da883116a7d->enter($__internal_b5c64e11f106a7817f89b78de206865f36e34808a60de1f178306da883116a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_b5c64e11f106a7817f89b78de206865f36e34808a60de1f178306da883116a7d->leave($__internal_b5c64e11f106a7817f89b78de206865f36e34808a60de1f178306da883116a7d_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98e6637973a345ab2c3ed6da79aa8a5262089f985a08ee446072b1d48036eea5 = $this->env->getExtension("native_profiler");
        $__internal_98e6637973a345ab2c3ed6da79aa8a5262089f985a08ee446072b1d48036eea5->enter($__internal_98e6637973a345ab2c3ed6da79aa8a5262089f985a08ee446072b1d48036eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_98e6637973a345ab2c3ed6da79aa8a5262089f985a08ee446072b1d48036eea5->leave($__internal_98e6637973a345ab2c3ed6da79aa8a5262089f985a08ee446072b1d48036eea5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
