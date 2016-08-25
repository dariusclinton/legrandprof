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
        $__internal_de2ac6254a45f2e57754e529f2b27cf33c3eee0a39268066fa16d459111969e1 = $this->env->getExtension("native_profiler");
        $__internal_de2ac6254a45f2e57754e529f2b27cf33c3eee0a39268066fa16d459111969e1->enter($__internal_de2ac6254a45f2e57754e529f2b27cf33c3eee0a39268066fa16d459111969e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de2ac6254a45f2e57754e529f2b27cf33c3eee0a39268066fa16d459111969e1->leave($__internal_de2ac6254a45f2e57754e529f2b27cf33c3eee0a39268066fa16d459111969e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e593df9ab5978f24cf94ce2d2c3d7614ec2969f67547b10bc8780980e18028 = $this->env->getExtension("native_profiler");
        $__internal_d2e593df9ab5978f24cf94ce2d2c3d7614ec2969f67547b10bc8780980e18028->enter($__internal_d2e593df9ab5978f24cf94ce2d2c3d7614ec2969f67547b10bc8780980e18028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d2e593df9ab5978f24cf94ce2d2c3d7614ec2969f67547b10bc8780980e18028->leave($__internal_d2e593df9ab5978f24cf94ce2d2c3d7614ec2969f67547b10bc8780980e18028_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0abe1716bf7da80dcdd76d43e3eb571a32856d04351934f6a836ce53ad75a70d = $this->env->getExtension("native_profiler");
        $__internal_0abe1716bf7da80dcdd76d43e3eb571a32856d04351934f6a836ce53ad75a70d->enter($__internal_0abe1716bf7da80dcdd76d43e3eb571a32856d04351934f6a836ce53ad75a70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_0abe1716bf7da80dcdd76d43e3eb571a32856d04351934f6a836ce53ad75a70d->leave($__internal_0abe1716bf7da80dcdd76d43e3eb571a32856d04351934f6a836ce53ad75a70d_prof);

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
