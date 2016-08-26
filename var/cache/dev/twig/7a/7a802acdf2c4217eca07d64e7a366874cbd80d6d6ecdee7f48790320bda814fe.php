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
        $__internal_9c1ec34a00ef809f0f77cbf734aff2e079410530ec435ff2313d7472bec1a51e = $this->env->getExtension("native_profiler");
        $__internal_9c1ec34a00ef809f0f77cbf734aff2e079410530ec435ff2313d7472bec1a51e->enter($__internal_9c1ec34a00ef809f0f77cbf734aff2e079410530ec435ff2313d7472bec1a51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c1ec34a00ef809f0f77cbf734aff2e079410530ec435ff2313d7472bec1a51e->leave($__internal_9c1ec34a00ef809f0f77cbf734aff2e079410530ec435ff2313d7472bec1a51e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c05704fc494d6113a2bf77fceecc9d30bc5a7fe8e53cc87bea43aa9c03193a7f = $this->env->getExtension("native_profiler");
        $__internal_c05704fc494d6113a2bf77fceecc9d30bc5a7fe8e53cc87bea43aa9c03193a7f->enter($__internal_c05704fc494d6113a2bf77fceecc9d30bc5a7fe8e53cc87bea43aa9c03193a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_c05704fc494d6113a2bf77fceecc9d30bc5a7fe8e53cc87bea43aa9c03193a7f->leave($__internal_c05704fc494d6113a2bf77fceecc9d30bc5a7fe8e53cc87bea43aa9c03193a7f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_43f34475554596b5aa0bc01ccbc6cb49bb0282b6084829177951dc181c0abcf3 = $this->env->getExtension("native_profiler");
        $__internal_43f34475554596b5aa0bc01ccbc6cb49bb0282b6084829177951dc181c0abcf3->enter($__internal_43f34475554596b5aa0bc01ccbc6cb49bb0282b6084829177951dc181c0abcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_43f34475554596b5aa0bc01ccbc6cb49bb0282b6084829177951dc181c0abcf3->leave($__internal_43f34475554596b5aa0bc01ccbc6cb49bb0282b6084829177951dc181c0abcf3_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe6b2de864e69b5ae33414bc2e6306c6337b283c658627483dab781ea4b1cfb3 = $this->env->getExtension("native_profiler");
        $__internal_fe6b2de864e69b5ae33414bc2e6306c6337b283c658627483dab781ea4b1cfb3->enter($__internal_fe6b2de864e69b5ae33414bc2e6306c6337b283c658627483dab781ea4b1cfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_fe6b2de864e69b5ae33414bc2e6306c6337b283c658627483dab781ea4b1cfb3->leave($__internal_fe6b2de864e69b5ae33414bc2e6306c6337b283c658627483dab781ea4b1cfb3_prof);

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
