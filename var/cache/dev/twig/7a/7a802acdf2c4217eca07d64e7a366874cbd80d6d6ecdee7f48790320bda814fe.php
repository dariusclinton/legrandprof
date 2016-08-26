<?php

/* @LGPUser/Profile/show.html.twig */
class __TwigTemplate_a5f8413eda7573d3f30913d1076d736bc729b89d8f3951e8d6b1d76b85360962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65a7a3b63e516c7ae6f42a369c83724169067240f5066b7bc1a46562a459bb82 = $this->env->getExtension("native_profiler");
        $__internal_65a7a3b63e516c7ae6f42a369c83724169067240f5066b7bc1a46562a459bb82->enter($__internal_65a7a3b63e516c7ae6f42a369c83724169067240f5066b7bc1a46562a459bb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a7a3b63e516c7ae6f42a369c83724169067240f5066b7bc1a46562a459bb82->leave($__internal_65a7a3b63e516c7ae6f42a369c83724169067240f5066b7bc1a46562a459bb82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_def6364fb5f9ac02f5d2392e2d9163302410e4af8d53286dde54f67d8c917f50 = $this->env->getExtension("native_profiler");
        $__internal_def6364fb5f9ac02f5d2392e2d9163302410e4af8d53286dde54f67d8c917f50->enter($__internal_def6364fb5f9ac02f5d2392e2d9163302410e4af8d53286dde54f67d8c917f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_def6364fb5f9ac02f5d2392e2d9163302410e4af8d53286dde54f67d8c917f50->leave($__internal_def6364fb5f9ac02f5d2392e2d9163302410e4af8d53286dde54f67d8c917f50_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5d762075da8346ef3d21c04cbaa1250a90c9698008f04c70fbf51c746c13494e = $this->env->getExtension("native_profiler");
        $__internal_5d762075da8346ef3d21c04cbaa1250a90c9698008f04c70fbf51c746c13494e->enter($__internal_5d762075da8346ef3d21c04cbaa1250a90c9698008f04c70fbf51c746c13494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5d762075da8346ef3d21c04cbaa1250a90c9698008f04c70fbf51c746c13494e->leave($__internal_5d762075da8346ef3d21c04cbaa1250a90c9698008f04c70fbf51c746c13494e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98966e66d6d99f9aaa0253102f76c304efcc218ff6f61f5b04f8f4b6f00562ce = $this->env->getExtension("native_profiler");
        $__internal_98966e66d6d99f9aaa0253102f76c304efcc218ff6f61f5b04f8f4b6f00562ce->enter($__internal_98966e66d6d99f9aaa0253102f76c304efcc218ff6f61f5b04f8f4b6f00562ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_98966e66d6d99f9aaa0253102f76c304efcc218ff6f61f5b04f8f4b6f00562ce->leave($__internal_98966e66d6d99f9aaa0253102f76c304efcc218ff6f61f5b04f8f4b6f00562ce_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block header_submenu %} */
/*     {{ include('LGPCoreBundle::header-submenu.html.twig') }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}    */
/*     <div class="bg-grey dashboard">*/
/*         {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
