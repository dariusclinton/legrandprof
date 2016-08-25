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
        $__internal_4728b136cebf06b2b493efb7f9a479cc191fe472a170bf3d711320d047653a34 = $this->env->getExtension("native_profiler");
        $__internal_4728b136cebf06b2b493efb7f9a479cc191fe472a170bf3d711320d047653a34->enter($__internal_4728b136cebf06b2b493efb7f9a479cc191fe472a170bf3d711320d047653a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4728b136cebf06b2b493efb7f9a479cc191fe472a170bf3d711320d047653a34->leave($__internal_4728b136cebf06b2b493efb7f9a479cc191fe472a170bf3d711320d047653a34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30676a1c4593d1744001e79ccab47b5c21e4783f9245a9ca69eeab56bf0c7960 = $this->env->getExtension("native_profiler");
        $__internal_30676a1c4593d1744001e79ccab47b5c21e4783f9245a9ca69eeab56bf0c7960->enter($__internal_30676a1c4593d1744001e79ccab47b5c21e4783f9245a9ca69eeab56bf0c7960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_30676a1c4593d1744001e79ccab47b5c21e4783f9245a9ca69eeab56bf0c7960->leave($__internal_30676a1c4593d1744001e79ccab47b5c21e4783f9245a9ca69eeab56bf0c7960_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bbb397bf27ef5ace8fcaa891a5eab8839997e9e01e20e8a764e1db4e16f4166 = $this->env->getExtension("native_profiler");
        $__internal_6bbb397bf27ef5ace8fcaa891a5eab8839997e9e01e20e8a764e1db4e16f4166->enter($__internal_6bbb397bf27ef5ace8fcaa891a5eab8839997e9e01e20e8a764e1db4e16f4166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_6bbb397bf27ef5ace8fcaa891a5eab8839997e9e01e20e8a764e1db4e16f4166->leave($__internal_6bbb397bf27ef5ace8fcaa891a5eab8839997e9e01e20e8a764e1db4e16f4166_prof);

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
