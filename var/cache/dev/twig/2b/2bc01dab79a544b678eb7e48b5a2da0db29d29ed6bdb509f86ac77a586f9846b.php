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
        $__internal_e2b521200e6904a389dffcf6c9ea1feb9dd3f7f7616b4183b04bdd2c6686dbce = $this->env->getExtension("native_profiler");
        $__internal_e2b521200e6904a389dffcf6c9ea1feb9dd3f7f7616b4183b04bdd2c6686dbce->enter($__internal_e2b521200e6904a389dffcf6c9ea1feb9dd3f7f7616b4183b04bdd2c6686dbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b521200e6904a389dffcf6c9ea1feb9dd3f7f7616b4183b04bdd2c6686dbce->leave($__internal_e2b521200e6904a389dffcf6c9ea1feb9dd3f7f7616b4183b04bdd2c6686dbce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40a12cc1b5fc19da5ff8a246cca7d6852977e7e4b18a41fb1a6f592337915374 = $this->env->getExtension("native_profiler");
        $__internal_40a12cc1b5fc19da5ff8a246cca7d6852977e7e4b18a41fb1a6f592337915374->enter($__internal_40a12cc1b5fc19da5ff8a246cca7d6852977e7e4b18a41fb1a6f592337915374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_40a12cc1b5fc19da5ff8a246cca7d6852977e7e4b18a41fb1a6f592337915374->leave($__internal_40a12cc1b5fc19da5ff8a246cca7d6852977e7e4b18a41fb1a6f592337915374_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5269323a410bded9588e5a1fa0ce98a22db23cc96eac63196fb21a9ef03fb6cc = $this->env->getExtension("native_profiler");
        $__internal_5269323a410bded9588e5a1fa0ce98a22db23cc96eac63196fb21a9ef03fb6cc->enter($__internal_5269323a410bded9588e5a1fa0ce98a22db23cc96eac63196fb21a9ef03fb6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_5269323a410bded9588e5a1fa0ce98a22db23cc96eac63196fb21a9ef03fb6cc->leave($__internal_5269323a410bded9588e5a1fa0ce98a22db23cc96eac63196fb21a9ef03fb6cc_prof);

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
