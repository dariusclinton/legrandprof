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
        $__internal_c9c600d73513b246eba2acfa05945e84cae629a605469af943b3c612a14c55b6 = $this->env->getExtension("native_profiler");
        $__internal_c9c600d73513b246eba2acfa05945e84cae629a605469af943b3c612a14c55b6->enter($__internal_c9c600d73513b246eba2acfa05945e84cae629a605469af943b3c612a14c55b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9c600d73513b246eba2acfa05945e84cae629a605469af943b3c612a14c55b6->leave($__internal_c9c600d73513b246eba2acfa05945e84cae629a605469af943b3c612a14c55b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6624a316b29e546f14067a95deef4447262198719401c13a0474c5ba49252042 = $this->env->getExtension("native_profiler");
        $__internal_6624a316b29e546f14067a95deef4447262198719401c13a0474c5ba49252042->enter($__internal_6624a316b29e546f14067a95deef4447262198719401c13a0474c5ba49252042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_6624a316b29e546f14067a95deef4447262198719401c13a0474c5ba49252042->leave($__internal_6624a316b29e546f14067a95deef4447262198719401c13a0474c5ba49252042_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_8990e4eec5c3b4032fb605268d345acb5836ed7556319d866b997417fa60382a = $this->env->getExtension("native_profiler");
        $__internal_8990e4eec5c3b4032fb605268d345acb5836ed7556319d866b997417fa60382a->enter($__internal_8990e4eec5c3b4032fb605268d345acb5836ed7556319d866b997417fa60382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_8990e4eec5c3b4032fb605268d345acb5836ed7556319d866b997417fa60382a->leave($__internal_8990e4eec5c3b4032fb605268d345acb5836ed7556319d866b997417fa60382a_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bfec405be5c97835a672c0594716a76b13aa42082fe5631e5e96c6724cee68e = $this->env->getExtension("native_profiler");
        $__internal_1bfec405be5c97835a672c0594716a76b13aa42082fe5631e5e96c6724cee68e->enter($__internal_1bfec405be5c97835a672c0594716a76b13aa42082fe5631e5e96c6724cee68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_1bfec405be5c97835a672c0594716a76b13aa42082fe5631e5e96c6724cee68e->leave($__internal_1bfec405be5c97835a672c0594716a76b13aa42082fe5631e5e96c6724cee68e_prof);

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
