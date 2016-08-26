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
        $__internal_bdb1f1546c26d4e73d9504c34ca9eba78c8ea66bd42119f6030dad8e8ca0b8b0 = $this->env->getExtension("native_profiler");
        $__internal_bdb1f1546c26d4e73d9504c34ca9eba78c8ea66bd42119f6030dad8e8ca0b8b0->enter($__internal_bdb1f1546c26d4e73d9504c34ca9eba78c8ea66bd42119f6030dad8e8ca0b8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdb1f1546c26d4e73d9504c34ca9eba78c8ea66bd42119f6030dad8e8ca0b8b0->leave($__internal_bdb1f1546c26d4e73d9504c34ca9eba78c8ea66bd42119f6030dad8e8ca0b8b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78af44725338292ca6919b3d5bd510a659a52d55109a41abf7c1e6aa029af7c1 = $this->env->getExtension("native_profiler");
        $__internal_78af44725338292ca6919b3d5bd510a659a52d55109a41abf7c1e6aa029af7c1->enter($__internal_78af44725338292ca6919b3d5bd510a659a52d55109a41abf7c1e6aa029af7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_78af44725338292ca6919b3d5bd510a659a52d55109a41abf7c1e6aa029af7c1->leave($__internal_78af44725338292ca6919b3d5bd510a659a52d55109a41abf7c1e6aa029af7c1_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_0e17531883221bb15e71bd48d943476f845579cc85165b133cbbc63990ffb1e2 = $this->env->getExtension("native_profiler");
        $__internal_0e17531883221bb15e71bd48d943476f845579cc85165b133cbbc63990ffb1e2->enter($__internal_0e17531883221bb15e71bd48d943476f845579cc85165b133cbbc63990ffb1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_0e17531883221bb15e71bd48d943476f845579cc85165b133cbbc63990ffb1e2->leave($__internal_0e17531883221bb15e71bd48d943476f845579cc85165b133cbbc63990ffb1e2_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_253cad1706445e2b4c1691b5627fb5858dd50e9f3b33bf00d9cd848e7d553fc8 = $this->env->getExtension("native_profiler");
        $__internal_253cad1706445e2b4c1691b5627fb5858dd50e9f3b33bf00d9cd848e7d553fc8->enter($__internal_253cad1706445e2b4c1691b5627fb5858dd50e9f3b33bf00d9cd848e7d553fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_253cad1706445e2b4c1691b5627fb5858dd50e9f3b33bf00d9cd848e7d553fc8->leave($__internal_253cad1706445e2b4c1691b5627fb5858dd50e9f3b33bf00d9cd848e7d553fc8_prof);

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
