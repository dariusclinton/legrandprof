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
        $__internal_17da5e726f0422acac86b494778c4f5987cf70537b99a20aed78133bc29e811c = $this->env->getExtension("native_profiler");
        $__internal_17da5e726f0422acac86b494778c4f5987cf70537b99a20aed78133bc29e811c->enter($__internal_17da5e726f0422acac86b494778c4f5987cf70537b99a20aed78133bc29e811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17da5e726f0422acac86b494778c4f5987cf70537b99a20aed78133bc29e811c->leave($__internal_17da5e726f0422acac86b494778c4f5987cf70537b99a20aed78133bc29e811c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_915854713193ab47318e36910da19cc0130d48b09d5931031545bef601d18ecc = $this->env->getExtension("native_profiler");
        $__internal_915854713193ab47318e36910da19cc0130d48b09d5931031545bef601d18ecc->enter($__internal_915854713193ab47318e36910da19cc0130d48b09d5931031545bef601d18ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_915854713193ab47318e36910da19cc0130d48b09d5931031545bef601d18ecc->leave($__internal_915854713193ab47318e36910da19cc0130d48b09d5931031545bef601d18ecc_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_fd6364fe8fe70416de4b59f41caece062e2e009a699e862ecfab396cfdb9a6ad = $this->env->getExtension("native_profiler");
        $__internal_fd6364fe8fe70416de4b59f41caece062e2e009a699e862ecfab396cfdb9a6ad->enter($__internal_fd6364fe8fe70416de4b59f41caece062e2e009a699e862ecfab396cfdb9a6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_fd6364fe8fe70416de4b59f41caece062e2e009a699e862ecfab396cfdb9a6ad->leave($__internal_fd6364fe8fe70416de4b59f41caece062e2e009a699e862ecfab396cfdb9a6ad_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d6b906c290c0b047e3221120371a053779c0826b6bc2d7ea41c145a2c1a5cac = $this->env->getExtension("native_profiler");
        $__internal_0d6b906c290c0b047e3221120371a053779c0826b6bc2d7ea41c145a2c1a5cac->enter($__internal_0d6b906c290c0b047e3221120371a053779c0826b6bc2d7ea41c145a2c1a5cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_0d6b906c290c0b047e3221120371a053779c0826b6bc2d7ea41c145a2c1a5cac->leave($__internal_0d6b906c290c0b047e3221120371a053779c0826b6bc2d7ea41c145a2c1a5cac_prof);

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
