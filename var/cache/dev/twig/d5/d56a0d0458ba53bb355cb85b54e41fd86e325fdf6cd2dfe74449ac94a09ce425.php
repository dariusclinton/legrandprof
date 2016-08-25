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
        $__internal_0d8dd312bab913e47f501e1cb3ff512ff43da11bc9385864f299f9a76b7028ea = $this->env->getExtension("native_profiler");
        $__internal_0d8dd312bab913e47f501e1cb3ff512ff43da11bc9385864f299f9a76b7028ea->enter($__internal_0d8dd312bab913e47f501e1cb3ff512ff43da11bc9385864f299f9a76b7028ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d8dd312bab913e47f501e1cb3ff512ff43da11bc9385864f299f9a76b7028ea->leave($__internal_0d8dd312bab913e47f501e1cb3ff512ff43da11bc9385864f299f9a76b7028ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d217ba746082b41926c5e07095f649861030c330cb1abe2164504f48dfe3fa08 = $this->env->getExtension("native_profiler");
        $__internal_d217ba746082b41926c5e07095f649861030c330cb1abe2164504f48dfe3fa08->enter($__internal_d217ba746082b41926c5e07095f649861030c330cb1abe2164504f48dfe3fa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_d217ba746082b41926c5e07095f649861030c330cb1abe2164504f48dfe3fa08->leave($__internal_d217ba746082b41926c5e07095f649861030c330cb1abe2164504f48dfe3fa08_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5b52673139b3b1d908bb87a9d6dcc323541a3cc327921e1368d2094ac681d612 = $this->env->getExtension("native_profiler");
        $__internal_5b52673139b3b1d908bb87a9d6dcc323541a3cc327921e1368d2094ac681d612->enter($__internal_5b52673139b3b1d908bb87a9d6dcc323541a3cc327921e1368d2094ac681d612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5b52673139b3b1d908bb87a9d6dcc323541a3cc327921e1368d2094ac681d612->leave($__internal_5b52673139b3b1d908bb87a9d6dcc323541a3cc327921e1368d2094ac681d612_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a32714f8ab07158929fb66299e1c17066511ae56e99d00fde69bd50190a5dde = $this->env->getExtension("native_profiler");
        $__internal_8a32714f8ab07158929fb66299e1c17066511ae56e99d00fde69bd50190a5dde->enter($__internal_8a32714f8ab07158929fb66299e1c17066511ae56e99d00fde69bd50190a5dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_8a32714f8ab07158929fb66299e1c17066511ae56e99d00fde69bd50190a5dde->leave($__internal_8a32714f8ab07158929fb66299e1c17066511ae56e99d00fde69bd50190a5dde_prof);

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
