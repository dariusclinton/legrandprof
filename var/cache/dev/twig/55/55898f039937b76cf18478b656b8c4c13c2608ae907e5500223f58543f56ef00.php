<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
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
        $__internal_fa73dea813f6ea56277340b22c929259f23f5b4d0be8d84ee058997c4bf032e4 = $this->env->getExtension("native_profiler");
        $__internal_fa73dea813f6ea56277340b22c929259f23f5b4d0be8d84ee058997c4bf032e4->enter($__internal_fa73dea813f6ea56277340b22c929259f23f5b4d0be8d84ee058997c4bf032e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa73dea813f6ea56277340b22c929259f23f5b4d0be8d84ee058997c4bf032e4->leave($__internal_fa73dea813f6ea56277340b22c929259f23f5b4d0be8d84ee058997c4bf032e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ae1d203811817fc0e82d8ce9198339985c5f7a3413ea9ade031e9c6dd06bd5 = $this->env->getExtension("native_profiler");
        $__internal_06ae1d203811817fc0e82d8ce9198339985c5f7a3413ea9ade031e9c6dd06bd5->enter($__internal_06ae1d203811817fc0e82d8ce9198339985c5f7a3413ea9ade031e9c6dd06bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_06ae1d203811817fc0e82d8ce9198339985c5f7a3413ea9ade031e9c6dd06bd5->leave($__internal_06ae1d203811817fc0e82d8ce9198339985c5f7a3413ea9ade031e9c6dd06bd5_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b40215df4a55281361c77aac5653dc1a4e9f4d2504d18507be099eed6d8a1bc8 = $this->env->getExtension("native_profiler");
        $__internal_b40215df4a55281361c77aac5653dc1a4e9f4d2504d18507be099eed6d8a1bc8->enter($__internal_b40215df4a55281361c77aac5653dc1a4e9f4d2504d18507be099eed6d8a1bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_b40215df4a55281361c77aac5653dc1a4e9f4d2504d18507be099eed6d8a1bc8->leave($__internal_b40215df4a55281361c77aac5653dc1a4e9f4d2504d18507be099eed6d8a1bc8_prof);

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
