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
        $__internal_176f5512923546c1380fa192ac46a77d6e187e89586dbdcc869e8f70b099b51c = $this->env->getExtension("native_profiler");
        $__internal_176f5512923546c1380fa192ac46a77d6e187e89586dbdcc869e8f70b099b51c->enter($__internal_176f5512923546c1380fa192ac46a77d6e187e89586dbdcc869e8f70b099b51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176f5512923546c1380fa192ac46a77d6e187e89586dbdcc869e8f70b099b51c->leave($__internal_176f5512923546c1380fa192ac46a77d6e187e89586dbdcc869e8f70b099b51c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07b19975940de984e0e68a8bb7ed7122af508cb3450f8487cc2d56253f2125ee = $this->env->getExtension("native_profiler");
        $__internal_07b19975940de984e0e68a8bb7ed7122af508cb3450f8487cc2d56253f2125ee->enter($__internal_07b19975940de984e0e68a8bb7ed7122af508cb3450f8487cc2d56253f2125ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_07b19975940de984e0e68a8bb7ed7122af508cb3450f8487cc2d56253f2125ee->leave($__internal_07b19975940de984e0e68a8bb7ed7122af508cb3450f8487cc2d56253f2125ee_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ad24c7a818de1c1ec55691b013e1f586b3742efb812c5f443d6202f4376b416 = $this->env->getExtension("native_profiler");
        $__internal_2ad24c7a818de1c1ec55691b013e1f586b3742efb812c5f443d6202f4376b416->enter($__internal_2ad24c7a818de1c1ec55691b013e1f586b3742efb812c5f443d6202f4376b416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_2ad24c7a818de1c1ec55691b013e1f586b3742efb812c5f443d6202f4376b416->leave($__internal_2ad24c7a818de1c1ec55691b013e1f586b3742efb812c5f443d6202f4376b416_prof);

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
