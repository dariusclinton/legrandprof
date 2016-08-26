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
        $__internal_07e6a702250cd9fc3bce51def463890e23b52d46dcc54ccab25243fb6126853d = $this->env->getExtension("native_profiler");
        $__internal_07e6a702250cd9fc3bce51def463890e23b52d46dcc54ccab25243fb6126853d->enter($__internal_07e6a702250cd9fc3bce51def463890e23b52d46dcc54ccab25243fb6126853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e6a702250cd9fc3bce51def463890e23b52d46dcc54ccab25243fb6126853d->leave($__internal_07e6a702250cd9fc3bce51def463890e23b52d46dcc54ccab25243fb6126853d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f5d4ad4014eb909e4910d516fed0633bb5d139d36418c6879c92dfda15f8537 = $this->env->getExtension("native_profiler");
        $__internal_6f5d4ad4014eb909e4910d516fed0633bb5d139d36418c6879c92dfda15f8537->enter($__internal_6f5d4ad4014eb909e4910d516fed0633bb5d139d36418c6879c92dfda15f8537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_6f5d4ad4014eb909e4910d516fed0633bb5d139d36418c6879c92dfda15f8537->leave($__internal_6f5d4ad4014eb909e4910d516fed0633bb5d139d36418c6879c92dfda15f8537_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bdf15f954cbd908d707011b5f346c26a17be5e8e32c0608fb924724fb9e2ed3 = $this->env->getExtension("native_profiler");
        $__internal_9bdf15f954cbd908d707011b5f346c26a17be5e8e32c0608fb924724fb9e2ed3->enter($__internal_9bdf15f954cbd908d707011b5f346c26a17be5e8e32c0608fb924724fb9e2ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_9bdf15f954cbd908d707011b5f346c26a17be5e8e32c0608fb924724fb9e2ed3->leave($__internal_9bdf15f954cbd908d707011b5f346c26a17be5e8e32c0608fb924724fb9e2ed3_prof);

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
