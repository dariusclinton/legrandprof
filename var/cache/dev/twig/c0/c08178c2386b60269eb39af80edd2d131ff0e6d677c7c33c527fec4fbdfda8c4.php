<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3367fb9ba5b109089089c76ddf6b7d400349579681b0c10616ea3dd1530dcb0d extends Twig_Template
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
        $__internal_df1dfdefacc0f5e7e840e7fc1a96ac2b2abf7d200a3df00b2414cbec3428c14a = $this->env->getExtension("native_profiler");
        $__internal_df1dfdefacc0f5e7e840e7fc1a96ac2b2abf7d200a3df00b2414cbec3428c14a->enter($__internal_df1dfdefacc0f5e7e840e7fc1a96ac2b2abf7d200a3df00b2414cbec3428c14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df1dfdefacc0f5e7e840e7fc1a96ac2b2abf7d200a3df00b2414cbec3428c14a->leave($__internal_df1dfdefacc0f5e7e840e7fc1a96ac2b2abf7d200a3df00b2414cbec3428c14a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a38503e81a068e37266bf1b86d7a449c370576553ee83bf6aeaf2adf985a7733 = $this->env->getExtension("native_profiler");
        $__internal_a38503e81a068e37266bf1b86d7a449c370576553ee83bf6aeaf2adf985a7733->enter($__internal_a38503e81a068e37266bf1b86d7a449c370576553ee83bf6aeaf2adf985a7733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_a38503e81a068e37266bf1b86d7a449c370576553ee83bf6aeaf2adf985a7733->leave($__internal_a38503e81a068e37266bf1b86d7a449c370576553ee83bf6aeaf2adf985a7733_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_996c389fa7b14b6d18dbf36ee611678e617c3275e88a5a7a8c6df47cc88ed371 = $this->env->getExtension("native_profiler");
        $__internal_996c389fa7b14b6d18dbf36ee611678e617c3275e88a5a7a8c6df47cc88ed371->enter($__internal_996c389fa7b14b6d18dbf36ee611678e617c3275e88a5a7a8c6df47cc88ed371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_996c389fa7b14b6d18dbf36ee611678e617c3275e88a5a7a8c6df47cc88ed371->leave($__internal_996c389fa7b14b6d18dbf36ee611678e617c3275e88a5a7a8c6df47cc88ed371_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac41ce54ae7de57e4a889ae565e709dd3b31a37806b8ba3260c504aef1aeb6a3 = $this->env->getExtension("native_profiler");
        $__internal_ac41ce54ae7de57e4a889ae565e709dd3b31a37806b8ba3260c504aef1aeb6a3->enter($__internal_ac41ce54ae7de57e4a889ae565e709dd3b31a37806b8ba3260c504aef1aeb6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_ac41ce54ae7de57e4a889ae565e709dd3b31a37806b8ba3260c504aef1aeb6a3->leave($__internal_ac41ce54ae7de57e4a889ae565e709dd3b31a37806b8ba3260c504aef1aeb6a3_prof);

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
