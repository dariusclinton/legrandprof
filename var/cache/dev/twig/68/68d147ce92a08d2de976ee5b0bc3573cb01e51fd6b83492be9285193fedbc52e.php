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
        $__internal_9ef6ad802cec543db8fce11e4d4cae88c722e965876f11eeb34433a833c02b40 = $this->env->getExtension("native_profiler");
        $__internal_9ef6ad802cec543db8fce11e4d4cae88c722e965876f11eeb34433a833c02b40->enter($__internal_9ef6ad802cec543db8fce11e4d4cae88c722e965876f11eeb34433a833c02b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ef6ad802cec543db8fce11e4d4cae88c722e965876f11eeb34433a833c02b40->leave($__internal_9ef6ad802cec543db8fce11e4d4cae88c722e965876f11eeb34433a833c02b40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eca2b9fabf49bae437e1fbc31fc4374289fa8461ccceebc47714737c48f0553 = $this->env->getExtension("native_profiler");
        $__internal_6eca2b9fabf49bae437e1fbc31fc4374289fa8461ccceebc47714737c48f0553->enter($__internal_6eca2b9fabf49bae437e1fbc31fc4374289fa8461ccceebc47714737c48f0553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_6eca2b9fabf49bae437e1fbc31fc4374289fa8461ccceebc47714737c48f0553->leave($__internal_6eca2b9fabf49bae437e1fbc31fc4374289fa8461ccceebc47714737c48f0553_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a96c73b8cfff80e351b9d90c0dd2050e0b4ce0bbca8d33b5281bf63e98d2b70e = $this->env->getExtension("native_profiler");
        $__internal_a96c73b8cfff80e351b9d90c0dd2050e0b4ce0bbca8d33b5281bf63e98d2b70e->enter($__internal_a96c73b8cfff80e351b9d90c0dd2050e0b4ce0bbca8d33b5281bf63e98d2b70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_a96c73b8cfff80e351b9d90c0dd2050e0b4ce0bbca8d33b5281bf63e98d2b70e->leave($__internal_a96c73b8cfff80e351b9d90c0dd2050e0b4ce0bbca8d33b5281bf63e98d2b70e_prof);

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
