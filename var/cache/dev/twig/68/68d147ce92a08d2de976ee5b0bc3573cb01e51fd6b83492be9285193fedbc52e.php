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
        $__internal_0f7c89db49ba7af5761bfd70095c4959d828798387715917505b4f92168cf15b = $this->env->getExtension("native_profiler");
        $__internal_0f7c89db49ba7af5761bfd70095c4959d828798387715917505b4f92168cf15b->enter($__internal_0f7c89db49ba7af5761bfd70095c4959d828798387715917505b4f92168cf15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7c89db49ba7af5761bfd70095c4959d828798387715917505b4f92168cf15b->leave($__internal_0f7c89db49ba7af5761bfd70095c4959d828798387715917505b4f92168cf15b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5414383297f84b2ccd2d4ee0da629736162c88472bde746b70f6fc078ebc47 = $this->env->getExtension("native_profiler");
        $__internal_0b5414383297f84b2ccd2d4ee0da629736162c88472bde746b70f6fc078ebc47->enter($__internal_0b5414383297f84b2ccd2d4ee0da629736162c88472bde746b70f6fc078ebc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_0b5414383297f84b2ccd2d4ee0da629736162c88472bde746b70f6fc078ebc47->leave($__internal_0b5414383297f84b2ccd2d4ee0da629736162c88472bde746b70f6fc078ebc47_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e221760fba00a60bf64cc8fe2e1395dba7395e4d1746a8f4ecb8a65d31cc0f3b = $this->env->getExtension("native_profiler");
        $__internal_e221760fba00a60bf64cc8fe2e1395dba7395e4d1746a8f4ecb8a65d31cc0f3b->enter($__internal_e221760fba00a60bf64cc8fe2e1395dba7395e4d1746a8f4ecb8a65d31cc0f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_e221760fba00a60bf64cc8fe2e1395dba7395e4d1746a8f4ecb8a65d31cc0f3b->leave($__internal_e221760fba00a60bf64cc8fe2e1395dba7395e4d1746a8f4ecb8a65d31cc0f3b_prof);

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
