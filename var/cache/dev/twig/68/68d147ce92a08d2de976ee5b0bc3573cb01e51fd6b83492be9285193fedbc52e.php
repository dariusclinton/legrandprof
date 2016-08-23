<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
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
        $__internal_6dff68f3f3d01755e769294cf95d51dd09e62423a2bf8a4ca159ce84a71763fe = $this->env->getExtension("native_profiler");
        $__internal_6dff68f3f3d01755e769294cf95d51dd09e62423a2bf8a4ca159ce84a71763fe->enter($__internal_6dff68f3f3d01755e769294cf95d51dd09e62423a2bf8a4ca159ce84a71763fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dff68f3f3d01755e769294cf95d51dd09e62423a2bf8a4ca159ce84a71763fe->leave($__internal_6dff68f3f3d01755e769294cf95d51dd09e62423a2bf8a4ca159ce84a71763fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f52ee6572a9e30e6b5613e7e10d43ccea7dab2ede7da62fc3f53957df0f1664 = $this->env->getExtension("native_profiler");
        $__internal_8f52ee6572a9e30e6b5613e7e10d43ccea7dab2ede7da62fc3f53957df0f1664->enter($__internal_8f52ee6572a9e30e6b5613e7e10d43ccea7dab2ede7da62fc3f53957df0f1664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_8f52ee6572a9e30e6b5613e7e10d43ccea7dab2ede7da62fc3f53957df0f1664->leave($__internal_8f52ee6572a9e30e6b5613e7e10d43ccea7dab2ede7da62fc3f53957df0f1664_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cda113ef9c2ae2da92818c886707a07d7a4f117440fec28e0e61bd4be44c3a4b = $this->env->getExtension("native_profiler");
        $__internal_cda113ef9c2ae2da92818c886707a07d7a4f117440fec28e0e61bd4be44c3a4b->enter($__internal_cda113ef9c2ae2da92818c886707a07d7a4f117440fec28e0e61bd4be44c3a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_cda113ef9c2ae2da92818c886707a07d7a4f117440fec28e0e61bd4be44c3a4b->leave($__internal_cda113ef9c2ae2da92818c886707a07d7a4f117440fec28e0e61bd4be44c3a4b_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
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
