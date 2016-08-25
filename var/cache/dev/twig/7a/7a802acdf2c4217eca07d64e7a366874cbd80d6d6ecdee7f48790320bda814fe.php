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
        $__internal_bb59fd3b4cf6861c5b6537fbbe1b929a499a42ec7490775d082131781311de01 = $this->env->getExtension("native_profiler");
        $__internal_bb59fd3b4cf6861c5b6537fbbe1b929a499a42ec7490775d082131781311de01->enter($__internal_bb59fd3b4cf6861c5b6537fbbe1b929a499a42ec7490775d082131781311de01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb59fd3b4cf6861c5b6537fbbe1b929a499a42ec7490775d082131781311de01->leave($__internal_bb59fd3b4cf6861c5b6537fbbe1b929a499a42ec7490775d082131781311de01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85e866e0dec2200194a4b602eca9f6bfbe68cad39d25178ca72883467e6efde5 = $this->env->getExtension("native_profiler");
        $__internal_85e866e0dec2200194a4b602eca9f6bfbe68cad39d25178ca72883467e6efde5->enter($__internal_85e866e0dec2200194a4b602eca9f6bfbe68cad39d25178ca72883467e6efde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_85e866e0dec2200194a4b602eca9f6bfbe68cad39d25178ca72883467e6efde5->leave($__internal_85e866e0dec2200194a4b602eca9f6bfbe68cad39d25178ca72883467e6efde5_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_ddd41674937a2f9591d570e3e244baa21e06d8f139f6e7d8110f475efab232ac = $this->env->getExtension("native_profiler");
        $__internal_ddd41674937a2f9591d570e3e244baa21e06d8f139f6e7d8110f475efab232ac->enter($__internal_ddd41674937a2f9591d570e3e244baa21e06d8f139f6e7d8110f475efab232ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_ddd41674937a2f9591d570e3e244baa21e06d8f139f6e7d8110f475efab232ac->leave($__internal_ddd41674937a2f9591d570e3e244baa21e06d8f139f6e7d8110f475efab232ac_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f23733fed1159f08c9073dcd54ce5e10947137b1280d5d9f755e9d81b41809f = $this->env->getExtension("native_profiler");
        $__internal_8f23733fed1159f08c9073dcd54ce5e10947137b1280d5d9f755e9d81b41809f->enter($__internal_8f23733fed1159f08c9073dcd54ce5e10947137b1280d5d9f755e9d81b41809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_8f23733fed1159f08c9073dcd54ce5e10947137b1280d5d9f755e9d81b41809f->leave($__internal_8f23733fed1159f08c9073dcd54ce5e10947137b1280d5d9f755e9d81b41809f_prof);

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
