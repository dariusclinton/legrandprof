<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e659f441b0be411675991e045c89a537eed53cca390353003cc4a11f1e14ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f2a101ec2e688555f041ff110fd3f51ce29ea096c327e44e64c7d7d9d669b1f4 = $this->env->getExtension("native_profiler");
        $__internal_f2a101ec2e688555f041ff110fd3f51ce29ea096c327e44e64c7d7d9d669b1f4->enter($__internal_f2a101ec2e688555f041ff110fd3f51ce29ea096c327e44e64c7d7d9d669b1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2a101ec2e688555f041ff110fd3f51ce29ea096c327e44e64c7d7d9d669b1f4->leave($__internal_f2a101ec2e688555f041ff110fd3f51ce29ea096c327e44e64c7d7d9d669b1f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8719b676f79f155241817c0692bc2bfda8d39c3547d71d14e8697980a6365303 = $this->env->getExtension("native_profiler");
        $__internal_8719b676f79f155241817c0692bc2bfda8d39c3547d71d14e8697980a6365303->enter($__internal_8719b676f79f155241817c0692bc2bfda8d39c3547d71d14e8697980a6365303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_8719b676f79f155241817c0692bc2bfda8d39c3547d71d14e8697980a6365303->leave($__internal_8719b676f79f155241817c0692bc2bfda8d39c3547d71d14e8697980a6365303_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5f3d3815e7f16971d49e3d783af26287d598fefa884cc1e0ddcc0c5e5ff34f7c = $this->env->getExtension("native_profiler");
        $__internal_5f3d3815e7f16971d49e3d783af26287d598fefa884cc1e0ddcc0c5e5ff34f7c->enter($__internal_5f3d3815e7f16971d49e3d783af26287d598fefa884cc1e0ddcc0c5e5ff34f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5f3d3815e7f16971d49e3d783af26287d598fefa884cc1e0ddcc0c5e5ff34f7c->leave($__internal_5f3d3815e7f16971d49e3d783af26287d598fefa884cc1e0ddcc0c5e5ff34f7c_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_044a42c91c428486f9d9c7362f3e1fc0e3dc13062c2ad032a47c55a8a2ee9fff = $this->env->getExtension("native_profiler");
        $__internal_044a42c91c428486f9d9c7362f3e1fc0e3dc13062c2ad032a47c55a8a2ee9fff->enter($__internal_044a42c91c428486f9d9c7362f3e1fc0e3dc13062c2ad032a47c55a8a2ee9fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_044a42c91c428486f9d9c7362f3e1fc0e3dc13062c2ad032a47c55a8a2ee9fff->leave($__internal_044a42c91c428486f9d9c7362f3e1fc0e3dc13062c2ad032a47c55a8a2ee9fff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
