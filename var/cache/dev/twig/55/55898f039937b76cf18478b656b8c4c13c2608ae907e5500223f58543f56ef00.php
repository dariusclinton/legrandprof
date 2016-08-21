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
        $__internal_501b05b7b6b012e5486ad45508bd1cc6d4a05bf260459c3398cc94c01bc92b35 = $this->env->getExtension("native_profiler");
        $__internal_501b05b7b6b012e5486ad45508bd1cc6d4a05bf260459c3398cc94c01bc92b35->enter($__internal_501b05b7b6b012e5486ad45508bd1cc6d4a05bf260459c3398cc94c01bc92b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501b05b7b6b012e5486ad45508bd1cc6d4a05bf260459c3398cc94c01bc92b35->leave($__internal_501b05b7b6b012e5486ad45508bd1cc6d4a05bf260459c3398cc94c01bc92b35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21766d9423fa8e5c8e5e4628c9da281f5bc5a58569b80ca593b60daaf9ff6472 = $this->env->getExtension("native_profiler");
        $__internal_21766d9423fa8e5c8e5e4628c9da281f5bc5a58569b80ca593b60daaf9ff6472->enter($__internal_21766d9423fa8e5c8e5e4628c9da281f5bc5a58569b80ca593b60daaf9ff6472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_21766d9423fa8e5c8e5e4628c9da281f5bc5a58569b80ca593b60daaf9ff6472->leave($__internal_21766d9423fa8e5c8e5e4628c9da281f5bc5a58569b80ca593b60daaf9ff6472_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05ba41f043c76973344b22cfb3c35c36068c002eed6fa3ec60a22556624f4d68 = $this->env->getExtension("native_profiler");
        $__internal_05ba41f043c76973344b22cfb3c35c36068c002eed6fa3ec60a22556624f4d68->enter($__internal_05ba41f043c76973344b22cfb3c35c36068c002eed6fa3ec60a22556624f4d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_05ba41f043c76973344b22cfb3c35c36068c002eed6fa3ec60a22556624f4d68->leave($__internal_05ba41f043c76973344b22cfb3c35c36068c002eed6fa3ec60a22556624f4d68_prof);

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
