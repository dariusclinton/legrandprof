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
        $__internal_596ae32e34d6bdc6b9718c40facdde5c94a302cfbb9f9c357712a2cad6b96e27 = $this->env->getExtension("native_profiler");
        $__internal_596ae32e34d6bdc6b9718c40facdde5c94a302cfbb9f9c357712a2cad6b96e27->enter($__internal_596ae32e34d6bdc6b9718c40facdde5c94a302cfbb9f9c357712a2cad6b96e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_596ae32e34d6bdc6b9718c40facdde5c94a302cfbb9f9c357712a2cad6b96e27->leave($__internal_596ae32e34d6bdc6b9718c40facdde5c94a302cfbb9f9c357712a2cad6b96e27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf19611a0c2307a14f6b567743864e5f5bd78157862f5de3db6a2fb2adcc6c09 = $this->env->getExtension("native_profiler");
        $__internal_cf19611a0c2307a14f6b567743864e5f5bd78157862f5de3db6a2fb2adcc6c09->enter($__internal_cf19611a0c2307a14f6b567743864e5f5bd78157862f5de3db6a2fb2adcc6c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_cf19611a0c2307a14f6b567743864e5f5bd78157862f5de3db6a2fb2adcc6c09->leave($__internal_cf19611a0c2307a14f6b567743864e5f5bd78157862f5de3db6a2fb2adcc6c09_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_16bb79a24cd54840188391df6e16e23736d2e435f58dc237e890c05cebed79d9 = $this->env->getExtension("native_profiler");
        $__internal_16bb79a24cd54840188391df6e16e23736d2e435f58dc237e890c05cebed79d9->enter($__internal_16bb79a24cd54840188391df6e16e23736d2e435f58dc237e890c05cebed79d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_16bb79a24cd54840188391df6e16e23736d2e435f58dc237e890c05cebed79d9->leave($__internal_16bb79a24cd54840188391df6e16e23736d2e435f58dc237e890c05cebed79d9_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fff2684d556a476f9f1b696a81ea14404ba757be39db6f2b1e45005b86dd55c = $this->env->getExtension("native_profiler");
        $__internal_0fff2684d556a476f9f1b696a81ea14404ba757be39db6f2b1e45005b86dd55c->enter($__internal_0fff2684d556a476f9f1b696a81ea14404ba757be39db6f2b1e45005b86dd55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_0fff2684d556a476f9f1b696a81ea14404ba757be39db6f2b1e45005b86dd55c->leave($__internal_0fff2684d556a476f9f1b696a81ea14404ba757be39db6f2b1e45005b86dd55c_prof);

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
