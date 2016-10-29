<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6829c49ec8c980e5f734d9497915db6244be652064ef6839ee132e28910068eb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"breadcrumb-wrapper bg-light-2\">

    <div class=\"container\">

      <ol class=\"breadcrumb-list booking-step\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 28
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 30
        echo "
          <!-- Begin # Login Form -->
          <form  action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"margin-top:-30px;\">

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

            <div class=\"modal-body pb-5\">

              <h4 class=\"text-center heading mt-10 mb-20\">Connexion</h4>

              <div class=\"modal-seperator\">
              </div>

              <div class=\"form-group\"> 
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                  </div>
                  <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\"> 
                    <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\"/>
                </div>
                <div class=\"col-xs-6 col-sm-6 mb-10\">
                  <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo "\" class=\"btn btn-primary btn-block btn-inverse\">Annuler</a>
                </div>
              </div><br>
              <div class=\"text-center\">
                Pas de compte ? Inscription <br>
                <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("lgp_parent_registration");
        echo "\" class=\"btn btn-link\">Je suis Parent/Apprenant</a> ou
                <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("lgp_prof_registration");
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
        return array (  147 => 79,  143 => 78,  135 => 73,  129 => 70,  115 => 59,  108 => 55,  94 => 44,  81 => 34,  76 => 32,  72 => 30,  66 => 28,  64 => 27,  49 => 15,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
