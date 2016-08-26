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
        $__internal_cb9cf6975a1efb2557eeaf5dd42e60028cbc9ac2e5e8c35e10b4355296f0eae4 = $this->env->getExtension("native_profiler");
        $__internal_cb9cf6975a1efb2557eeaf5dd42e60028cbc9ac2e5e8c35e10b4355296f0eae4->enter($__internal_cb9cf6975a1efb2557eeaf5dd42e60028cbc9ac2e5e8c35e10b4355296f0eae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb9cf6975a1efb2557eeaf5dd42e60028cbc9ac2e5e8c35e10b4355296f0eae4->leave($__internal_cb9cf6975a1efb2557eeaf5dd42e60028cbc9ac2e5e8c35e10b4355296f0eae4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05e763b15bb4c4d4c3cdf468640a59d2aaa6314668afb8f59b7ce5c8831c030b = $this->env->getExtension("native_profiler");
        $__internal_05e763b15bb4c4d4c3cdf468640a59d2aaa6314668afb8f59b7ce5c8831c030b->enter($__internal_05e763b15bb4c4d4c3cdf468640a59d2aaa6314668afb8f59b7ce5c8831c030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_05e763b15bb4c4d4c3cdf468640a59d2aaa6314668afb8f59b7ce5c8831c030b->leave($__internal_05e763b15bb4c4d4c3cdf468640a59d2aaa6314668afb8f59b7ce5c8831c030b_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b1c2ea02b886e688418fc9f73b69096a96c95551b2b1a9899b03b5c256d6b68b = $this->env->getExtension("native_profiler");
        $__internal_b1c2ea02b886e688418fc9f73b69096a96c95551b2b1a9899b03b5c256d6b68b->enter($__internal_b1c2ea02b886e688418fc9f73b69096a96c95551b2b1a9899b03b5c256d6b68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b1c2ea02b886e688418fc9f73b69096a96c95551b2b1a9899b03b5c256d6b68b->leave($__internal_b1c2ea02b886e688418fc9f73b69096a96c95551b2b1a9899b03b5c256d6b68b_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89cb246db3fec3155b92ae5311e0c1ad73899c20118cf85d56186900772f46b4 = $this->env->getExtension("native_profiler");
        $__internal_89cb246db3fec3155b92ae5311e0c1ad73899c20118cf85d56186900772f46b4->enter($__internal_89cb246db3fec3155b92ae5311e0c1ad73899c20118cf85d56186900772f46b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_89cb246db3fec3155b92ae5311e0c1ad73899c20118cf85d56186900772f46b4->leave($__internal_89cb246db3fec3155b92ae5311e0c1ad73899c20118cf85d56186900772f46b4_prof);

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
