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
        $__internal_3cd7d8a65e86071a48aae6cdbd6699e0c36dbbe67c9a1c081c9b73dbb324aab4 = $this->env->getExtension("native_profiler");
        $__internal_3cd7d8a65e86071a48aae6cdbd6699e0c36dbbe67c9a1c081c9b73dbb324aab4->enter($__internal_3cd7d8a65e86071a48aae6cdbd6699e0c36dbbe67c9a1c081c9b73dbb324aab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd7d8a65e86071a48aae6cdbd6699e0c36dbbe67c9a1c081c9b73dbb324aab4->leave($__internal_3cd7d8a65e86071a48aae6cdbd6699e0c36dbbe67c9a1c081c9b73dbb324aab4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_358328b77342673107ac3e52b6e82bfa8985bc41c056e35a6abeaad124a4b8a1 = $this->env->getExtension("native_profiler");
        $__internal_358328b77342673107ac3e52b6e82bfa8985bc41c056e35a6abeaad124a4b8a1->enter($__internal_358328b77342673107ac3e52b6e82bfa8985bc41c056e35a6abeaad124a4b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_358328b77342673107ac3e52b6e82bfa8985bc41c056e35a6abeaad124a4b8a1->leave($__internal_358328b77342673107ac3e52b6e82bfa8985bc41c056e35a6abeaad124a4b8a1_prof);

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
