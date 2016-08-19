<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f9aef295c967d1ddf5e2df7b04c8b8833814a8e3b8c395bf8630cc6369c32ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4b8c4801d4103585239c9ca47377de8856831e0b409491e940898367e190117 = $this->env->getExtension("native_profiler");
        $__internal_b4b8c4801d4103585239c9ca47377de8856831e0b409491e940898367e190117->enter($__internal_b4b8c4801d4103585239c9ca47377de8856831e0b409491e940898367e190117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b8c4801d4103585239c9ca47377de8856831e0b409491e940898367e190117->leave($__internal_b4b8c4801d4103585239c9ca47377de8856831e0b409491e940898367e190117_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41b8ce50fc9fb1a0e3ecfd3bd494f8d85efe4c80d9f6e5a952dd39f38277c9dd = $this->env->getExtension("native_profiler");
        $__internal_41b8ce50fc9fb1a0e3ecfd3bd494f8d85efe4c80d9f6e5a952dd39f38277c9dd->enter($__internal_41b8ce50fc9fb1a0e3ecfd3bd494f8d85efe4c80d9f6e5a952dd39f38277c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_41b8ce50fc9fb1a0e3ecfd3bd494f8d85efe4c80d9f6e5a952dd39f38277c9dd->leave($__internal_41b8ce50fc9fb1a0e3ecfd3bd494f8d85efe4c80d9f6e5a952dd39f38277c9dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
