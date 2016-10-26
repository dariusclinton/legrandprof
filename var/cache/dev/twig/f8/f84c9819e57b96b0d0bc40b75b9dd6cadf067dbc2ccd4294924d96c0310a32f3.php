<?php

/* LGPUserBundle:Registration:parent.form.html.twig */
class __TwigTemplate_5ed3d95f1cf3cffecd0f6393e189eba263ca9c02af28f3b7a15a9918c386c11e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Registration:parent.form.html.twig", 1);
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
        $__internal_188ae5375ed7a91ec9928184f98f1ada2da6f50e255082d7f8ddd9ed671fd4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188ae5375ed7a91ec9928184f98f1ada2da6f50e255082d7f8ddd9ed671fd4c7->enter($__internal_188ae5375ed7a91ec9928184f98f1ada2da6f50e255082d7f8ddd9ed671fd4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:parent.form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_188ae5375ed7a91ec9928184f98f1ada2da6f50e255082d7f8ddd9ed671fd4c7->leave($__internal_188ae5375ed7a91ec9928184f98f1ada2da6f50e255082d7f8ddd9ed671fd4c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95f34b975afba1b5ae7e2fa379df93ed69c14d8e545af487ab84db7b711cf8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f34b975afba1b5ae7e2fa379df93ed69c14d8e545af487ab84db7b711cf8a7->enter($__internal_95f34b975afba1b5ae7e2fa379df93ed69c14d8e545af487ab84db7b711cf8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Création de compte parent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_95f34b975afba1b5ae7e2fa379df93ed69c14d8e545af487ab84db7b711cf8a7->leave($__internal_95f34b975afba1b5ae7e2fa379df93ed69c14d8e545af487ab84db7b711cf8a7_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b056de0511f9932f88eea11ba619f3ba2db984da6af2dbfa7bbd4a1faf7f621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b056de0511f9932f88eea11ba619f3ba2db984da6af2dbfa7bbd4a1faf7f621->enter($__internal_3b056de0511f9932f88eea11ba619f3ba2db984da6af2dbfa7bbd4a1faf7f621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    ";
        // line 9
        echo "    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/2.1.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1\">
                                <div class=\"left\">
                                        <h3 class=\"hero-title-register\">Créez un compte apprenant<br> </h3><h4 class=\"hero-subtitle-register\">Et faites grandir vos élèves.</h4>
                                        <p class=\"lead-register\">
                                        Créez un compte apprenant et recherchez immédiatement un prof près de chez vous pour prendre un cours de votre choix.</p>
                                </div>

                        </div>
                        <div class=\"col-sm-3 col-md-offset-1 col-sm-offset-1 col-md-3\">
                                
                            
                            <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_parent_registration");
        echo "\" method=\"POST\">
                                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                                <div class=\"form-group\">
                                  ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom", "class" => "form-control")));
        echo "
                                  ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'widget', array("attr" => array("placeholder" => "Prénoms", "class" => "form-control")));
        echo "
                                  ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 45
        echo "
                                <div class=\"form-group\">
                                  ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 56
        echo "
                                <div class=\"form-group\">
                                  ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Adresse email", "class" => "form-control")));
        echo "
                                  ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "children", array()), "first", array(), "array"), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
        echo "
                                  ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
                                </div>
                                
                                <div class=\"form-group\">
                                  ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "children", array()), "second", array(), "array"), 'widget', array("attr" => array("placeholder" => "Confirmation Mot de passe", "class" => "form-control")));
        echo "
                                  ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                <div>
                                    <input type=\"submit\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </form>
                        </div>

                </div>

        </div>

    </div>
    <!-- end hero-header with windows height -->
    
";
        
        $__internal_3b056de0511f9932f88eea11ba619f3ba2db984da6af2dbfa7bbd4a1faf7f621->leave($__internal_3b056de0511f9932f88eea11ba619f3ba2db984da6af2dbfa7bbd4a1faf7f621_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Registration:parent.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  174 => 77,  168 => 74,  164 => 73,  157 => 69,  153 => 68,  146 => 64,  142 => 63,  135 => 59,  131 => 58,  127 => 56,  121 => 48,  117 => 47,  113 => 45,  107 => 37,  103 => 36,  96 => 32,  92 => 31,  86 => 28,  82 => 27,  62 => 10,  59 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    Création de compte parent - {{ parent() }}
{% endblock %}

{% block fos_user_content %}
    {% trans_default_domain 'FOSUserBundle' %}
    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('{{asset('images/hero-header/2.1.jpg') }}');\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1\">
                                <div class=\"left\">
                                        <h3 class=\"hero-title-register\">Créez un compte apprenant<br> </h3><h4 class=\"hero-subtitle-register\">Et faites grandir vos élèves.</h4>
                                        <p class=\"lead-register\">
                                        Créez un compte apprenant et recherchez immédiatement un prof près de chez vous pour prendre un cours de votre choix.</p>
                                </div>

                        </div>
                        <div class=\"col-sm-3 col-md-offset-1 col-sm-offset-1 col-md-3\">
                                
                            
                            <form action=\"{{ path('lgp_parent_registration') }}\" method=\"POST\">
                                {{ form_errors(form) }}

                                <div class=\"form-group\">
                                  {{ form_widget(form.nom, {'attr': {'placeholder':'Nom','class':'form-control'}}) }}
                                  {{ form_errors(form.nom) }}
                                </div>

                                <div class=\"form-group\">
                                  {{ form_widget(form.prenoms, {'attr': {'placeholder':'Prénoms','class':'form-control'}}) }}
                                  {{ form_errors(form.prenoms) }}
                                </div>

                                {#<div class=\"form-group\">
                                  {{ form_label(form.dateNaissance, \"Date de naissance\", {'label_attr': {}}) }}
                                  {{ form_widget(form.dateNaissance, {'attr': {}}) }}
                                  {{ form_errors(form.dateNaissance) }}
                                </div>#}

                                <div class=\"form-group\">
                                  {{ form_widget(form.sexe, {'attr': {'class':'form-control'}}) }}
                                  {{ form_errors(form.sexe) }}
                                </div>

                                {#<div class=\"form-group\">
                                  {{ form_label(form.telephone, \"Numéro de téléphone\", {'label_attr': {}}) }}
                                  {{ form_widget(form.telephone, {'attr': {}}) }}
                                  {{ form_errors(form.telephone) }}
                                </div>#}

                                <div class=\"form-group\">
                                  {{ form_widget(form.pays, {'attr': {'class':'form-control'}}) }}
                                  {{ form_errors(form.pays) }}
                                </div>

                                <div class=\"form-group\">
                                  {{ form_widget(form.email, {'attr': {'placeholder':'Adresse email','class':'form-control'}}) }}
                                  {{ form_errors(form.email) }}
                                </div>

                                <div class=\"form-group\">
                                  {{ form_widget(form.plainPassword.children['first'], {'attr': {'placeholder':'Mot de passe','class':'form-control'}}) }}
                                  {{ form_errors(form.plainPassword) }}
                                </div>
                                
                                <div class=\"form-group\">
                                  {{ form_widget(form.plainPassword.children['second'], {'attr': {'placeholder':'Confirmation Mot de passe','class':'form-control'}}) }}
                                  {{ form_errors(form.plainPassword) }}
                                </div>

                                {{ form_rest(form) }}
                                <div>
                                    <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn btn-primary\"/>
                                </div>
                            </form>
                        </div>

                </div>

        </div>

    </div>
    <!-- end hero-header with windows height -->
    
{% endblock fos_user_content %}";
    }
}
