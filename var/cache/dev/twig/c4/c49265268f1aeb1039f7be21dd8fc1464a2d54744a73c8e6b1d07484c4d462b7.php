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
        $__internal_3749d82783df19d30bef8646999e2682716d3193f420d0f7bf90a89413e9d795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3749d82783df19d30bef8646999e2682716d3193f420d0f7bf90a89413e9d795->enter($__internal_3749d82783df19d30bef8646999e2682716d3193f420d0f7bf90a89413e9d795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3749d82783df19d30bef8646999e2682716d3193f420d0f7bf90a89413e9d795->leave($__internal_3749d82783df19d30bef8646999e2682716d3193f420d0f7bf90a89413e9d795_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fa09f96c5a510d4cd45d4d52b3fbff9454fa654330e5a0b8a93a4ba5bb235fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa09f96c5a510d4cd45d4d52b3fbff9454fa654330e5a0b8a93a4ba5bb235fb->enter($__internal_4fa09f96c5a510d4cd45d4d52b3fbff9454fa654330e5a0b8a93a4ba5bb235fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Envoi de message - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4fa09f96c5a510d4cd45d4d52b3fbff9454fa654330e5a0b8a93a4ba5bb235fb->leave($__internal_4fa09f96c5a510d4cd45d4d52b3fbff9454fa654330e5a0b8a93a4ba5bb235fb_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_69867a9b84266fa7646e0387d351d013d974c3b96a5ccf1edc070be40af81427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69867a9b84266fa7646e0387d351d013d974c3b96a5ccf1edc070be40af81427->enter($__internal_69867a9b84266fa7646e0387d351d013d974c3b96a5ccf1edc070be40af81427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_69867a9b84266fa7646e0387d351d013d974c3b96a5ccf1edc070be40af81427->leave($__internal_69867a9b84266fa7646e0387d351d013d974c3b96a5ccf1edc070be40af81427_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a89c6f41e7159f0d972f33cc0056349442c1bd83c9fc2fd037f041d188f58e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a89c6f41e7159f0d972f33cc0056349442c1bd83c9fc2fd037f041d188f58e7->enter($__internal_7a89c6f41e7159f0d972f33cc0056349442c1bd83c9fc2fd037f041d188f58e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a89c6f41e7159f0d972f33cc0056349442c1bd83c9fc2fd037f041d188f58e7->leave($__internal_7a89c6f41e7159f0d972f33cc0056349442c1bd83c9fc2fd037f041d188f58e7_prof);

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
