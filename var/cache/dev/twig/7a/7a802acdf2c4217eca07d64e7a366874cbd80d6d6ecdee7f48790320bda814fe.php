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
        $__internal_9adde3914f28ed1a05c06a3b4cb01a5610f3f12ed52a08fd9520a4647abb576c = $this->env->getExtension("native_profiler");
        $__internal_9adde3914f28ed1a05c06a3b4cb01a5610f3f12ed52a08fd9520a4647abb576c->enter($__internal_9adde3914f28ed1a05c06a3b4cb01a5610f3f12ed52a08fd9520a4647abb576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9adde3914f28ed1a05c06a3b4cb01a5610f3f12ed52a08fd9520a4647abb576c->leave($__internal_9adde3914f28ed1a05c06a3b4cb01a5610f3f12ed52a08fd9520a4647abb576c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a15864e2502736b5ae1e53ba8f5569a11352217aa088e639f78db4d138d48a1 = $this->env->getExtension("native_profiler");
        $__internal_6a15864e2502736b5ae1e53ba8f5569a11352217aa088e639f78db4d138d48a1->enter($__internal_6a15864e2502736b5ae1e53ba8f5569a11352217aa088e639f78db4d138d48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_6a15864e2502736b5ae1e53ba8f5569a11352217aa088e639f78db4d138d48a1->leave($__internal_6a15864e2502736b5ae1e53ba8f5569a11352217aa088e639f78db4d138d48a1_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5864cd93416b3fdf08ba77259c7dca6b0d1b01a2bd1c2bf599cb2008f440720b = $this->env->getExtension("native_profiler");
        $__internal_5864cd93416b3fdf08ba77259c7dca6b0d1b01a2bd1c2bf599cb2008f440720b->enter($__internal_5864cd93416b3fdf08ba77259c7dca6b0d1b01a2bd1c2bf599cb2008f440720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5864cd93416b3fdf08ba77259c7dca6b0d1b01a2bd1c2bf599cb2008f440720b->leave($__internal_5864cd93416b3fdf08ba77259c7dca6b0d1b01a2bd1c2bf599cb2008f440720b_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b893498b2d325a577d6b904bcea9396300200e2ea1de1ecd8af3aaca5ab33806 = $this->env->getExtension("native_profiler");
        $__internal_b893498b2d325a577d6b904bcea9396300200e2ea1de1ecd8af3aaca5ab33806->enter($__internal_b893498b2d325a577d6b904bcea9396300200e2ea1de1ecd8af3aaca5ab33806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_b893498b2d325a577d6b904bcea9396300200e2ea1de1ecd8af3aaca5ab33806->leave($__internal_b893498b2d325a577d6b904bcea9396300200e2ea1de1ecd8af3aaca5ab33806_prof);

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
