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
        $__internal_471bd6c96a93b2e3165e948e1101722319cab99032bc199ddefcecf5a43eb3b6 = $this->env->getExtension("native_profiler");
        $__internal_471bd6c96a93b2e3165e948e1101722319cab99032bc199ddefcecf5a43eb3b6->enter($__internal_471bd6c96a93b2e3165e948e1101722319cab99032bc199ddefcecf5a43eb3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_471bd6c96a93b2e3165e948e1101722319cab99032bc199ddefcecf5a43eb3b6->leave($__internal_471bd6c96a93b2e3165e948e1101722319cab99032bc199ddefcecf5a43eb3b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c998a61be45033d8cfbf844249f71b729333e19d3131bb5798d4e5c2e9765f9 = $this->env->getExtension("native_profiler");
        $__internal_9c998a61be45033d8cfbf844249f71b729333e19d3131bb5798d4e5c2e9765f9->enter($__internal_9c998a61be45033d8cfbf844249f71b729333e19d3131bb5798d4e5c2e9765f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_9c998a61be45033d8cfbf844249f71b729333e19d3131bb5798d4e5c2e9765f9->leave($__internal_9c998a61be45033d8cfbf844249f71b729333e19d3131bb5798d4e5c2e9765f9_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_bf88fac5f1971210d389bed8e52eaf192f02edfc6724dfbabb36257e0e0fd5e7 = $this->env->getExtension("native_profiler");
        $__internal_bf88fac5f1971210d389bed8e52eaf192f02edfc6724dfbabb36257e0e0fd5e7->enter($__internal_bf88fac5f1971210d389bed8e52eaf192f02edfc6724dfbabb36257e0e0fd5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_bf88fac5f1971210d389bed8e52eaf192f02edfc6724dfbabb36257e0e0fd5e7->leave($__internal_bf88fac5f1971210d389bed8e52eaf192f02edfc6724dfbabb36257e0e0fd5e7_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a82b56842571bda5763f30793a83bcc52e8c0ad9fec9aa4b313cc296660352f2 = $this->env->getExtension("native_profiler");
        $__internal_a82b56842571bda5763f30793a83bcc52e8c0ad9fec9aa4b313cc296660352f2->enter($__internal_a82b56842571bda5763f30793a83bcc52e8c0ad9fec9aa4b313cc296660352f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_a82b56842571bda5763f30793a83bcc52e8c0ad9fec9aa4b313cc296660352f2->leave($__internal_a82b56842571bda5763f30793a83bcc52e8c0ad9fec9aa4b313cc296660352f2_prof);

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
