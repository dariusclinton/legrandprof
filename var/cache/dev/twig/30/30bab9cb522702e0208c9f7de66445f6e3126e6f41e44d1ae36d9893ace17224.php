<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3a88a4b31ac1ad3730a81ffe3c4e5e6ec1b28d540357c7d0f081964efb0af165 extends Twig_Template
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
        $__internal_d7d4114cfa0078c74ce024a88715ea92da8f86beb25969a50a1ad78523bd71d3 = $this->env->getExtension("native_profiler");
        $__internal_d7d4114cfa0078c74ce024a88715ea92da8f86beb25969a50a1ad78523bd71d3->enter($__internal_d7d4114cfa0078c74ce024a88715ea92da8f86beb25969a50a1ad78523bd71d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d4114cfa0078c74ce024a88715ea92da8f86beb25969a50a1ad78523bd71d3->leave($__internal_d7d4114cfa0078c74ce024a88715ea92da8f86beb25969a50a1ad78523bd71d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a511ae8cafb021451e6d567bf33b36ce86f14a3e3bced395c81dd9ac56aece3 = $this->env->getExtension("native_profiler");
        $__internal_0a511ae8cafb021451e6d567bf33b36ce86f14a3e3bced395c81dd9ac56aece3->enter($__internal_0a511ae8cafb021451e6d567bf33b36ce86f14a3e3bced395c81dd9ac56aece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0a511ae8cafb021451e6d567bf33b36ce86f14a3e3bced395c81dd9ac56aece3->leave($__internal_0a511ae8cafb021451e6d567bf33b36ce86f14a3e3bced395c81dd9ac56aece3_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5b257b391efbe12f0de6d949e5e1dd138843391f35198e9d0ebb25d30e29a58 = $this->env->getExtension("native_profiler");
        $__internal_b5b257b391efbe12f0de6d949e5e1dd138843391f35198e9d0ebb25d30e29a58->enter($__internal_b5b257b391efbe12f0de6d949e5e1dd138843391f35198e9d0ebb25d30e29a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "  <div class=\"breadcrumb-wrapper bg-light-2\">

    <div class=\"container\">

      <ol class=\"breadcrumb-list booking-step\">
        <li><a href=\"#\">Accueil</a></li>
        <li><span>Connexion</span></li>
      </ol>

    </div>

  </div>

  <div class=\"content-wrapper\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
          ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 31
        echo "
          <!-- Begin # Login Form -->
          <form  action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"margin-top:-30px;\">

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <div class=\"modal-body pb-5\">

              <h4 class=\"text-center heading mt-10 mb-20\">Connexion</h4>

              <div class=\"modal-seperator\">
              </div>

              <div class=\"form-group\"> 
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
              </div>
              <div class=\"form-group\"> 
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
              </div>

              <div class=\"form-group\">
                <div class=\"row gap-5\">
                  <div class=\"col-xs-6 col-sm-6 col-md-6\">
                    <div class=\"checkbox-block fa-checkbox\"> 
                      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"checkbox\"/>
                      <label for=\"remember_me\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                  </div>
                  <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\"> 
                    <a href=\"";
        // line 60
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
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\"/>
                </div>
                <div class=\"col-xs-6 col-sm-6 mb-10\">
                  <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo "\" class=\"btn btn-primary btn-block btn-inverse\">Annuler</a>
                </div>
              </div><br>
              <div class=\"text-center\">
                Pas de compte ? Inscription <br>
                <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("lgp_parent_registration");
        echo "\" class=\"btn btn-link\">Je suis Parent/Apprenant</a> ou
                <a href=\"";
        // line 80
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
        
        $__internal_b5b257b391efbe12f0de6d949e5e1dd138843391f35198e9d0ebb25d30e29a58->leave($__internal_b5b257b391efbe12f0de6d949e5e1dd138843391f35198e9d0ebb25d30e29a58_prof);

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
        return array (  160 => 80,  156 => 79,  148 => 74,  142 => 71,  128 => 60,  121 => 56,  107 => 45,  94 => 35,  89 => 33,  85 => 31,  79 => 29,  77 => 28,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
        <li><a href=\"#\">Accueil</a></li>
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
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\"/>
              </div>
              <div class=\"form-group\"> 
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
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