<?php

/* @LGPUser/Profile/edit.html.twig */
class __TwigTemplate_16410c83b23fc9cc51d6a12eb9cba3140c2a600b14ce10b45eda7987120e79fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/edit.html.twig", 1);
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
        $__internal_f98bc42881cec3833a1c7f31695f7f6bad9b6ad7c1df6546b94755f666d2dae6 = $this->env->getExtension("native_profiler");
        $__internal_f98bc42881cec3833a1c7f31695f7f6bad9b6ad7c1df6546b94755f666d2dae6->enter($__internal_f98bc42881cec3833a1c7f31695f7f6bad9b6ad7c1df6546b94755f666d2dae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98bc42881cec3833a1c7f31695f7f6bad9b6ad7c1df6546b94755f666d2dae6->leave($__internal_f98bc42881cec3833a1c7f31695f7f6bad9b6ad7c1df6546b94755f666d2dae6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9283532a2cbdc5943518a75f11784a81068030e2efd63602bbaba18824e1ed9c = $this->env->getExtension("native_profiler");
        $__internal_9283532a2cbdc5943518a75f11784a81068030e2efd63602bbaba18824e1ed9c->enter($__internal_9283532a2cbdc5943518a75f11784a81068030e2efd63602bbaba18824e1ed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9283532a2cbdc5943518a75f11784a81068030e2efd63602bbaba18824e1ed9c->leave($__internal_9283532a2cbdc5943518a75f11784a81068030e2efd63602bbaba18824e1ed9c_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c3692847a442832918bba18bda7887356d536ebd85d3e9046d5146f88e20b2c = $this->env->getExtension("native_profiler");
        $__internal_4c3692847a442832918bba18bda7887356d536ebd85d3e9046d5146f88e20b2c->enter($__internal_4c3692847a442832918bba18bda7887356d536ebd85d3e9046d5146f88e20b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_4c3692847a442832918bba18bda7887356d536ebd85d3e9046d5146f88e20b2c->leave($__internal_4c3692847a442832918bba18bda7887356d536ebd85d3e9046d5146f88e20b2c_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/edit.html.twig";
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
