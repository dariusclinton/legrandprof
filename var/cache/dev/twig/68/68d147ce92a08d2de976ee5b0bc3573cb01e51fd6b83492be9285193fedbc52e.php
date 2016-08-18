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
        $__internal_f801b9c71b09f453f9623140bf2aaffbc9db155f7729862013e68b6971f797e9 = $this->env->getExtension("native_profiler");
        $__internal_f801b9c71b09f453f9623140bf2aaffbc9db155f7729862013e68b6971f797e9->enter($__internal_f801b9c71b09f453f9623140bf2aaffbc9db155f7729862013e68b6971f797e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f801b9c71b09f453f9623140bf2aaffbc9db155f7729862013e68b6971f797e9->leave($__internal_f801b9c71b09f453f9623140bf2aaffbc9db155f7729862013e68b6971f797e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c06c6bb18e7809b79376a3ded40ec859e31e0e15dff21e07bc3cc20fb6574fad = $this->env->getExtension("native_profiler");
        $__internal_c06c6bb18e7809b79376a3ded40ec859e31e0e15dff21e07bc3cc20fb6574fad->enter($__internal_c06c6bb18e7809b79376a3ded40ec859e31e0e15dff21e07bc3cc20fb6574fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_c06c6bb18e7809b79376a3ded40ec859e31e0e15dff21e07bc3cc20fb6574fad->leave($__internal_c06c6bb18e7809b79376a3ded40ec859e31e0e15dff21e07bc3cc20fb6574fad_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11ffe37945f41761a6ebbac41ba141906451f037fb65e5e20779208306b1df82 = $this->env->getExtension("native_profiler");
        $__internal_11ffe37945f41761a6ebbac41ba141906451f037fb65e5e20779208306b1df82->enter($__internal_11ffe37945f41761a6ebbac41ba141906451f037fb65e5e20779208306b1df82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_11ffe37945f41761a6ebbac41ba141906451f037fb65e5e20779208306b1df82->leave($__internal_11ffe37945f41761a6ebbac41ba141906451f037fb65e5e20779208306b1df82_prof);

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
