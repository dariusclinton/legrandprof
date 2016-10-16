<?php

/* LGPUserBundle:Dashboard:parent.html.twig */
class __TwigTemplate_d051f76fe0b38e4d4d887424458e892ec017663cf96268b1398ae9f7a4d29c79 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
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
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()))) {
            // line 20
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
              ";
        } else {
            // line 22
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
            echo "\" alt=\"image utilisateur\" class=\"img-responsive\"/>
              ";
        }
        // line 24
        echo "            </div>
            <div class=\"infos-block\">
              <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
              <p>
                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
              </p>
              <center><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
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
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Compléter votre profil</a></div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

";
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
        return array (  114 => 52,  90 => 31,  80 => 26,  76 => 24,  70 => 22,  64 => 20,  62 => 19,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
