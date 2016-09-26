<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4e9388e47a351ec26429461ab99f3f6c97b7e94d2628279a1b59d02c9d8f356c extends Twig_Template
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
        $__internal_7c2d7c2fe48608a613d085be4d9612e9367ad8ed67ab5959cd68cd028f832378 = $this->env->getExtension("native_profiler");
        $__internal_7c2d7c2fe48608a613d085be4d9612e9367ad8ed67ab5959cd68cd028f832378->enter($__internal_7c2d7c2fe48608a613d085be4d9612e9367ad8ed67ab5959cd68cd028f832378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2d7c2fe48608a613d085be4d9612e9367ad8ed67ab5959cd68cd028f832378->leave($__internal_7c2d7c2fe48608a613d085be4d9612e9367ad8ed67ab5959cd68cd028f832378_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d82677e2abe110c4d35458586123a2598ebdda5470691beee804802c023d403a = $this->env->getExtension("native_profiler");
        $__internal_d82677e2abe110c4d35458586123a2598ebdda5470691beee804802c023d403a->enter($__internal_d82677e2abe110c4d35458586123a2598ebdda5470691beee804802c023d403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_d82677e2abe110c4d35458586123a2598ebdda5470691beee804802c023d403a->leave($__internal_d82677e2abe110c4d35458586123a2598ebdda5470691beee804802c023d403a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b1a78736e16f1e3df7725ba3b29185007508269900697b2a996fb8f365c5012f = $this->env->getExtension("native_profiler");
        $__internal_b1a78736e16f1e3df7725ba3b29185007508269900697b2a996fb8f365c5012f->enter($__internal_b1a78736e16f1e3df7725ba3b29185007508269900697b2a996fb8f365c5012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b1a78736e16f1e3df7725ba3b29185007508269900697b2a996fb8f365c5012f->leave($__internal_b1a78736e16f1e3df7725ba3b29185007508269900697b2a996fb8f365c5012f_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_525bc35c17f873f1a865abded9e62663877d457b4af39deb815ea50f4d892241 = $this->env->getExtension("native_profiler");
        $__internal_525bc35c17f873f1a865abded9e62663877d457b4af39deb815ea50f4d892241->enter($__internal_525bc35c17f873f1a865abded9e62663877d457b4af39deb815ea50f4d892241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_525bc35c17f873f1a865abded9e62663877d457b4af39deb815ea50f4d892241->leave($__internal_525bc35c17f873f1a865abded9e62663877d457b4af39deb815ea50f4d892241_prof);

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

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
  {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} 
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}    
  <div class=\"bg-grey dashboard\">
    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
  </div>
{% endblock fos_user_content %}";
    }
}
