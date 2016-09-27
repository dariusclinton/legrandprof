<?php

/* LGPUserBundle:Registration:prof.form.html.twig */
class __TwigTemplate_1b9f254cbca8400cb130d4eb7ab9c052de25d6859e2768d77942d0af52ffb1c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Registration:prof.form.html.twig", 1);
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
        $__internal_e3d2b5c2e8eb3df5f81f700be1592b25d6ed0d324db28c4282e42b7b828aec96 = $this->env->getExtension("native_profiler");
        $__internal_e3d2b5c2e8eb3df5f81f700be1592b25d6ed0d324db28c4282e42b7b828aec96->enter($__internal_e3d2b5c2e8eb3df5f81f700be1592b25d6ed0d324db28c4282e42b7b828aec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:prof.form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d2b5c2e8eb3df5f81f700be1592b25d6ed0d324db28c4282e42b7b828aec96->leave($__internal_e3d2b5c2e8eb3df5f81f700be1592b25d6ed0d324db28c4282e42b7b828aec96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6f6a64c1c76aa68c640ce1cae3953c7f0c4cdeab799b42b2602e689f3c3d614 = $this->env->getExtension("native_profiler");
        $__internal_c6f6a64c1c76aa68c640ce1cae3953c7f0c4cdeab799b42b2602e689f3c3d614->enter($__internal_c6f6a64c1c76aa68c640ce1cae3953c7f0c4cdeab799b42b2602e689f3c3d614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Création de compte prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c6f6a64c1c76aa68c640ce1cae3953c7f0c4cdeab799b42b2602e689f3c3d614->leave($__internal_c6f6a64c1c76aa68c640ce1cae3953c7f0c4cdeab799b42b2602e689f3c3d614_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2318e61bab0a1324524e49341ccfa4643330d49842cac65bf1eda8913f237223 = $this->env->getExtension("native_profiler");
        $__internal_2318e61bab0a1324524e49341ccfa4643330d49842cac65bf1eda8913f237223->enter($__internal_2318e61bab0a1324524e49341ccfa4643330d49842cac65bf1eda8913f237223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/01.1.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1\">
                                <div class=\"left\">
                                        <h3 class=\"hero-title-register\">Devenez un grand prof<br> </h3><h4 class=\"hero-subtitle-register\">Et faites grandir vos élèves.</h4>
                                        <p class=\"lead-register\">
                                        Tout le monde a quelque chose à partager ou à enseigner.
                                        Chez Legrandprof vous pouvez donner des cours particuliers dans des tonnes matières (langues, sports, musique, arts, loisirs, soutien scolaire).</p>
                                </div>

                        </div>
                        <div class=\"col-sm-3 col-md-offset-1 col-sm-offset-1 col-md-3\">
                                
                            
                            <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("lgp_prof_registration");
        echo "\" method=\"POST\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                                <div class=\"form-group\">
                                  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom")));
        echo "
                                  ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'widget', array("attr" => array("placeholder" => "Prénoms")));
        echo "
                                  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 45
        echo "
                                <div class=\"form-group\">
                                  ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array()));
        echo "
                                  ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
                                </div>

                               ";
        // line 56
        echo "
                                <div class=\"form-group\">
                                 ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array()));
        echo "
                                  ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Adresse email")));
        echo "
                                  ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe")));
        echo "
                                  ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                <div>
                                    <input type=\"submit\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrez"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </form>
                        </div>

                </div>

        </div>

    </div>
    <!-- end hero-header with windows height -->

    <div class=\"post-hero bg-light\" style=\"margin-top:60px;margin-bottom:60px;\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"><i class=\"pe-7s-world\"></i></div>
                                        <div class=\"content\">
                                                <h6>Enseignez à un plus grand nombre</h6>
                                                <span>Selon votre expérience et votre disponibilité, partagez vos connaissances avec un grand nombre !</span>
                                        </div>
                                </div>
                        </div>

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"> <i class=\"pe-7s-map-marker\"></i></div>
                                        <div class=\"content\">
                                                <h6>Près de chez vous</h6>
                                                <span>Vous ne recevrez que des demandes de personnes près de chez vous.</span>
                                        </div>
                                </div>
                        </div>

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"> <i class=\"pe-7s-cash\"></i></div>
                                        <div class=\"content\">
                                                <h6>En fixant votre prix</h6>
                                                <span> Fixez vos prix pour chaque matière et pack de matières !</span>
                                        </div>
                                </div>
                        </div>

                </div>

        </div>

    </div>
    
    
    
    ";
        // line 131
        echo "
    
";
        
        $__internal_2318e61bab0a1324524e49341ccfa4643330d49842cac65bf1eda8913f237223->leave($__internal_2318e61bab0a1324524e49341ccfa4643330d49842cac65bf1eda8913f237223_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Registration:prof.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 131,  167 => 74,  162 => 72,  156 => 69,  152 => 68,  145 => 64,  141 => 63,  134 => 59,  130 => 58,  126 => 56,  120 => 48,  116 => 47,  112 => 45,  106 => 37,  102 => 36,  95 => 32,  91 => 31,  85 => 28,  81 => 27,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    Création de compte prof - {{ parent() }}
{% endblock %}

{% block fos_user_content %}
    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('{{asset('images/hero-header/01.1.jpg') }}');\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1\">
                                <div class=\"left\">
                                        <h3 class=\"hero-title-register\">Devenez un grand prof<br> </h3><h4 class=\"hero-subtitle-register\">Et faites grandir vos élèves.</h4>
                                        <p class=\"lead-register\">
                                        Tout le monde a quelque chose à partager ou à enseigner.
                                        Chez Legrandprof vous pouvez donner des cours particuliers dans des tonnes matières (langues, sports, musique, arts, loisirs, soutien scolaire).</p>
                                </div>

                        </div>
                        <div class=\"col-sm-3 col-md-offset-1 col-sm-offset-1 col-md-3\">
                                
                            
                            <form action=\"{{ path('lgp_prof_registration') }}\" method=\"POST\">
                                {{ form_errors(form) }}

                                <div class=\"form-group\">
                                  {{ form_widget(form.nom, {'attr': {'placeholder':'Nom'}}) }}
                                  {{ form_errors(form.nom) }}
                                </div>

                                <div class=\"form-group\">
                                  {{ form_widget(form.prenoms, {'attr': {'placeholder':'Prénoms'}}) }}
                                  {{ form_errors(form.prenoms) }}
                                </div>

                                {#<div class=\"form-group\">
                                  {{ form_label(form.dateNaissance, \"Date de naissance\", {'label_attr': {}}) }}
                                  {{ form_widget(form.dateNaissance, {'attr': {}}) }}
                                  {{ form_errors(form.dateNaissance) }}
                                </div>#}

                                <div class=\"form-group\">
                                  {{ form_widget(form.sexe, {'attr': {}}) }}
                                  {{ form_errors(form.sexe) }}
                                </div>

                               {# <div class=\"form-group\">
                                  {{ form_label(form.numTelephone, \"Numéro de téléphone\", {'label_attr': {}}) }}
                                  {{ form_widget(form.numTelephone, {'attr': {}}) }}
                                  {{ form_errors(form.numTelephone) }}
                                </div>#}

                                <div class=\"form-group\">
                                 {{ form_widget(form.pays, {'attr': {}}) }}
                                  {{ form_errors(form.pays) }}
                                </div>

                                <div class=\"form-group\">
                                  {{ form_widget(form.email, {'attr': {'placeholder':'Adresse email'}}) }}
                                  {{ form_errors(form.email) }}
                                </div>

                                <div class=\"form-group\">
                                  {{ form_widget(form.plainPassword, {'attr': {'placeholder':'Mot de passe'}}) }}
                                  {{ form_errors(form.plainPassword) }}
                                </div>

                                {{ form_rest(form) }}
                                <div>
                                    <input type=\"submit\" value=\"{{ 'Enregistrez'|trans }}\" class=\"btn btn-primary\"/>
                                </div>
                            </form>
                        </div>

                </div>

        </div>

    </div>
    <!-- end hero-header with windows height -->

    <div class=\"post-hero bg-light\" style=\"margin-top:60px;margin-bottom:60px;\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"><i class=\"pe-7s-world\"></i></div>
                                        <div class=\"content\">
                                                <h6>Enseignez à un plus grand nombre</h6>
                                                <span>Selon votre expérience et votre disponibilité, partagez vos connaissances avec un grand nombre !</span>
                                        </div>
                                </div>
                        </div>

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"> <i class=\"pe-7s-map-marker\"></i></div>
                                        <div class=\"content\">
                                                <h6>Près de chez vous</h6>
                                                <span>Vous ne recevrez que des demandes de personnes près de chez vous.</span>
                                        </div>
                                </div>
                        </div>

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"> <i class=\"pe-7s-cash\"></i></div>
                                        <div class=\"content\">
                                                <h6>En fixant votre prix</h6>
                                                <span> Fixez vos prix pour chaque matière et pack de matières !</span>
                                        </div>
                                </div>
                        </div>

                </div>

        </div>

    </div>
    
    
    
    {% trans_default_domain 'FOSUserBundle' %}

    
{% endblock fos_user_content %}";
    }
}
