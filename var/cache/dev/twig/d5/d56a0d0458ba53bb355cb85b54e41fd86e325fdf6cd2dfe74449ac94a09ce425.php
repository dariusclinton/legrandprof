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
        $__internal_f15a06828a8ec953df27c5eb052f4e3a92c6ebd829389323d3bc957aa045ba1d = $this->env->getExtension("native_profiler");
        $__internal_f15a06828a8ec953df27c5eb052f4e3a92c6ebd829389323d3bc957aa045ba1d->enter($__internal_f15a06828a8ec953df27c5eb052f4e3a92c6ebd829389323d3bc957aa045ba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15a06828a8ec953df27c5eb052f4e3a92c6ebd829389323d3bc957aa045ba1d->leave($__internal_f15a06828a8ec953df27c5eb052f4e3a92c6ebd829389323d3bc957aa045ba1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71b807610a88c94462cd22eaa63be8804f358b9ff000ade0b43e6096a4f5ae1f = $this->env->getExtension("native_profiler");
        $__internal_71b807610a88c94462cd22eaa63be8804f358b9ff000ade0b43e6096a4f5ae1f->enter($__internal_71b807610a88c94462cd22eaa63be8804f358b9ff000ade0b43e6096a4f5ae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_71b807610a88c94462cd22eaa63be8804f358b9ff000ade0b43e6096a4f5ae1f->leave($__internal_71b807610a88c94462cd22eaa63be8804f358b9ff000ade0b43e6096a4f5ae1f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_bfa645bb6aae621d6d3aab1c81acfc991063b57d82daff34ba161b125269d64a = $this->env->getExtension("native_profiler");
        $__internal_bfa645bb6aae621d6d3aab1c81acfc991063b57d82daff34ba161b125269d64a->enter($__internal_bfa645bb6aae621d6d3aab1c81acfc991063b57d82daff34ba161b125269d64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_bfa645bb6aae621d6d3aab1c81acfc991063b57d82daff34ba161b125269d64a->leave($__internal_bfa645bb6aae621d6d3aab1c81acfc991063b57d82daff34ba161b125269d64a_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac190439239d9bdf3787622a1637ab976deb7718da478933468d41992b856cb4 = $this->env->getExtension("native_profiler");
        $__internal_ac190439239d9bdf3787622a1637ab976deb7718da478933468d41992b856cb4->enter($__internal_ac190439239d9bdf3787622a1637ab976deb7718da478933468d41992b856cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_ac190439239d9bdf3787622a1637ab976deb7718da478933468d41992b856cb4->leave($__internal_ac190439239d9bdf3787622a1637ab976deb7718da478933468d41992b856cb4_prof);

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
