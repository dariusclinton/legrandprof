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
        $__internal_3427dae95d23cf3be003fc09e8b1685a9882eda478f03db95dbcc21ae423d2ab = $this->env->getExtension("native_profiler");
        $__internal_3427dae95d23cf3be003fc09e8b1685a9882eda478f03db95dbcc21ae423d2ab->enter($__internal_3427dae95d23cf3be003fc09e8b1685a9882eda478f03db95dbcc21ae423d2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3427dae95d23cf3be003fc09e8b1685a9882eda478f03db95dbcc21ae423d2ab->leave($__internal_3427dae95d23cf3be003fc09e8b1685a9882eda478f03db95dbcc21ae423d2ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94489b50f94ae54162777c5f241cd96f85038dff2812331472e374e34b2fbf65 = $this->env->getExtension("native_profiler");
        $__internal_94489b50f94ae54162777c5f241cd96f85038dff2812331472e374e34b2fbf65->enter($__internal_94489b50f94ae54162777c5f241cd96f85038dff2812331472e374e34b2fbf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_94489b50f94ae54162777c5f241cd96f85038dff2812331472e374e34b2fbf65->leave($__internal_94489b50f94ae54162777c5f241cd96f85038dff2812331472e374e34b2fbf65_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13e3ab88dd58874f3bd56f27f320fd7d712be455769c680ede920acb5f44a411 = $this->env->getExtension("native_profiler");
        $__internal_13e3ab88dd58874f3bd56f27f320fd7d712be455769c680ede920acb5f44a411->enter($__internal_13e3ab88dd58874f3bd56f27f320fd7d712be455769c680ede920acb5f44a411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_13e3ab88dd58874f3bd56f27f320fd7d712be455769c680ede920acb5f44a411->leave($__internal_13e3ab88dd58874f3bd56f27f320fd7d712be455769c680ede920acb5f44a411_prof);

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
