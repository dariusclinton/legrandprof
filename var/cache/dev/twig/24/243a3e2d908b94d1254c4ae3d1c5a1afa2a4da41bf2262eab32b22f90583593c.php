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
        $__internal_752a93b61d1998fe98babad494f60471a6b61358093ec2371d32728d6a17f5f5 = $this->env->getExtension("native_profiler");
        $__internal_752a93b61d1998fe98babad494f60471a6b61358093ec2371d32728d6a17f5f5->enter($__internal_752a93b61d1998fe98babad494f60471a6b61358093ec2371d32728d6a17f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Registration:prof.form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752a93b61d1998fe98babad494f60471a6b61358093ec2371d32728d6a17f5f5->leave($__internal_752a93b61d1998fe98babad494f60471a6b61358093ec2371d32728d6a17f5f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1016bfc3514653593afeb1597345993c41f06a73aa2b383003e0a2552b0e1a9 = $this->env->getExtension("native_profiler");
        $__internal_e1016bfc3514653593afeb1597345993c41f06a73aa2b383003e0a2552b0e1a9->enter($__internal_e1016bfc3514653593afeb1597345993c41f06a73aa2b383003e0a2552b0e1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Création de compte prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e1016bfc3514653593afeb1597345993c41f06a73aa2b383003e0a2552b0e1a9->leave($__internal_e1016bfc3514653593afeb1597345993c41f06a73aa2b383003e0a2552b0e1a9_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6790b56dba8a0fc29bd44b49ab57a53adc0d6a26618d83761856094cac3c5239 = $this->env->getExtension("native_profiler");
        $__internal_6790b56dba8a0fc29bd44b49ab57a53adc0d6a26618d83761856094cac3c5239->enter($__internal_6790b56dba8a0fc29bd44b49ab57a53adc0d6a26618d83761856094cac3c5239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    ";
        // line 9
        echo "    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('";
        // line 10
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
        // line 28
        echo $this->env->getExtension('routing')->getPath("lgp_prof_registration");
        echo "\" method=\"POST\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                                <div class=\"form-group\">
                                  ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom", "class" => "form-control")));
        echo "
                                  ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'widget', array("attr" => array("placeholder" => "Prénoms", "class" => "form-control")));
        echo "
                                  ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 46
        echo "
                                <div class=\"form-group\">
                                  ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
                                </div>

                               ";
        // line 57
        echo "
                                <div class=\"form-group\">
                                 ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Adresse email", "class" => "form-control")));
        echo "
                                  ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "children", array()), "first", array(), "array"), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
        echo "
                                  ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
                                </div>
                                
                                <div class=\"form-group\">
                                  ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "children", array()), "second", array(), "array"), 'widget', array("attr" => array("placeholder" => "Confirmation Mot de passe", "class" => "form-control")));
        echo "
                                  ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                <div>
                                    <input type=\"submit\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enregistrez", array(), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_6790b56dba8a0fc29bd44b49ab57a53adc0d6a26618d83761856094cac3c5239->leave($__internal_6790b56dba8a0fc29bd44b49ab57a53adc0d6a26618d83761856094cac3c5239_prof);

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
        return array (  180 => 80,  175 => 78,  169 => 75,  165 => 74,  158 => 70,  154 => 69,  147 => 65,  143 => 64,  136 => 60,  132 => 59,  128 => 57,  122 => 49,  118 => 48,  114 => 46,  108 => 38,  104 => 37,  97 => 33,  93 => 32,  87 => 29,  83 => 28,  62 => 10,  59 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    Création de compte prof - {{ parent() }}
{% endblock %}

{% block fos_user_content %}
    {% trans_default_domain 'FOSUserBundle' %}
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

                               {# <div class=\"form-group\">
                                  {{ form_label(form.numTelephone, \"Numéro de téléphone\", {'label_attr': {}}) }}
                                  {{ form_widget(form.numTelephone, {'attr': {}}) }}
                                  {{ form_errors(form.numTelephone) }}
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
    
    
    

    
{% endblock fos_user_content %}";
    }
}
