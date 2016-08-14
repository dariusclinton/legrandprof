<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
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
        $__internal_2197e7e35d36c2c32ca57fe8e876730dad3400cbc37c1ac3b47b5db7418aa4ce = $this->env->getExtension("native_profiler");
        $__internal_2197e7e35d36c2c32ca57fe8e876730dad3400cbc37c1ac3b47b5db7418aa4ce->enter($__internal_2197e7e35d36c2c32ca57fe8e876730dad3400cbc37c1ac3b47b5db7418aa4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2197e7e35d36c2c32ca57fe8e876730dad3400cbc37c1ac3b47b5db7418aa4ce->leave($__internal_2197e7e35d36c2c32ca57fe8e876730dad3400cbc37c1ac3b47b5db7418aa4ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84eb18dcae7dfe9abe5d1ceb87fb0a17ac4ef86833ff29445d959a8c47194350 = $this->env->getExtension("native_profiler");
        $__internal_84eb18dcae7dfe9abe5d1ceb87fb0a17ac4ef86833ff29445d959a8c47194350->enter($__internal_84eb18dcae7dfe9abe5d1ceb87fb0a17ac4ef86833ff29445d959a8c47194350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_84eb18dcae7dfe9abe5d1ceb87fb0a17ac4ef86833ff29445d959a8c47194350->leave($__internal_84eb18dcae7dfe9abe5d1ceb87fb0a17ac4ef86833ff29445d959a8c47194350_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2377299c0cbbff00540de6c7f79662608f8eb2437169cc2ee48e6b9e2a0635c7 = $this->env->getExtension("native_profiler");
        $__internal_2377299c0cbbff00540de6c7f79662608f8eb2437169cc2ee48e6b9e2a0635c7->enter($__internal_2377299c0cbbff00540de6c7f79662608f8eb2437169cc2ee48e6b9e2a0635c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_2377299c0cbbff00540de6c7f79662608f8eb2437169cc2ee48e6b9e2a0635c7->leave($__internal_2377299c0cbbff00540de6c7f79662608f8eb2437169cc2ee48e6b9e2a0635c7_prof);

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
