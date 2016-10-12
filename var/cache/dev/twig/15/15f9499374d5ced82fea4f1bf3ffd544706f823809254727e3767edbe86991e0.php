<?php

/* LGPUserBundle:Message:new.html.twig */
class __TwigTemplate_c951c3c5f1069f623532ea5eb7f47ad4fab0f9d9bbda7f5679e0c0f3dab3c13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a09e11e4b54b32293afaed75aac103b72acca80a661747bca4ec3722c33ef39 = $this->env->getExtension("native_profiler");
        $__internal_7a09e11e4b54b32293afaed75aac103b72acca80a661747bca4ec3722c33ef39->enter($__internal_7a09e11e4b54b32293afaed75aac103b72acca80a661747bca4ec3722c33ef39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a09e11e4b54b32293afaed75aac103b72acca80a661747bca4ec3722c33ef39->leave($__internal_7a09e11e4b54b32293afaed75aac103b72acca80a661747bca4ec3722c33ef39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b2c7c552361816b076d11eade33e9abdfaff8b8e4fb6d26670e8d1a930eae9c = $this->env->getExtension("native_profiler");
        $__internal_7b2c7c552361816b076d11eade33e9abdfaff8b8e4fb6d26670e8d1a930eae9c->enter($__internal_7b2c7c552361816b076d11eade33e9abdfaff8b8e4fb6d26670e8d1a930eae9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Envoi de message - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7b2c7c552361816b076d11eade33e9abdfaff8b8e4fb6d26670e8d1a930eae9c->leave($__internal_7b2c7c552361816b076d11eade33e9abdfaff8b8e4fb6d26670e8d1a930eae9c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1110444f32b1459924b600ec4b29b358540c222de97ce6a06f1e52d078ff122e = $this->env->getExtension("native_profiler");
        $__internal_1110444f32b1459924b600ec4b29b358540c222de97ce6a06f1e52d078ff122e->enter($__internal_1110444f32b1459924b600ec4b29b358540c222de97ce6a06f1e52d078ff122e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1110444f32b1459924b600ec4b29b358540c222de97ce6a06f1e52d078ff122e->leave($__internal_1110444f32b1459924b600ec4b29b358540c222de97ce6a06f1e52d078ff122e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e64b075ac31db17ee03b7d35b8104e10362bc1c14d8d31a2ed098ca16af474ae = $this->env->getExtension("native_profiler");
        $__internal_e64b075ac31db17ee03b7d35b8104e10362bc1c14d8d31a2ed098ca16af474ae->enter($__internal_e64b075ac31db17ee03b7d35b8104e10362bc1c14d8d31a2ed098ca16af474ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"dashboard\">
            <div class=\"content-wrapper\">
                    <div class=\"container\">
                            <div class=\"row\">
                                    <div class=\"col-md-6 col-md-offset-3\">
                                            <div class=\"message-new\">
                                                    <div class=\"title\">Un titre</div>
                                                    
                                                    <div class=\"form-group\">
                                                      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'widget', array("attr" => array("class" => "form-control border-none", "placeholder" => "Objet du message")));
        echo "
                                                      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'errors');
        echo "
                                                    </div>

                                                    <div class=\"form-group\">
                                                      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'widget', array("attr" => array("class" => "form-control border-none")));
        echo "
                                                      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'errors');
        echo "
                                                    </div>

                                                    <div class=\"form-group\">
                                                      ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control border-none", "placeholder" => "Entrez votre message")));
        echo "
                                                      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
                                                    </div>

                                                      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                                
                                                  
                                            </div>
                                                      <br><br>
                                            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\">
                                    </div>
                            </div>
                    </div>
            </div>
    </div>



    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  ";
        
        $__internal_e64b075ac31db17ee03b7d35b8104e10362bc1c14d8d31a2ed098ca16af474ae->leave($__internal_e64b075ac31db17ee03b7d35b8104e10362bc1c14d8d31a2ed098ca16af474ae_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 53,  127 => 39,  121 => 36,  117 => 35,  110 => 31,  106 => 30,  99 => 26,  95 => 25,  82 => 15,  77 => 13,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Envoi de message - {{ parent() }}
{% endblock %}

{% block header_submenu %}
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
    
  {{ form_start(form) }}

  {{ form_errors(form) }}
    <div class=\"dashboard\">
            <div class=\"content-wrapper\">
                    <div class=\"container\">
                            <div class=\"row\">
                                    <div class=\"col-md-6 col-md-offset-3\">
                                            <div class=\"message-new\">
                                                    <div class=\"title\">Un titre</div>
                                                    
                                                    <div class=\"form-group\">
                                                      {{ form_widget(form.objet, {'attr': {'class':'form-control border-none','placeholder':'Objet du message'}}) }}
                                                      {{ form_errors(form.objet)}}
                                                    </div>

                                                    <div class=\"form-group\">
                                                      {{ form_widget(form.recepteur, {'attr': {'class':'form-control border-none'}}) }}
                                                      {{ form_errors(form.recepteur)}}
                                                    </div>

                                                    <div class=\"form-group\">
                                                      {{ form_widget(form.contenu, {'attr': {'class':'form-control border-none','placeholder':'Entrez votre message'}}) }}
                                                      {{ form_errors(form.contenu)}}
                                                    </div>

                                                      {{ form_rest(form) }}
                                                
                                                  
                                            </div>
                                                      <br><br>
                                            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\">
                                    </div>
                            </div>
                    </div>
            </div>
    </div>



    {{ form_end(form) }}
  {% endblock %}";
    }
}
