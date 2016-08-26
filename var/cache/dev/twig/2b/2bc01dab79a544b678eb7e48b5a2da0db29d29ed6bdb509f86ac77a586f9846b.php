<?php

/* @LGPUser/Profile/edit.html.twig */
class __TwigTemplate_16410c83b23fc9cc51d6a12eb9cba3140c2a600b14ce10b45eda7987120e79fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5017377126473b48d4a91ff5ebc762a9a96e43dcf128af99d66b326e4ad14620 = $this->env->getExtension("native_profiler");
        $__internal_5017377126473b48d4a91ff5ebc762a9a96e43dcf128af99d66b326e4ad14620->enter($__internal_5017377126473b48d4a91ff5ebc762a9a96e43dcf128af99d66b326e4ad14620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5017377126473b48d4a91ff5ebc762a9a96e43dcf128af99d66b326e4ad14620->leave($__internal_5017377126473b48d4a91ff5ebc762a9a96e43dcf128af99d66b326e4ad14620_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7afe87e36329b9450bc17889734e93ed75e7f82b1360146a65f91c0e6b8eeec = $this->env->getExtension("native_profiler");
        $__internal_b7afe87e36329b9450bc17889734e93ed75e7f82b1360146a65f91c0e6b8eeec->enter($__internal_b7afe87e36329b9450bc17889734e93ed75e7f82b1360146a65f91c0e6b8eeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7afe87e36329b9450bc17889734e93ed75e7f82b1360146a65f91c0e6b8eeec->leave($__internal_b7afe87e36329b9450bc17889734e93ed75e7f82b1360146a65f91c0e6b8eeec_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6139bb3686bdcf8636f855143f0d5779e50a808ed8b5aa67a11d40cb40e8f7d5 = $this->env->getExtension("native_profiler");
        $__internal_6139bb3686bdcf8636f855143f0d5779e50a808ed8b5aa67a11d40cb40e8f7d5->enter($__internal_6139bb3686bdcf8636f855143f0d5779e50a808ed8b5aa67a11d40cb40e8f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_6139bb3686bdcf8636f855143f0d5779e50a808ed8b5aa67a11d40cb40e8f7d5->leave($__internal_6139bb3686bdcf8636f855143f0d5779e50a808ed8b5aa67a11d40cb40e8f7d5_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
