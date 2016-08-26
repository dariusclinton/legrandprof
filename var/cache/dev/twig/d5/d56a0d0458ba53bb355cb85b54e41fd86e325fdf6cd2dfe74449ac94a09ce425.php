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
        $__internal_fa1c97837e5650ee0c719b3b4fed12314975247f8db8fd8ea905115505d858b3 = $this->env->getExtension("native_profiler");
        $__internal_fa1c97837e5650ee0c719b3b4fed12314975247f8db8fd8ea905115505d858b3->enter($__internal_fa1c97837e5650ee0c719b3b4fed12314975247f8db8fd8ea905115505d858b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1c97837e5650ee0c719b3b4fed12314975247f8db8fd8ea905115505d858b3->leave($__internal_fa1c97837e5650ee0c719b3b4fed12314975247f8db8fd8ea905115505d858b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_533c720a009f25837ed42b5b6b5c6aeb9435ec86298f8f3ebfa60435a1592ffb = $this->env->getExtension("native_profiler");
        $__internal_533c720a009f25837ed42b5b6b5c6aeb9435ec86298f8f3ebfa60435a1592ffb->enter($__internal_533c720a009f25837ed42b5b6b5c6aeb9435ec86298f8f3ebfa60435a1592ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_533c720a009f25837ed42b5b6b5c6aeb9435ec86298f8f3ebfa60435a1592ffb->leave($__internal_533c720a009f25837ed42b5b6b5c6aeb9435ec86298f8f3ebfa60435a1592ffb_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e98ffe9439f479493746cf20c85838700b2cdf6dac5cc2b65ea374f1df6b221b = $this->env->getExtension("native_profiler");
        $__internal_e98ffe9439f479493746cf20c85838700b2cdf6dac5cc2b65ea374f1df6b221b->enter($__internal_e98ffe9439f479493746cf20c85838700b2cdf6dac5cc2b65ea374f1df6b221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e98ffe9439f479493746cf20c85838700b2cdf6dac5cc2b65ea374f1df6b221b->leave($__internal_e98ffe9439f479493746cf20c85838700b2cdf6dac5cc2b65ea374f1df6b221b_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d93a412577d3e3c7efa4390a7c1ff3b7f26c4b9eda1b76e29e4f9df51b15b21e = $this->env->getExtension("native_profiler");
        $__internal_d93a412577d3e3c7efa4390a7c1ff3b7f26c4b9eda1b76e29e4f9df51b15b21e->enter($__internal_d93a412577d3e3c7efa4390a7c1ff3b7f26c4b9eda1b76e29e4f9df51b15b21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_d93a412577d3e3c7efa4390a7c1ff3b7f26c4b9eda1b76e29e4f9df51b15b21e->leave($__internal_d93a412577d3e3c7efa4390a7c1ff3b7f26c4b9eda1b76e29e4f9df51b15b21e_prof);

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
