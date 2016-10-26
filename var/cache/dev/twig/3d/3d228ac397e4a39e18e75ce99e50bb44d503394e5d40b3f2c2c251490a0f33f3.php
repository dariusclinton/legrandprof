<?php

/* LGPUserBundle:Dashboard:parent.html.twig */
class __TwigTemplate_820cf8bca249fb4ae79fb0990030f5686078777e5c9b5172b1534c99a6b5d9dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Dashboard:parent.html.twig", 1);
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
        $__internal_6601dcc780384db43258184c8a18d9f15b2a30dd6fc0111eaa1bd7a116a8c060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6601dcc780384db43258184c8a18d9f15b2a30dd6fc0111eaa1bd7a116a8c060->enter($__internal_6601dcc780384db43258184c8a18d9f15b2a30dd6fc0111eaa1bd7a116a8c060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Dashboard:parent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6601dcc780384db43258184c8a18d9f15b2a30dd6fc0111eaa1bd7a116a8c060->leave($__internal_6601dcc780384db43258184c8a18d9f15b2a30dd6fc0111eaa1bd7a116a8c060_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd9565c9d3be78612fe433e3e2ab9e096e7858774c5e71af20393118db6efea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd9565c9d3be78612fe433e3e2ab9e096e7858774c5e71af20393118db6efea->enter($__internal_9bd9565c9d3be78612fe433e3e2ab9e096e7858774c5e71af20393118db6efea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9bd9565c9d3be78612fe433e3e2ab9e096e7858774c5e71af20393118db6efea->leave($__internal_9bd9565c9d3be78612fe433e3e2ab9e096e7858774c5e71af20393118db6efea_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f7981859fec4d87979f13b8f3e8636d8580b0cdc5c9a08cbcd2cff6856d7bb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7981859fec4d87979f13b8f3e8636d8580b0cdc5c9a08cbcd2cff6856d7bb0e->enter($__internal_f7981859fec4d87979f13b8f3e8636d8580b0cdc5c9a08cbcd2cff6856d7bb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f7981859fec4d87979f13b8f3e8636d8580b0cdc5c9a08cbcd2cff6856d7bb0e->leave($__internal_f7981859fec4d87979f13b8f3e8636d8580b0cdc5c9a08cbcd2cff6856d7bb0e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_328ec6c016e0b3eac913f3852b0d54019a175218fc2212122e87758b73c82e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328ec6c016e0b3eac913f3852b0d54019a175218fc2212122e87758b73c82e55->enter($__internal_328ec6c016e0b3eac913f3852b0d54019a175218fc2212122e87758b73c82e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
              ";
        } else {
            // line 22
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
            echo "\" alt=\"image utilisateur\" class=\"img-responsive\"/>
              ";
        }
        // line 24
        echo "            </div>
            <div class=\"infos-block\">
              <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
              <p>
                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
              </p>
              <center><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">Compléter profil</a>

            </div>
          </div>

          <div class=\"col-md-9\">

            <div class=\"notifications-block\">
              <div class=\"notifications-header\">
                Hello Parent !
              </div>
            </div>
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Recommandation</div>
              <div class=\"notifications-content\">Vous n'avez pas encore obtenu de recommandations. Sollicitez vos amis
                pour en obtenir dès à présent.
              </div>
            </div>
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Votre profil</div>
              <div class=\"notifications-content\">Votre profil est incomplet, veuillez <a
                    href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Compléter votre profil</a></div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_328ec6c016e0b3eac913f3852b0d54019a175218fc2212122e87758b73c82e55->leave($__internal_328ec6c016e0b3eac913f3852b0d54019a175218fc2212122e87758b73c82e55_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Dashboard:parent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  111 => 31,  101 => 26,  97 => 24,  91 => 22,  85 => 20,  83 => 19,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
                <img src=\"{{ asset('uploads/profils/default.png') }}\" alt=\"image utilisateur\" class=\"img-responsive\"/>
              {% endif %}
            </div>
            <div class=\"infos-block\">
              <h2>{{ app.user.prenoms }} {{ app.user.nom }}</h2>
              <p>
                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
              </p>
              <center><a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-primary\">Compléter profil</a>

            </div>
          </div>

          <div class=\"col-md-9\">

            <div class=\"notifications-block\">
              <div class=\"notifications-header\">
                Hello Parent !
              </div>
            </div>
            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Recommandation</div>
              <div class=\"notifications-content\">Vous n'avez pas encore obtenu de recommandations. Sollicitez vos amis
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
