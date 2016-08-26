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
        $__internal_f0a16fab0bd8386c004ee171d397cc864223440c3fbc375f17b054431b77e36c = $this->env->getExtension("native_profiler");
        $__internal_f0a16fab0bd8386c004ee171d397cc864223440c3fbc375f17b054431b77e36c->enter($__internal_f0a16fab0bd8386c004ee171d397cc864223440c3fbc375f17b054431b77e36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0a16fab0bd8386c004ee171d397cc864223440c3fbc375f17b054431b77e36c->leave($__internal_f0a16fab0bd8386c004ee171d397cc864223440c3fbc375f17b054431b77e36c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1c5fd36ae3162b7fa2d3e4d353772aae75416ff43c134c116e298b8ebe290ee = $this->env->getExtension("native_profiler");
        $__internal_f1c5fd36ae3162b7fa2d3e4d353772aae75416ff43c134c116e298b8ebe290ee->enter($__internal_f1c5fd36ae3162b7fa2d3e4d353772aae75416ff43c134c116e298b8ebe290ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_f1c5fd36ae3162b7fa2d3e4d353772aae75416ff43c134c116e298b8ebe290ee->leave($__internal_f1c5fd36ae3162b7fa2d3e4d353772aae75416ff43c134c116e298b8ebe290ee_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_8a7092c01351d390c952cba89a9c495a0d1754623b749d1c8a261b7155b830c6 = $this->env->getExtension("native_profiler");
        $__internal_8a7092c01351d390c952cba89a9c495a0d1754623b749d1c8a261b7155b830c6->enter($__internal_8a7092c01351d390c952cba89a9c495a0d1754623b749d1c8a261b7155b830c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_8a7092c01351d390c952cba89a9c495a0d1754623b749d1c8a261b7155b830c6->leave($__internal_8a7092c01351d390c952cba89a9c495a0d1754623b749d1c8a261b7155b830c6_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2f267a22e48bcd04017e93e2d289889bc302c0c18fc1343d053a03c439924de = $this->env->getExtension("native_profiler");
        $__internal_a2f267a22e48bcd04017e93e2d289889bc302c0c18fc1343d053a03c439924de->enter($__internal_a2f267a22e48bcd04017e93e2d289889bc302c0c18fc1343d053a03c439924de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_a2f267a22e48bcd04017e93e2d289889bc302c0c18fc1343d053a03c439924de->leave($__internal_a2f267a22e48bcd04017e93e2d289889bc302c0c18fc1343d053a03c439924de_prof);

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
