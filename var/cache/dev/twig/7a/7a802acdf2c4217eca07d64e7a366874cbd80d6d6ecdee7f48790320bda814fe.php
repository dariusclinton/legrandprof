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
        $__internal_0f23ca3746d7e28d19e7091face93495443b8caefa71e11fa790bf3e7916c181 = $this->env->getExtension("native_profiler");
        $__internal_0f23ca3746d7e28d19e7091face93495443b8caefa71e11fa790bf3e7916c181->enter($__internal_0f23ca3746d7e28d19e7091face93495443b8caefa71e11fa790bf3e7916c181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f23ca3746d7e28d19e7091face93495443b8caefa71e11fa790bf3e7916c181->leave($__internal_0f23ca3746d7e28d19e7091face93495443b8caefa71e11fa790bf3e7916c181_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba2c2a09151e0f85a3cc61752b6bcefd680e964c618c521de0779ef58a3f0a6a = $this->env->getExtension("native_profiler");
        $__internal_ba2c2a09151e0f85a3cc61752b6bcefd680e964c618c521de0779ef58a3f0a6a->enter($__internal_ba2c2a09151e0f85a3cc61752b6bcefd680e964c618c521de0779ef58a3f0a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_ba2c2a09151e0f85a3cc61752b6bcefd680e964c618c521de0779ef58a3f0a6a->leave($__internal_ba2c2a09151e0f85a3cc61752b6bcefd680e964c618c521de0779ef58a3f0a6a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_c2c0f3415755979f58c3149b26285a57070ef4925e031f02459ef5a2150d1884 = $this->env->getExtension("native_profiler");
        $__internal_c2c0f3415755979f58c3149b26285a57070ef4925e031f02459ef5a2150d1884->enter($__internal_c2c0f3415755979f58c3149b26285a57070ef4925e031f02459ef5a2150d1884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_c2c0f3415755979f58c3149b26285a57070ef4925e031f02459ef5a2150d1884->leave($__internal_c2c0f3415755979f58c3149b26285a57070ef4925e031f02459ef5a2150d1884_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2b6124eaf0a7f7f72c550de11803fe91cb125e2f8a49a44e7b8c08cc8acaf0d = $this->env->getExtension("native_profiler");
        $__internal_c2b6124eaf0a7f7f72c550de11803fe91cb125e2f8a49a44e7b8c08cc8acaf0d->enter($__internal_c2b6124eaf0a7f7f72c550de11803fe91cb125e2f8a49a44e7b8c08cc8acaf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_c2b6124eaf0a7f7f72c550de11803fe91cb125e2f8a49a44e7b8c08cc8acaf0d->leave($__internal_c2b6124eaf0a7f7f72c550de11803fe91cb125e2f8a49a44e7b8c08cc8acaf0d_prof);

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
