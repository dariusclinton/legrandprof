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
        $__internal_386da5fc896e9f999de34b7df4b89a29f99cc63deaab7d6b83e5b259ac83d3a2 = $this->env->getExtension("native_profiler");
        $__internal_386da5fc896e9f999de34b7df4b89a29f99cc63deaab7d6b83e5b259ac83d3a2->enter($__internal_386da5fc896e9f999de34b7df4b89a29f99cc63deaab7d6b83e5b259ac83d3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386da5fc896e9f999de34b7df4b89a29f99cc63deaab7d6b83e5b259ac83d3a2->leave($__internal_386da5fc896e9f999de34b7df4b89a29f99cc63deaab7d6b83e5b259ac83d3a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2adb0b39547f699ab174d1440e12da1f42e369f66e1c3194a8f61bfea324cf0 = $this->env->getExtension("native_profiler");
        $__internal_b2adb0b39547f699ab174d1440e12da1f42e369f66e1c3194a8f61bfea324cf0->enter($__internal_b2adb0b39547f699ab174d1440e12da1f42e369f66e1c3194a8f61bfea324cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_b2adb0b39547f699ab174d1440e12da1f42e369f66e1c3194a8f61bfea324cf0->leave($__internal_b2adb0b39547f699ab174d1440e12da1f42e369f66e1c3194a8f61bfea324cf0_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_676a30cf4248746e6c618a4fe162f600931af66dc5a2a69e21235b521b8595e6 = $this->env->getExtension("native_profiler");
        $__internal_676a30cf4248746e6c618a4fe162f600931af66dc5a2a69e21235b521b8595e6->enter($__internal_676a30cf4248746e6c618a4fe162f600931af66dc5a2a69e21235b521b8595e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_676a30cf4248746e6c618a4fe162f600931af66dc5a2a69e21235b521b8595e6->leave($__internal_676a30cf4248746e6c618a4fe162f600931af66dc5a2a69e21235b521b8595e6_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd249da643983c246fc1ed94c081fb6fc35a9f23442fc36be0003f11c32aa610 = $this->env->getExtension("native_profiler");
        $__internal_dd249da643983c246fc1ed94c081fb6fc35a9f23442fc36be0003f11c32aa610->enter($__internal_dd249da643983c246fc1ed94c081fb6fc35a9f23442fc36be0003f11c32aa610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_dd249da643983c246fc1ed94c081fb6fc35a9f23442fc36be0003f11c32aa610->leave($__internal_dd249da643983c246fc1ed94c081fb6fc35a9f23442fc36be0003f11c32aa610_prof);

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
