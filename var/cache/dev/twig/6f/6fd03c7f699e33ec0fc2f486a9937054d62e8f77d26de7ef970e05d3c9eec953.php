<?php

/* LGPUserBundle:Dashboard:parent.html.twig */
class __TwigTemplate_12f4227aa99951368c5d4f7bed1c9677dc18c9c9cee8f5ec7c176b0dfc219981 extends Twig_Template
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
        $__internal_3bafe87b41993253eef0fe4229acbda6c79fd9e8918904fc43feaf6f73323c87 = $this->env->getExtension("native_profiler");
        $__internal_3bafe87b41993253eef0fe4229acbda6c79fd9e8918904fc43feaf6f73323c87->enter($__internal_3bafe87b41993253eef0fe4229acbda6c79fd9e8918904fc43feaf6f73323c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Dashboard:parent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bafe87b41993253eef0fe4229acbda6c79fd9e8918904fc43feaf6f73323c87->leave($__internal_3bafe87b41993253eef0fe4229acbda6c79fd9e8918904fc43feaf6f73323c87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d3ae54282ce3265d516bfd7757c9eb261824248cb9b2f52991b7f1d81c896bf = $this->env->getExtension("native_profiler");
        $__internal_1d3ae54282ce3265d516bfd7757c9eb261824248cb9b2f52991b7f1d81c896bf->enter($__internal_1d3ae54282ce3265d516bfd7757c9eb261824248cb9b2f52991b7f1d81c896bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1d3ae54282ce3265d516bfd7757c9eb261824248cb9b2f52991b7f1d81c896bf->leave($__internal_1d3ae54282ce3265d516bfd7757c9eb261824248cb9b2f52991b7f1d81c896bf_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9ef3f1c8e3df89ebd76980c2ff9ac54ef2f8255e81c25f3ed5618ff301dd1013 = $this->env->getExtension("native_profiler");
        $__internal_9ef3f1c8e3df89ebd76980c2ff9ac54ef2f8255e81c25f3ed5618ff301dd1013->enter($__internal_9ef3f1c8e3df89ebd76980c2ff9ac54ef2f8255e81c25f3ed5618ff301dd1013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9ef3f1c8e3df89ebd76980c2ff9ac54ef2f8255e81c25f3ed5618ff301dd1013->leave($__internal_9ef3f1c8e3df89ebd76980c2ff9ac54ef2f8255e81c25f3ed5618ff301dd1013_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5195044f834efb43ea7271a32c76e51bfee20b002f44d0faa07fcf0a17f5b244 = $this->env->getExtension("native_profiler");
        $__internal_5195044f834efb43ea7271a32c76e51bfee20b002f44d0faa07fcf0a17f5b244->enter($__internal_5195044f834efb43ea7271a32c76e51bfee20b002f44d0faa07fcf0a17f5b244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
              ";
        }
        // line 22
        echo "            </div>
            <div class=\"infos-block\">
              <h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
              <p>
                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
              </p>
              <center><a href=\"";
        // line 29
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
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Compléter votre profil</a></div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_5195044f834efb43ea7271a32c76e51bfee20b002f44d0faa07fcf0a17f5b244->leave($__internal_5195044f834efb43ea7271a32c76e51bfee20b002f44d0faa07fcf0a17f5b244_prof);

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
        return array (  129 => 50,  105 => 29,  95 => 24,  91 => 22,  85 => 20,  83 => 19,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
