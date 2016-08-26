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
        $__internal_089f6c8784929f1182bcc9461a528b587f2af2b5ea77678781296d332c75a5f4 = $this->env->getExtension("native_profiler");
        $__internal_089f6c8784929f1182bcc9461a528b587f2af2b5ea77678781296d332c75a5f4->enter($__internal_089f6c8784929f1182bcc9461a528b587f2af2b5ea77678781296d332c75a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_089f6c8784929f1182bcc9461a528b587f2af2b5ea77678781296d332c75a5f4->leave($__internal_089f6c8784929f1182bcc9461a528b587f2af2b5ea77678781296d332c75a5f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19746edb9625392dbbd4044bc9648c0292e19458c229fdd59c5a854d45a49aaf = $this->env->getExtension("native_profiler");
        $__internal_19746edb9625392dbbd4044bc9648c0292e19458c229fdd59c5a854d45a49aaf->enter($__internal_19746edb9625392dbbd4044bc9648c0292e19458c229fdd59c5a854d45a49aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_19746edb9625392dbbd4044bc9648c0292e19458c229fdd59c5a854d45a49aaf->leave($__internal_19746edb9625392dbbd4044bc9648c0292e19458c229fdd59c5a854d45a49aaf_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0381806a85836da0026d31a1e26f7fad8ed5591aaaeeaeac2f5368afb9840257 = $this->env->getExtension("native_profiler");
        $__internal_0381806a85836da0026d31a1e26f7fad8ed5591aaaeeaeac2f5368afb9840257->enter($__internal_0381806a85836da0026d31a1e26f7fad8ed5591aaaeeaeac2f5368afb9840257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_0381806a85836da0026d31a1e26f7fad8ed5591aaaeeaeac2f5368afb9840257->leave($__internal_0381806a85836da0026d31a1e26f7fad8ed5591aaaeeaeac2f5368afb9840257_prof);

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
