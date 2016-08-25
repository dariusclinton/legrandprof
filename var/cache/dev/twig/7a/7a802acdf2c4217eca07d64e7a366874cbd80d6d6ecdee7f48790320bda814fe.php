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
        $__internal_4a6ba5f33919601b9a92b1402ca4dbf0d1556fea66ccfa50545f52eed981ddd7 = $this->env->getExtension("native_profiler");
        $__internal_4a6ba5f33919601b9a92b1402ca4dbf0d1556fea66ccfa50545f52eed981ddd7->enter($__internal_4a6ba5f33919601b9a92b1402ca4dbf0d1556fea66ccfa50545f52eed981ddd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6ba5f33919601b9a92b1402ca4dbf0d1556fea66ccfa50545f52eed981ddd7->leave($__internal_4a6ba5f33919601b9a92b1402ca4dbf0d1556fea66ccfa50545f52eed981ddd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96474029ced08988ab7b6e894737b2e1737425317f1d64003af1b5ec5692c916 = $this->env->getExtension("native_profiler");
        $__internal_96474029ced08988ab7b6e894737b2e1737425317f1d64003af1b5ec5692c916->enter($__internal_96474029ced08988ab7b6e894737b2e1737425317f1d64003af1b5ec5692c916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_96474029ced08988ab7b6e894737b2e1737425317f1d64003af1b5ec5692c916->leave($__internal_96474029ced08988ab7b6e894737b2e1737425317f1d64003af1b5ec5692c916_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_c8e8ad5a1fd81ab63c2521d5892a214057774f4ba413e3b736a0b62b7f951a57 = $this->env->getExtension("native_profiler");
        $__internal_c8e8ad5a1fd81ab63c2521d5892a214057774f4ba413e3b736a0b62b7f951a57->enter($__internal_c8e8ad5a1fd81ab63c2521d5892a214057774f4ba413e3b736a0b62b7f951a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_c8e8ad5a1fd81ab63c2521d5892a214057774f4ba413e3b736a0b62b7f951a57->leave($__internal_c8e8ad5a1fd81ab63c2521d5892a214057774f4ba413e3b736a0b62b7f951a57_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db60ade498923707770501e66ade6f404a7a252f69847bb43bc962d7ebeaf044 = $this->env->getExtension("native_profiler");
        $__internal_db60ade498923707770501e66ade6f404a7a252f69847bb43bc962d7ebeaf044->enter($__internal_db60ade498923707770501e66ade6f404a7a252f69847bb43bc962d7ebeaf044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_db60ade498923707770501e66ade6f404a7a252f69847bb43bc962d7ebeaf044->leave($__internal_db60ade498923707770501e66ade6f404a7a252f69847bb43bc962d7ebeaf044_prof);

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
