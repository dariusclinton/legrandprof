<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_87b42b4289b9127188ad56a317a45e7edd047fd3f9a6eeac32be128984a6991a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_791b250a07a422c92b69f9388f84ca7ad958221b2a24f8424a27317387bc7250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791b250a07a422c92b69f9388f84ca7ad958221b2a24f8424a27317387bc7250->enter($__internal_791b250a07a422c92b69f9388f84ca7ad958221b2a24f8424a27317387bc7250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_791b250a07a422c92b69f9388f84ca7ad958221b2a24f8424a27317387bc7250->leave($__internal_791b250a07a422c92b69f9388f84ca7ad958221b2a24f8424a27317387bc7250_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_997c2d7e25a45726ed13872de965bd7dc0a4ac52fa6fce2aec43a5893da100f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997c2d7e25a45726ed13872de965bd7dc0a4ac52fa6fce2aec43a5893da100f7->enter($__internal_997c2d7e25a45726ed13872de965bd7dc0a4ac52fa6fce2aec43a5893da100f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_997c2d7e25a45726ed13872de965bd7dc0a4ac52fa6fce2aec43a5893da100f7->leave($__internal_997c2d7e25a45726ed13872de965bd7dc0a4ac52fa6fce2aec43a5893da100f7_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f573cc8a1de320190c02e622544f3065993d9788298c1bb821aae904ece34f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f573cc8a1de320190c02e622544f3065993d9788298c1bb821aae904ece34f7f->enter($__internal_f573cc8a1de320190c02e622544f3065993d9788298c1bb821aae904ece34f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "  <div class=\"breadcrumb-wrapper bg-light-2\">

    <div class=\"container\">

      <ol class=\"breadcrumb-list booking-step\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo "\">Accueil</a></li>
        <li><span>Connexion</span></li>
      </ol>

    </div>
  </div>

  <div class=\"content-wrapper\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
          ";
        // line 27
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 30
        echo "
          <!-- Begin # Login Form -->
          <form  action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"margin-top:-30px;\">

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <div class=\"modal-body pb-5\">

              <h4 class=\"text-center heading mt-10 mb-20\">Connexion</h4>

              <div class=\"modal-seperator\">
              </div>

              <div class=\"form-group\"> 
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Entrez votre Email\"/>
              </div>
              <div class=\"form-group\"> 
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Entrez votre mot de passe\"/>
              </div>

              <div class=\"form-group\">
                <div class=\"row gap-5\">
                  <div class=\"col-xs-6 col-sm-6 col-md-6\">
                    <div class=\"checkbox-block fa-checkbox\"> 
                      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"checkbox\"/>
                      <label for=\"remember_me\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                  </div>
                  <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\"> 
                    <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn btn-link\">Mot de passe oublié ?</a>
                  </div>
                </div>
              </div>

            </div>

            <div class=\"modal-footer\">

              <div class=\"row gap-10\">
                <div class=\"col-xs-6 col-sm-6 mb-10\">
                  <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\"/>
                </div>
                <div class=\"col-xs-6 col-sm-6 mb-10\">
                  <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo "\" class=\"btn btn-primary btn-block btn-inverse\">Annuler</a>
                </div>
              </div><br>
              <div class=\"text-center\">
                Pas de compte ? Inscription <br>
                <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_parent_registration");
        echo "\" class=\"btn btn-link\">Je suis Parent/Apprenant</a> ou
                <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_prof_registration");
        echo "\" class=\"btn btn-link\">Je suis Prof</a>
              </div>

            </div>
          </form>
          <!-- End # Login Form -->
        </div>
      </div>

    </div>

  </div>

";
        
        $__internal_f573cc8a1de320190c02e622544f3065993d9788298c1bb821aae904ece34f7f->leave($__internal_f573cc8a1de320190c02e622544f3065993d9788298c1bb821aae904ece34f7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  158 => 78,  150 => 73,  144 => 70,  130 => 59,  123 => 55,  109 => 44,  96 => 34,  91 => 32,  87 => 30,  81 => 28,  79 => 27,  64 => 15,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPUserBundle::layout.html.twig' %}

{% block title %}
  Login - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
  <div class=\"breadcrumb-wrapper bg-light-2\">

    <div class=\"container\">

      <ol class=\"breadcrumb-list booking-step\">
        <li><a href=\"{{ path('lgp_core_homepage') }}\">Accueil</a></li>
        <li><span>Connexion</span></li>
      </ol>

    </div>
  </div>

  <div class=\"content-wrapper\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
          {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}

          <!-- Begin # Login Form -->
          <form  action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" style=\"margin-top:-30px;\">

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

            <div class=\"modal-body pb-5\">

              <h4 class=\"text-center heading mt-10 mb-20\">Connexion</h4>

              <div class=\"modal-seperator\">
              </div>

              <div class=\"form-group\"> 
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"Entrez votre Email\"/>
              </div>
              <div class=\"form-group\"> 
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Entrez votre mot de passe\"/>
              </div>

              <div class=\"form-group\">
                <div class=\"row gap-5\">
                  <div class=\"col-xs-6 col-sm-6 col-md-6\">
                    <div class=\"checkbox-block fa-checkbox\"> 
                      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"checkbox\"/>
                      <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                    </div>
                  </div>
                  <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\"> 
                    <a href=\"{{ path('fos_user_resetting_request') }}\" class=\"btn btn-link\">Mot de passe oublié ?</a>
                  </div>
                </div>
              </div>

            </div>

            <div class=\"modal-footer\">

              <div class=\"row gap-10\">
                <div class=\"col-xs-6 col-sm-6 mb-10\">
                  <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-primary btn-block\"/>
                </div>
                <div class=\"col-xs-6 col-sm-6 mb-10\">
                  <a href=\"{{ path('lgp_core_homepage') }}\" class=\"btn btn-primary btn-block btn-inverse\">Annuler</a>
                </div>
              </div><br>
              <div class=\"text-center\">
                Pas de compte ? Inscription <br>
                <a href=\"{{ path('lgp_parent_registration') }}\" class=\"btn btn-link\">Je suis Parent/Apprenant</a> ou
                <a href=\"{{ path('lgp_prof_registration') }}\" class=\"btn btn-link\">Je suis Prof</a>
              </div>

            </div>
          </form>
          <!-- End # Login Form -->
        </div>
      </div>

    </div>

  </div>

{% endblock fos_user_content %}";
    }
}
