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
        $__internal_2c218be8bccd70256ef82a75faa0c4d79aef4492144fefbf3c999c23aa551741 = $this->env->getExtension("native_profiler");
        $__internal_2c218be8bccd70256ef82a75faa0c4d79aef4492144fefbf3c999c23aa551741->enter($__internal_2c218be8bccd70256ef82a75faa0c4d79aef4492144fefbf3c999c23aa551741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c218be8bccd70256ef82a75faa0c4d79aef4492144fefbf3c999c23aa551741->leave($__internal_2c218be8bccd70256ef82a75faa0c4d79aef4492144fefbf3c999c23aa551741_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38785179faa76e9babbaf07acf5b4cf3d4c8e21df076e09f22e1c9655e5c9254 = $this->env->getExtension("native_profiler");
        $__internal_38785179faa76e9babbaf07acf5b4cf3d4c8e21df076e09f22e1c9655e5c9254->enter($__internal_38785179faa76e9babbaf07acf5b4cf3d4c8e21df076e09f22e1c9655e5c9254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_38785179faa76e9babbaf07acf5b4cf3d4c8e21df076e09f22e1c9655e5c9254->leave($__internal_38785179faa76e9babbaf07acf5b4cf3d4c8e21df076e09f22e1c9655e5c9254_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f08febb097da7d98f8b9ffbbe3ff18ca1a7928bd10853e08632b3b2be4dff22 = $this->env->getExtension("native_profiler");
        $__internal_5f08febb097da7d98f8b9ffbbe3ff18ca1a7928bd10853e08632b3b2be4dff22->enter($__internal_5f08febb097da7d98f8b9ffbbe3ff18ca1a7928bd10853e08632b3b2be4dff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_5f08febb097da7d98f8b9ffbbe3ff18ca1a7928bd10853e08632b3b2be4dff22->leave($__internal_5f08febb097da7d98f8b9ffbbe3ff18ca1a7928bd10853e08632b3b2be4dff22_prof);

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
