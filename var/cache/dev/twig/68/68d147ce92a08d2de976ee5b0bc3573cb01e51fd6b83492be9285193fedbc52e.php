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
        $__internal_4ba58e699344f4569c07740c6486dc80f08af0a816f18fd7bf5af96a5d95516e = $this->env->getExtension("native_profiler");
        $__internal_4ba58e699344f4569c07740c6486dc80f08af0a816f18fd7bf5af96a5d95516e->enter($__internal_4ba58e699344f4569c07740c6486dc80f08af0a816f18fd7bf5af96a5d95516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba58e699344f4569c07740c6486dc80f08af0a816f18fd7bf5af96a5d95516e->leave($__internal_4ba58e699344f4569c07740c6486dc80f08af0a816f18fd7bf5af96a5d95516e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92812b7abc193c8627d148afd6413e4e70e9e3ed755adc27fe62724726f3daf = $this->env->getExtension("native_profiler");
        $__internal_e92812b7abc193c8627d148afd6413e4e70e9e3ed755adc27fe62724726f3daf->enter($__internal_e92812b7abc193c8627d148afd6413e4e70e9e3ed755adc27fe62724726f3daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_e92812b7abc193c8627d148afd6413e4e70e9e3ed755adc27fe62724726f3daf->leave($__internal_e92812b7abc193c8627d148afd6413e4e70e9e3ed755adc27fe62724726f3daf_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3aafa8d99775aa0b6fdfb91192c909196153a20d91830ca817e2ca02ab86d13 = $this->env->getExtension("native_profiler");
        $__internal_e3aafa8d99775aa0b6fdfb91192c909196153a20d91830ca817e2ca02ab86d13->enter($__internal_e3aafa8d99775aa0b6fdfb91192c909196153a20d91830ca817e2ca02ab86d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_e3aafa8d99775aa0b6fdfb91192c909196153a20d91830ca817e2ca02ab86d13->leave($__internal_e3aafa8d99775aa0b6fdfb91192c909196153a20d91830ca817e2ca02ab86d13_prof);

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
