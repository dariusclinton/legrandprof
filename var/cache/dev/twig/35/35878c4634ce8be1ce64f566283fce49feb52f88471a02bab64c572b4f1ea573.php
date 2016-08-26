<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bfa5b54c28ea6200577ac5882a0df94a75ed8cfb3033da8b9b18747505c20ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24de6fecec695e57eecb0fb9fb1bb713c30871acab34d18a651fff983fcf3728 = $this->env->getExtension("native_profiler");
        $__internal_24de6fecec695e57eecb0fb9fb1bb713c30871acab34d18a651fff983fcf3728->enter($__internal_24de6fecec695e57eecb0fb9fb1bb713c30871acab34d18a651fff983fcf3728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24de6fecec695e57eecb0fb9fb1bb713c30871acab34d18a651fff983fcf3728->leave($__internal_24de6fecec695e57eecb0fb9fb1bb713c30871acab34d18a651fff983fcf3728_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02f8d27f5601328db14fec7f1dceea24f092d91ba8b9d1deb7c02a5d4ba7c486 = $this->env->getExtension("native_profiler");
        $__internal_02f8d27f5601328db14fec7f1dceea24f092d91ba8b9d1deb7c02a5d4ba7c486->enter($__internal_02f8d27f5601328db14fec7f1dceea24f092d91ba8b9d1deb7c02a5d4ba7c486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_02f8d27f5601328db14fec7f1dceea24f092d91ba8b9d1deb7c02a5d4ba7c486->leave($__internal_02f8d27f5601328db14fec7f1dceea24f092d91ba8b9d1deb7c02a5d4ba7c486_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c6ee6d34d50d9785ed9e7e7dd0e64fad38048b37202051c8191c79cde814588 = $this->env->getExtension("native_profiler");
        $__internal_6c6ee6d34d50d9785ed9e7e7dd0e64fad38048b37202051c8191c79cde814588->enter($__internal_6c6ee6d34d50d9785ed9e7e7dd0e64fad38048b37202051c8191c79cde814588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_6c6ee6d34d50d9785ed9e7e7dd0e64fad38048b37202051c8191c79cde814588->leave($__internal_6c6ee6d34d50d9785ed9e7e7dd0e64fad38048b37202051c8191c79cde814588_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
