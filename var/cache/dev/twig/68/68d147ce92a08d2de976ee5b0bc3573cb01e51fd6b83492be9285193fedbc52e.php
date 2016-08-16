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
        $__internal_1fd70f320a116aa80b77f81d9a6e73b52db6e123078b15711d9b4ef767937401 = $this->env->getExtension("native_profiler");
        $__internal_1fd70f320a116aa80b77f81d9a6e73b52db6e123078b15711d9b4ef767937401->enter($__internal_1fd70f320a116aa80b77f81d9a6e73b52db6e123078b15711d9b4ef767937401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd70f320a116aa80b77f81d9a6e73b52db6e123078b15711d9b4ef767937401->leave($__internal_1fd70f320a116aa80b77f81d9a6e73b52db6e123078b15711d9b4ef767937401_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff5a27b97015e485365b36fc48f0be86231dcf0fdb69826d32cda3c39cfe60e2 = $this->env->getExtension("native_profiler");
        $__internal_ff5a27b97015e485365b36fc48f0be86231dcf0fdb69826d32cda3c39cfe60e2->enter($__internal_ff5a27b97015e485365b36fc48f0be86231dcf0fdb69826d32cda3c39cfe60e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_ff5a27b97015e485365b36fc48f0be86231dcf0fdb69826d32cda3c39cfe60e2->leave($__internal_ff5a27b97015e485365b36fc48f0be86231dcf0fdb69826d32cda3c39cfe60e2_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68e4ee727dd611269feee1c242171a09628489d9a5b8a6cdf4b64db7a9f6fa56 = $this->env->getExtension("native_profiler");
        $__internal_68e4ee727dd611269feee1c242171a09628489d9a5b8a6cdf4b64db7a9f6fa56->enter($__internal_68e4ee727dd611269feee1c242171a09628489d9a5b8a6cdf4b64db7a9f6fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_68e4ee727dd611269feee1c242171a09628489d9a5b8a6cdf4b64db7a9f6fa56->leave($__internal_68e4ee727dd611269feee1c242171a09628489d9a5b8a6cdf4b64db7a9f6fa56_prof);

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
