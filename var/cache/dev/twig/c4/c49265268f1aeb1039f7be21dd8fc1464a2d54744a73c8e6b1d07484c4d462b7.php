<?php

/* LGPUserBundle:Message:new.html.twig */
class __TwigTemplate_d91466f91a74fe7f63efe5649db171cb64d08927ca51c8aa9c7e47d1743d0324 extends Twig_Template
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
        $__internal_c774191aad4eda9a08ca29ebb001ea2cc1dc6da1e6eeeb11709635e969b4a0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c774191aad4eda9a08ca29ebb001ea2cc1dc6da1e6eeeb11709635e969b4a0df->enter($__internal_c774191aad4eda9a08ca29ebb001ea2cc1dc6da1e6eeeb11709635e969b4a0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c774191aad4eda9a08ca29ebb001ea2cc1dc6da1e6eeeb11709635e969b4a0df->leave($__internal_c774191aad4eda9a08ca29ebb001ea2cc1dc6da1e6eeeb11709635e969b4a0df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ccecdfc21f9f032f70a165ad407a6540a7f1e2aee87e8d6b5bb5a7286eaf8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccecdfc21f9f032f70a165ad407a6540a7f1e2aee87e8d6b5bb5a7286eaf8e2->enter($__internal_5ccecdfc21f9f032f70a165ad407a6540a7f1e2aee87e8d6b5bb5a7286eaf8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Envoi de message - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5ccecdfc21f9f032f70a165ad407a6540a7f1e2aee87e8d6b5bb5a7286eaf8e2->leave($__internal_5ccecdfc21f9f032f70a165ad407a6540a7f1e2aee87e8d6b5bb5a7286eaf8e2_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_776c998954d87b66cd0ee849781fecf09a6e32a79c29e23215e61016d3fc6f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776c998954d87b66cd0ee849781fecf09a6e32a79c29e23215e61016d3fc6f42->enter($__internal_776c998954d87b66cd0ee849781fecf09a6e32a79c29e23215e61016d3fc6f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_776c998954d87b66cd0ee849781fecf09a6e32a79c29e23215e61016d3fc6f42->leave($__internal_776c998954d87b66cd0ee849781fecf09a6e32a79c29e23215e61016d3fc6f42_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7e6dc3cbb797ddc2ac581dfb250877b28c2e98e5c5128d8d52a4de32829827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e6dc3cbb797ddc2ac581dfb250877b28c2e98e5c5128d8d52a4de32829827b->enter($__internal_c7e6dc3cbb797ddc2ac581dfb250877b28c2e98e5c5128d8d52a4de32829827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
  ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

  ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'widget', array("attr" => array("class" => "form-control border-none", "placeholder" => "Objet du message")));
        echo "
                                                      ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'errors');
        echo "
                                                    </div>

                                                    <div class=\"form-group\">
                                                      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'widget', array("attr" => array("class" => "form-control border-none")));
        echo "
                                                      ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'errors');
        echo "
                                                    </div>

                                                    <div class=\"form-group\">
                                                      ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control border-none", "placeholder" => "Entrez votre message")));
        echo "
                                                      ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
                                                    </div>

                                                      ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  ";
        
        $__internal_c7e6dc3cbb797ddc2ac581dfb250877b28c2e98e5c5128d8d52a4de32829827b->leave($__internal_c7e6dc3cbb797ddc2ac581dfb250877b28c2e98e5c5128d8d52a4de32829827b_prof);

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
