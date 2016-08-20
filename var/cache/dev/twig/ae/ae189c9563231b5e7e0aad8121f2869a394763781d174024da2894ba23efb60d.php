<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
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
        $__internal_4a26e6a2eb770c032acc067c95e823d8bb76c7a4ae5f38272e0e7ceb0a3b1a73 = $this->env->getExtension("native_profiler");
        $__internal_4a26e6a2eb770c032acc067c95e823d8bb76c7a4ae5f38272e0e7ceb0a3b1a73->enter($__internal_4a26e6a2eb770c032acc067c95e823d8bb76c7a4ae5f38272e0e7ceb0a3b1a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a26e6a2eb770c032acc067c95e823d8bb76c7a4ae5f38272e0e7ceb0a3b1a73->leave($__internal_4a26e6a2eb770c032acc067c95e823d8bb76c7a4ae5f38272e0e7ceb0a3b1a73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a982700625bc5bdd7e698bc4fd9a3a255d1ae83969cf1838ff092912d2f1e9b3 = $this->env->getExtension("native_profiler");
        $__internal_a982700625bc5bdd7e698bc4fd9a3a255d1ae83969cf1838ff092912d2f1e9b3->enter($__internal_a982700625bc5bdd7e698bc4fd9a3a255d1ae83969cf1838ff092912d2f1e9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_a982700625bc5bdd7e698bc4fd9a3a255d1ae83969cf1838ff092912d2f1e9b3->leave($__internal_a982700625bc5bdd7e698bc4fd9a3a255d1ae83969cf1838ff092912d2f1e9b3_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f840df4572a32aa2c8b648d92a4bf80fc71d7fa84e8400d788dbf172676298af = $this->env->getExtension("native_profiler");
        $__internal_f840df4572a32aa2c8b648d92a4bf80fc71d7fa84e8400d788dbf172676298af->enter($__internal_f840df4572a32aa2c8b648d92a4bf80fc71d7fa84e8400d788dbf172676298af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_f840df4572a32aa2c8b648d92a4bf80fc71d7fa84e8400d788dbf172676298af->leave($__internal_f840df4572a32aa2c8b648d92a4bf80fc71d7fa84e8400d788dbf172676298af_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
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
