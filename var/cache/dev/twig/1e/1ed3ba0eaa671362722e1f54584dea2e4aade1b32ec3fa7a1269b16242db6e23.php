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
        $__internal_a19dc4864bc6c42f8024b44a3acfa336a3a0d9fed43d45de9e5e276e189df47a = $this->env->getExtension("native_profiler");
        $__internal_a19dc4864bc6c42f8024b44a3acfa336a3a0d9fed43d45de9e5e276e189df47a->enter($__internal_a19dc4864bc6c42f8024b44a3acfa336a3a0d9fed43d45de9e5e276e189df47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Dashboard:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19dc4864bc6c42f8024b44a3acfa336a3a0d9fed43d45de9e5e276e189df47a->leave($__internal_a19dc4864bc6c42f8024b44a3acfa336a3a0d9fed43d45de9e5e276e189df47a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70ee0505ba8ca9a383f2f4db6539362b8bf1cd06833b0e5863f0e4e5e9f167b6 = $this->env->getExtension("native_profiler");
        $__internal_70ee0505ba8ca9a383f2f4db6539362b8bf1cd06833b0e5863f0e4e5e9f167b6->enter($__internal_70ee0505ba8ca9a383f2f4db6539362b8bf1cd06833b0e5863f0e4e5e9f167b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_70ee0505ba8ca9a383f2f4db6539362b8bf1cd06833b0e5863f0e4e5e9f167b6->leave($__internal_70ee0505ba8ca9a383f2f4db6539362b8bf1cd06833b0e5863f0e4e5e9f167b6_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_dc8f0bdfc442c5d57a47a7c98b475fc1a86509226ec69eb8f2df6d83b82986e1 = $this->env->getExtension("native_profiler");
        $__internal_dc8f0bdfc442c5d57a47a7c98b475fc1a86509226ec69eb8f2df6d83b82986e1->enter($__internal_dc8f0bdfc442c5d57a47a7c98b475fc1a86509226ec69eb8f2df6d83b82986e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_dc8f0bdfc442c5d57a47a7c98b475fc1a86509226ec69eb8f2df6d83b82986e1->leave($__internal_dc8f0bdfc442c5d57a47a7c98b475fc1a86509226ec69eb8f2df6d83b82986e1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbe00ea5256161732feca9cf671043dd17640097659e73e35dacc57cadb67e98 = $this->env->getExtension("native_profiler");
        $__internal_bbe00ea5256161732feca9cf671043dd17640097659e73e35dacc57cadb67e98->enter($__internal_bbe00ea5256161732feca9cf671043dd17640097659e73e35dacc57cadb67e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                Hello Prof !
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
        
        $__internal_bbe00ea5256161732feca9cf671043dd17640097659e73e35dacc57cadb67e98->leave($__internal_bbe00ea5256161732feca9cf671043dd17640097659e73e35dacc57cadb67e98_prof);

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
                Hello Prof !
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
