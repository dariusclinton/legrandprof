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
        $__internal_09253c1e063135f2b66bcc0eba8da232f5c676bba0c6cd4ef2bd8b80e645ddca = $this->env->getExtension("native_profiler");
        $__internal_09253c1e063135f2b66bcc0eba8da232f5c676bba0c6cd4ef2bd8b80e645ddca->enter($__internal_09253c1e063135f2b66bcc0eba8da232f5c676bba0c6cd4ef2bd8b80e645ddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09253c1e063135f2b66bcc0eba8da232f5c676bba0c6cd4ef2bd8b80e645ddca->leave($__internal_09253c1e063135f2b66bcc0eba8da232f5c676bba0c6cd4ef2bd8b80e645ddca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02e55b709d9b0d41d61ee24b86e3cf8401fffccd3ebdf1802cae8aa4042553f = $this->env->getExtension("native_profiler");
        $__internal_d02e55b709d9b0d41d61ee24b86e3cf8401fffccd3ebdf1802cae8aa4042553f->enter($__internal_d02e55b709d9b0d41d61ee24b86e3cf8401fffccd3ebdf1802cae8aa4042553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_d02e55b709d9b0d41d61ee24b86e3cf8401fffccd3ebdf1802cae8aa4042553f->leave($__internal_d02e55b709d9b0d41d61ee24b86e3cf8401fffccd3ebdf1802cae8aa4042553f_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_d1e14b81584dc36c11a1cf65a5af8517a10754704961e5f059d5e00081038bfd = $this->env->getExtension("native_profiler");
        $__internal_d1e14b81584dc36c11a1cf65a5af8517a10754704961e5f059d5e00081038bfd->enter($__internal_d1e14b81584dc36c11a1cf65a5af8517a10754704961e5f059d5e00081038bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_d1e14b81584dc36c11a1cf65a5af8517a10754704961e5f059d5e00081038bfd->leave($__internal_d1e14b81584dc36c11a1cf65a5af8517a10754704961e5f059d5e00081038bfd_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5012b234f22886cb7f4cfb5d147e4b45015d932f7b12106cf94ec5cb5f9a39d9 = $this->env->getExtension("native_profiler");
        $__internal_5012b234f22886cb7f4cfb5d147e4b45015d932f7b12106cf94ec5cb5f9a39d9->enter($__internal_5012b234f22886cb7f4cfb5d147e4b45015d932f7b12106cf94ec5cb5f9a39d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_5012b234f22886cb7f4cfb5d147e4b45015d932f7b12106cf94ec5cb5f9a39d9->leave($__internal_5012b234f22886cb7f4cfb5d147e4b45015d932f7b12106cf94ec5cb5f9a39d9_prof);

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
