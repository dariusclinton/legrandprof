<?php

/* LGPUserBundle:Dashboard:prof.html.twig */
class __TwigTemplate_234b80c02273b8b6cc30b53913500bb5266b453031760026452a9a98670a3686 extends Twig_Template
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
        $__internal_23a598758a4bcd14b52728f0cdbde98274fb3f6e768b85eaa98727fbcf6ee668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a598758a4bcd14b52728f0cdbde98274fb3f6e768b85eaa98727fbcf6ee668->enter($__internal_23a598758a4bcd14b52728f0cdbde98274fb3f6e768b85eaa98727fbcf6ee668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Dashboard:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a598758a4bcd14b52728f0cdbde98274fb3f6e768b85eaa98727fbcf6ee668->leave($__internal_23a598758a4bcd14b52728f0cdbde98274fb3f6e768b85eaa98727fbcf6ee668_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_228b875d9b0504c35c350d8be42e61e675a0107c70760593146008a760e72296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228b875d9b0504c35c350d8be42e61e675a0107c70760593146008a760e72296->enter($__internal_228b875d9b0504c35c350d8be42e61e675a0107c70760593146008a760e72296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_228b875d9b0504c35c350d8be42e61e675a0107c70760593146008a760e72296->leave($__internal_228b875d9b0504c35c350d8be42e61e675a0107c70760593146008a760e72296_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e6d956968d72683f7d94ba8e59c8b94e21ec107c2c651c3a1b034e57043220e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d956968d72683f7d94ba8e59c8b94e21ec107c2c651c3a1b034e57043220e9->enter($__internal_e6d956968d72683f7d94ba8e59c8b94e21ec107c2c651c3a1b034e57043220e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e6d956968d72683f7d94ba8e59c8b94e21ec107c2c651c3a1b034e57043220e9->leave($__internal_e6d956968d72683f7d94ba8e59c8b94e21ec107c2c651c3a1b034e57043220e9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a0c84be87ca52dda926cfed27689b92793d27aa058e638c74e9d276d01e7d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0c84be87ca52dda926cfed27689b92793d27aa058e638c74e9d276d01e7d83->enter($__internal_1a0c84be87ca52dda926cfed27689b92793d27aa058e638c74e9d276d01e7d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
                            ";
        } else {
            // line 22
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">Compléter
                                    profil</a><br><br>
                                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-primary btn-sm\">Modifier le mot
                                    de passe</a>
                                </center>

                        </div>
                    </div>

                    <div class=\"col-md-9\">
                        <div class=\"alert alert-warning\">
                            <b>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avanceeProfil", array()), "html", null, true);
        echo "% de remplissage du profil</b><br>
                            <p>Veuillez compléter votre profil pour être le plus sollicité par les apprenants/parents</p>
                        </div>
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
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Compléter votre profil</a></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_1a0c84be87ca52dda926cfed27689b92793d27aa058e638c74e9d276d01e7d83->leave($__internal_1a0c84be87ca52dda926cfed27689b92793d27aa058e638c74e9d276d01e7d83_prof);

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
        return array (  150 => 61,  129 => 43,  117 => 34,  112 => 32,  102 => 27,  98 => 25,  91 => 22,  85 => 20,  83 => 19,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
                                    profil</a><br><br>
                                <a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-primary btn-sm\">Modifier le mot
                                    de passe</a>
                                </center>

                        </div>
                    </div>

                    <div class=\"col-md-9\">
                        <div class=\"alert alert-warning\">
                            <b>{{ app.user.avanceeProfil }}% de remplissage du profil</b><br>
                            <p>Veuillez compléter votre profil pour être le plus sollicité par les apprenants/parents</p>
                        </div>
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
