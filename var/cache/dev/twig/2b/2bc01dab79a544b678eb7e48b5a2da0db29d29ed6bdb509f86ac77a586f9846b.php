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
        $__internal_9bbf19a7a5c305c840ab87519f8531934bd15ef812e984742a89408cfa12a5b3 = $this->env->getExtension("native_profiler");
        $__internal_9bbf19a7a5c305c840ab87519f8531934bd15ef812e984742a89408cfa12a5b3->enter($__internal_9bbf19a7a5c305c840ab87519f8531934bd15ef812e984742a89408cfa12a5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bbf19a7a5c305c840ab87519f8531934bd15ef812e984742a89408cfa12a5b3->leave($__internal_9bbf19a7a5c305c840ab87519f8531934bd15ef812e984742a89408cfa12a5b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f8b7ec6750d41a1b41aa7b663d684bb556105bbb914897ac73fc6f38f51f756 = $this->env->getExtension("native_profiler");
        $__internal_7f8b7ec6750d41a1b41aa7b663d684bb556105bbb914897ac73fc6f38f51f756->enter($__internal_7f8b7ec6750d41a1b41aa7b663d684bb556105bbb914897ac73fc6f38f51f756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7f8b7ec6750d41a1b41aa7b663d684bb556105bbb914897ac73fc6f38f51f756->leave($__internal_7f8b7ec6750d41a1b41aa7b663d684bb556105bbb914897ac73fc6f38f51f756_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c6b358fba29b9eafcf7a4ab0e340d265135d434aaa69f4180f353da74626f34 = $this->env->getExtension("native_profiler");
        $__internal_1c6b358fba29b9eafcf7a4ab0e340d265135d434aaa69f4180f353da74626f34->enter($__internal_1c6b358fba29b9eafcf7a4ab0e340d265135d434aaa69f4180f353da74626f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_1c6b358fba29b9eafcf7a4ab0e340d265135d434aaa69f4180f353da74626f34->leave($__internal_1c6b358fba29b9eafcf7a4ab0e340d265135d434aaa69f4180f353da74626f34_prof);

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
/* */
