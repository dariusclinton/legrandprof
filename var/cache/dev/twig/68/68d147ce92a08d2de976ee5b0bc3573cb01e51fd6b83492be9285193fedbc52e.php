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
        $__internal_caeb4228d5894e66efaf878ece8c769fbaee149220af62b0f6419d41e36f5870 = $this->env->getExtension("native_profiler");
        $__internal_caeb4228d5894e66efaf878ece8c769fbaee149220af62b0f6419d41e36f5870->enter($__internal_caeb4228d5894e66efaf878ece8c769fbaee149220af62b0f6419d41e36f5870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caeb4228d5894e66efaf878ece8c769fbaee149220af62b0f6419d41e36f5870->leave($__internal_caeb4228d5894e66efaf878ece8c769fbaee149220af62b0f6419d41e36f5870_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eae3cfab8a70a31afdc262cafd1373273b2d64f1b5ad937a9a357c82d571a4fe = $this->env->getExtension("native_profiler");
        $__internal_eae3cfab8a70a31afdc262cafd1373273b2d64f1b5ad937a9a357c82d571a4fe->enter($__internal_eae3cfab8a70a31afdc262cafd1373273b2d64f1b5ad937a9a357c82d571a4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_eae3cfab8a70a31afdc262cafd1373273b2d64f1b5ad937a9a357c82d571a4fe->leave($__internal_eae3cfab8a70a31afdc262cafd1373273b2d64f1b5ad937a9a357c82d571a4fe_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81ba5f6e284a3203caa1f4dab3a8e7cc85e011b7f3bbb53921c0e7d221dda11e = $this->env->getExtension("native_profiler");
        $__internal_81ba5f6e284a3203caa1f4dab3a8e7cc85e011b7f3bbb53921c0e7d221dda11e->enter($__internal_81ba5f6e284a3203caa1f4dab3a8e7cc85e011b7f3bbb53921c0e7d221dda11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_81ba5f6e284a3203caa1f4dab3a8e7cc85e011b7f3bbb53921c0e7d221dda11e->leave($__internal_81ba5f6e284a3203caa1f4dab3a8e7cc85e011b7f3bbb53921c0e7d221dda11e_prof);

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
