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
        $__internal_5c87bb6dfb2bbbfaf50f3db8b56971bf101ed593af439e91498338ba74f90578 = $this->env->getExtension("native_profiler");
        $__internal_5c87bb6dfb2bbbfaf50f3db8b56971bf101ed593af439e91498338ba74f90578->enter($__internal_5c87bb6dfb2bbbfaf50f3db8b56971bf101ed593af439e91498338ba74f90578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c87bb6dfb2bbbfaf50f3db8b56971bf101ed593af439e91498338ba74f90578->leave($__internal_5c87bb6dfb2bbbfaf50f3db8b56971bf101ed593af439e91498338ba74f90578_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ef0a6d7fd229b4c8483b7498c3cfd54542e7db77930a6265c0d30c3ca884231 = $this->env->getExtension("native_profiler");
        $__internal_1ef0a6d7fd229b4c8483b7498c3cfd54542e7db77930a6265c0d30c3ca884231->enter($__internal_1ef0a6d7fd229b4c8483b7498c3cfd54542e7db77930a6265c0d30c3ca884231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_1ef0a6d7fd229b4c8483b7498c3cfd54542e7db77930a6265c0d30c3ca884231->leave($__internal_1ef0a6d7fd229b4c8483b7498c3cfd54542e7db77930a6265c0d30c3ca884231_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_98b5e3b03b2f5eae4535c338f8f33d6bd93baf64fb34987731bf8f1ca3b83c84 = $this->env->getExtension("native_profiler");
        $__internal_98b5e3b03b2f5eae4535c338f8f33d6bd93baf64fb34987731bf8f1ca3b83c84->enter($__internal_98b5e3b03b2f5eae4535c338f8f33d6bd93baf64fb34987731bf8f1ca3b83c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_98b5e3b03b2f5eae4535c338f8f33d6bd93baf64fb34987731bf8f1ca3b83c84->leave($__internal_98b5e3b03b2f5eae4535c338f8f33d6bd93baf64fb34987731bf8f1ca3b83c84_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aeb4c6b5950f0166c583cd916568b56dde03f4210431beac4b81fda9169b675f = $this->env->getExtension("native_profiler");
        $__internal_aeb4c6b5950f0166c583cd916568b56dde03f4210431beac4b81fda9169b675f->enter($__internal_aeb4c6b5950f0166c583cd916568b56dde03f4210431beac4b81fda9169b675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_aeb4c6b5950f0166c583cd916568b56dde03f4210431beac4b81fda9169b675f->leave($__internal_aeb4c6b5950f0166c583cd916568b56dde03f4210431beac4b81fda9169b675f_prof);

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
