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
        $__internal_397d8665429f3f2b2ab2fd1eadff7fa226803ed15d1c4eea44dfda373eaa93d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397d8665429f3f2b2ab2fd1eadff7fa226803ed15d1c4eea44dfda373eaa93d5->enter($__internal_397d8665429f3f2b2ab2fd1eadff7fa226803ed15d1c4eea44dfda373eaa93d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Dashboard:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397d8665429f3f2b2ab2fd1eadff7fa226803ed15d1c4eea44dfda373eaa93d5->leave($__internal_397d8665429f3f2b2ab2fd1eadff7fa226803ed15d1c4eea44dfda373eaa93d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48c44e788f726cb7fa7a1b0a0b04e0c459d81878361a1097c50fbbce2fba3f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c44e788f726cb7fa7a1b0a0b04e0c459d81878361a1097c50fbbce2fba3f07->enter($__internal_48c44e788f726cb7fa7a1b0a0b04e0c459d81878361a1097c50fbbce2fba3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_48c44e788f726cb7fa7a1b0a0b04e0c459d81878361a1097c50fbbce2fba3f07->leave($__internal_48c44e788f726cb7fa7a1b0a0b04e0c459d81878361a1097c50fbbce2fba3f07_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_41a84f0f1378410568b5fad2c654ba68dabb93f077a836679750545b3b01b826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a84f0f1378410568b5fad2c654ba68dabb93f077a836679750545b3b01b826->enter($__internal_41a84f0f1378410568b5fad2c654ba68dabb93f077a836679750545b3b01b826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_41a84f0f1378410568b5fad2c654ba68dabb93f077a836679750545b3b01b826->leave($__internal_41a84f0f1378410568b5fad2c654ba68dabb93f077a836679750545b3b01b826_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c1a4b99b12140f6048e6b541247e697e7c2375e8a785b34174272b09700a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c1a4b99b12140f6048e6b541247e697e7c2375e8a785b34174272b09700a45->enter($__internal_a9c1a4b99b12140f6048e6b541247e697e7c2375e8a785b34174272b09700a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Compléter votre profil</a></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_a9c1a4b99b12140f6048e6b541247e697e7c2375e8a785b34174272b09700a45->leave($__internal_a9c1a4b99b12140f6048e6b541247e697e7c2375e8a785b34174272b09700a45_prof);

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
