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
        $__internal_c3d06aeaa86a49782f4e9aba846c5d950de8c1c4878e91bd377c02824359f574 = $this->env->getExtension("native_profiler");
        $__internal_c3d06aeaa86a49782f4e9aba846c5d950de8c1c4878e91bd377c02824359f574->enter($__internal_c3d06aeaa86a49782f4e9aba846c5d950de8c1c4878e91bd377c02824359f574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d06aeaa86a49782f4e9aba846c5d950de8c1c4878e91bd377c02824359f574->leave($__internal_c3d06aeaa86a49782f4e9aba846c5d950de8c1c4878e91bd377c02824359f574_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5a20067264152be24e037b0c4064816573379a51622a1cb261e76224aa59a9a = $this->env->getExtension("native_profiler");
        $__internal_f5a20067264152be24e037b0c4064816573379a51622a1cb261e76224aa59a9a->enter($__internal_f5a20067264152be24e037b0c4064816573379a51622a1cb261e76224aa59a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_f5a20067264152be24e037b0c4064816573379a51622a1cb261e76224aa59a9a->leave($__internal_f5a20067264152be24e037b0c4064816573379a51622a1cb261e76224aa59a9a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_52153e1081d9eae378c5536434a24150e0c7fca8cddb0e3262cd9f514ece2a6c = $this->env->getExtension("native_profiler");
        $__internal_52153e1081d9eae378c5536434a24150e0c7fca8cddb0e3262cd9f514ece2a6c->enter($__internal_52153e1081d9eae378c5536434a24150e0c7fca8cddb0e3262cd9f514ece2a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_52153e1081d9eae378c5536434a24150e0c7fca8cddb0e3262cd9f514ece2a6c->leave($__internal_52153e1081d9eae378c5536434a24150e0c7fca8cddb0e3262cd9f514ece2a6c_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e384b4c984d140d61d6b0cec93bcf9014d7f4620c94beccdbe600454c6908f1 = $this->env->getExtension("native_profiler");
        $__internal_4e384b4c984d140d61d6b0cec93bcf9014d7f4620c94beccdbe600454c6908f1->enter($__internal_4e384b4c984d140d61d6b0cec93bcf9014d7f4620c94beccdbe600454c6908f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_4e384b4c984d140d61d6b0cec93bcf9014d7f4620c94beccdbe600454c6908f1->leave($__internal_4e384b4c984d140d61d6b0cec93bcf9014d7f4620c94beccdbe600454c6908f1_prof);

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
