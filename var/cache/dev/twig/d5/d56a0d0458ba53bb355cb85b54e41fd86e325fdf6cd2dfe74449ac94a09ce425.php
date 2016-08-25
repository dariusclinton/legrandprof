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
        $__internal_0a8efc99c51f97984eeba4e2f2cbfac445f40ffd1525eebc0a08f8afd1ba30cd = $this->env->getExtension("native_profiler");
        $__internal_0a8efc99c51f97984eeba4e2f2cbfac445f40ffd1525eebc0a08f8afd1ba30cd->enter($__internal_0a8efc99c51f97984eeba4e2f2cbfac445f40ffd1525eebc0a08f8afd1ba30cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a8efc99c51f97984eeba4e2f2cbfac445f40ffd1525eebc0a08f8afd1ba30cd->leave($__internal_0a8efc99c51f97984eeba4e2f2cbfac445f40ffd1525eebc0a08f8afd1ba30cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97b0a982366adc46445c7dca041b52158b065357b4dc3bc59d1bb5026881564e = $this->env->getExtension("native_profiler");
        $__internal_97b0a982366adc46445c7dca041b52158b065357b4dc3bc59d1bb5026881564e->enter($__internal_97b0a982366adc46445c7dca041b52158b065357b4dc3bc59d1bb5026881564e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_97b0a982366adc46445c7dca041b52158b065357b4dc3bc59d1bb5026881564e->leave($__internal_97b0a982366adc46445c7dca041b52158b065357b4dc3bc59d1bb5026881564e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_3a18aea983945a723fa4f46293e2ddef2f8a16b35a7c7cf8f3a2362935666d0e = $this->env->getExtension("native_profiler");
        $__internal_3a18aea983945a723fa4f46293e2ddef2f8a16b35a7c7cf8f3a2362935666d0e->enter($__internal_3a18aea983945a723fa4f46293e2ddef2f8a16b35a7c7cf8f3a2362935666d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_3a18aea983945a723fa4f46293e2ddef2f8a16b35a7c7cf8f3a2362935666d0e->leave($__internal_3a18aea983945a723fa4f46293e2ddef2f8a16b35a7c7cf8f3a2362935666d0e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07dd86d2568161e4a732c7e7c85642c952bf7a0a15f7bf2f8a1dbbb7c0504d42 = $this->env->getExtension("native_profiler");
        $__internal_07dd86d2568161e4a732c7e7c85642c952bf7a0a15f7bf2f8a1dbbb7c0504d42->enter($__internal_07dd86d2568161e4a732c7e7c85642c952bf7a0a15f7bf2f8a1dbbb7c0504d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_07dd86d2568161e4a732c7e7c85642c952bf7a0a15f7bf2f8a1dbbb7c0504d42->leave($__internal_07dd86d2568161e4a732c7e7c85642c952bf7a0a15f7bf2f8a1dbbb7c0504d42_prof);

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
