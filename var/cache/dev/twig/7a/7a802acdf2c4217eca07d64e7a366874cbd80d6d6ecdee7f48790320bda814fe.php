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
        $__internal_99bc884a3ffa027e6604cb7c5611301137cde76a3a937203cdbfc6eee10462fa = $this->env->getExtension("native_profiler");
        $__internal_99bc884a3ffa027e6604cb7c5611301137cde76a3a937203cdbfc6eee10462fa->enter($__internal_99bc884a3ffa027e6604cb7c5611301137cde76a3a937203cdbfc6eee10462fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99bc884a3ffa027e6604cb7c5611301137cde76a3a937203cdbfc6eee10462fa->leave($__internal_99bc884a3ffa027e6604cb7c5611301137cde76a3a937203cdbfc6eee10462fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1322f6ecac326c3dc0e49715c4570a8880336c1fee375eb34171eb5642167ba = $this->env->getExtension("native_profiler");
        $__internal_e1322f6ecac326c3dc0e49715c4570a8880336c1fee375eb34171eb5642167ba->enter($__internal_e1322f6ecac326c3dc0e49715c4570a8880336c1fee375eb34171eb5642167ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_e1322f6ecac326c3dc0e49715c4570a8880336c1fee375eb34171eb5642167ba->leave($__internal_e1322f6ecac326c3dc0e49715c4570a8880336c1fee375eb34171eb5642167ba_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_d3ce638e5674f75ef00e3e316100caa29a0430bb0a1f650ae1db8e723ded0b28 = $this->env->getExtension("native_profiler");
        $__internal_d3ce638e5674f75ef00e3e316100caa29a0430bb0a1f650ae1db8e723ded0b28->enter($__internal_d3ce638e5674f75ef00e3e316100caa29a0430bb0a1f650ae1db8e723ded0b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_d3ce638e5674f75ef00e3e316100caa29a0430bb0a1f650ae1db8e723ded0b28->leave($__internal_d3ce638e5674f75ef00e3e316100caa29a0430bb0a1f650ae1db8e723ded0b28_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d8f9e9c63ed4bce9d517b5e39766e7c096c943d703a89e79dd556d182f94246 = $this->env->getExtension("native_profiler");
        $__internal_4d8f9e9c63ed4bce9d517b5e39766e7c096c943d703a89e79dd556d182f94246->enter($__internal_4d8f9e9c63ed4bce9d517b5e39766e7c096c943d703a89e79dd556d182f94246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_4d8f9e9c63ed4bce9d517b5e39766e7c096c943d703a89e79dd556d182f94246->leave($__internal_4d8f9e9c63ed4bce9d517b5e39766e7c096c943d703a89e79dd556d182f94246_prof);

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
