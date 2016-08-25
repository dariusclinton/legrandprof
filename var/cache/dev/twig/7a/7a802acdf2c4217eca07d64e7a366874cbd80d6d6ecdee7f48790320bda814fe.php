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
        $__internal_8f1a32a459340b2a588a786e7c5d4cfdb14b27aa3ec9972bf4f6c10f074d6d64 = $this->env->getExtension("native_profiler");
        $__internal_8f1a32a459340b2a588a786e7c5d4cfdb14b27aa3ec9972bf4f6c10f074d6d64->enter($__internal_8f1a32a459340b2a588a786e7c5d4cfdb14b27aa3ec9972bf4f6c10f074d6d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f1a32a459340b2a588a786e7c5d4cfdb14b27aa3ec9972bf4f6c10f074d6d64->leave($__internal_8f1a32a459340b2a588a786e7c5d4cfdb14b27aa3ec9972bf4f6c10f074d6d64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f8b1233bc4b7f851079be11fab0a55f068be4de9fa072c4cee38fa8c05738f9 = $this->env->getExtension("native_profiler");
        $__internal_0f8b1233bc4b7f851079be11fab0a55f068be4de9fa072c4cee38fa8c05738f9->enter($__internal_0f8b1233bc4b7f851079be11fab0a55f068be4de9fa072c4cee38fa8c05738f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_0f8b1233bc4b7f851079be11fab0a55f068be4de9fa072c4cee38fa8c05738f9->leave($__internal_0f8b1233bc4b7f851079be11fab0a55f068be4de9fa072c4cee38fa8c05738f9_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_df7582f2ef7ab681b5e7c2058d7536103bf0b53438e92848fcea572c509ac635 = $this->env->getExtension("native_profiler");
        $__internal_df7582f2ef7ab681b5e7c2058d7536103bf0b53438e92848fcea572c509ac635->enter($__internal_df7582f2ef7ab681b5e7c2058d7536103bf0b53438e92848fcea572c509ac635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_df7582f2ef7ab681b5e7c2058d7536103bf0b53438e92848fcea572c509ac635->leave($__internal_df7582f2ef7ab681b5e7c2058d7536103bf0b53438e92848fcea572c509ac635_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e162f1f303b72cd35a19246380a801d21de780159c47b5db5f8ed69f8c8bafe8 = $this->env->getExtension("native_profiler");
        $__internal_e162f1f303b72cd35a19246380a801d21de780159c47b5db5f8ed69f8c8bafe8->enter($__internal_e162f1f303b72cd35a19246380a801d21de780159c47b5db5f8ed69f8c8bafe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_e162f1f303b72cd35a19246380a801d21de780159c47b5db5f8ed69f8c8bafe8->leave($__internal_e162f1f303b72cd35a19246380a801d21de780159c47b5db5f8ed69f8c8bafe8_prof);

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
