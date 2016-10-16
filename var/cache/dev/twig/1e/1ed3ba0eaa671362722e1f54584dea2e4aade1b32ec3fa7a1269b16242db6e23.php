<?php

/* LGPUserBundle:Dashboard:prof.html.twig */
class __TwigTemplate_d35195c8b1c4b364d81028ecc014421b003b7daa004ac7b4eabf047235f15169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Dashboard:prof.html.twig", 1);
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
        $__internal_00e0673341cebee86ea8f0b94c2c3672c4f9b167a207dc79f41dad8a20dd29c3 = $this->env->getExtension("native_profiler");
        $__internal_00e0673341cebee86ea8f0b94c2c3672c4f9b167a207dc79f41dad8a20dd29c3->enter($__internal_00e0673341cebee86ea8f0b94c2c3672c4f9b167a207dc79f41dad8a20dd29c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Dashboard:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e0673341cebee86ea8f0b94c2c3672c4f9b167a207dc79f41dad8a20dd29c3->leave($__internal_00e0673341cebee86ea8f0b94c2c3672c4f9b167a207dc79f41dad8a20dd29c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_083d9b2a5bebbe8835d682e032b53aac9272b373622858b4be81e446b550aaaa = $this->env->getExtension("native_profiler");
        $__internal_083d9b2a5bebbe8835d682e032b53aac9272b373622858b4be81e446b550aaaa->enter($__internal_083d9b2a5bebbe8835d682e032b53aac9272b373622858b4be81e446b550aaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_083d9b2a5bebbe8835d682e032b53aac9272b373622858b4be81e446b550aaaa->leave($__internal_083d9b2a5bebbe8835d682e032b53aac9272b373622858b4be81e446b550aaaa_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_7a5427aba52d32bc0a8c4490b6c7f4488fd188c617db11386084626a094e4ffd = $this->env->getExtension("native_profiler");
        $__internal_7a5427aba52d32bc0a8c4490b6c7f4488fd188c617db11386084626a094e4ffd->enter($__internal_7a5427aba52d32bc0a8c4490b6c7f4488fd188c617db11386084626a094e4ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_7a5427aba52d32bc0a8c4490b6c7f4488fd188c617db11386084626a094e4ffd->leave($__internal_7a5427aba52d32bc0a8c4490b6c7f4488fd188c617db11386084626a094e4ffd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_93541a14070e781e8ba2d6123f2b2f1591b537773c92155e369a6890afb7dcbe = $this->env->getExtension("native_profiler");
        $__internal_93541a14070e781e8ba2d6123f2b2f1591b537773c92155e369a6890afb7dcbe->enter($__internal_93541a14070e781e8ba2d6123f2b2f1591b537773c92155e369a6890afb7dcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"profile-block\">
                            ";
        // line 19
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 20
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
                            ";
        } else {
            // line 22
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
            echo "\" alt=\"image utilisateur\"
                                     class=\"img-responsive\"/>
                            ";
        }
        // line 25
        echo "                        </div>
                        <div class=\"infos-block\">
                            <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
                            <p>
                                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
                            </p>
                            <center><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">Compléter
                                    profil</a>

                        </div>
                    </div>

                    <div class=\"col-md-9\">

                        <div class=\"notifications-block\">
                            <div class=\"notifications-header\">
                                Hello Prof !
                            </div>
                        </div>
                        <div class=\"notifications-block\">
                            <div class=\"notifications-header\">Recommandation</div>
                            <div class=\"notifications-content\">Vous n'avez pas encore obtenu de recommandations.
                                Sollicitez vos amis
                                pour en obtenir dès à présent.
                            </div>
                        </div>
                        <div class=\"notifications-block\">
                            <div class=\"notifications-header\">Votre profil</div>
                            <div class=\"notifications-content\">Votre profil est incomplet, veuillez <a
                                        href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Compléter votre profil</a></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_93541a14070e781e8ba2d6123f2b2f1591b537773c92155e369a6890afb7dcbe->leave($__internal_93541a14070e781e8ba2d6123f2b2f1591b537773c92155e369a6890afb7dcbe_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Dashboard:prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 55,  112 => 32,  102 => 27,  98 => 25,  91 => 22,  85 => 20,  83 => 19,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    Mon Tableau de bord - {{ parent() }}
{% endblock %}

{% block header_submenu %}
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"profile-block\">
                            {% if app.user.image is not null %}
                                <img src=\"{{ asset(app.user.image.webPath) }}\" class=\"img-responsive\">
                            {% else %}
                                <img src=\"{{ asset('uploads/profils/default.png') }}\" alt=\"image utilisateur\"
                                     class=\"img-responsive\"/>
                            {% endif %}
                        </div>
                        <div class=\"infos-block\">
                            <h2>{{ app.user.prenoms }} {{ app.user.nom }}</h2>
                            <p>
                                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
                            </p>
                            <center><a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-primary\">Compléter
                                    profil</a>

                        </div>
                    </div>

                    <div class=\"col-md-9\">

                        <div class=\"notifications-block\">
                            <div class=\"notifications-header\">
                                Hello Prof !
                            </div>
                        </div>
                        <div class=\"notifications-block\">
                            <div class=\"notifications-header\">Recommandation</div>
                            <div class=\"notifications-content\">Vous n'avez pas encore obtenu de recommandations.
                                Sollicitez vos amis
                                pour en obtenir dès à présent.
                            </div>
                        </div>
                        <div class=\"notifications-block\">
                            <div class=\"notifications-header\">Votre profil</div>
                            <div class=\"notifications-content\">Votre profil est incomplet, veuillez <a
                                        href=\"{{ path('fos_user_profile_edit') }}\">Compléter votre profil</a></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}";
    }
}
