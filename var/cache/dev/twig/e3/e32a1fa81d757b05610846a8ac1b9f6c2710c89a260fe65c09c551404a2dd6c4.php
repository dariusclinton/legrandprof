<?php

/* LGPCoreBundle::header.html.twig */
class __TwigTemplate_3eb82ad6d01fe3d8752e3c377e83da69c6500330d25c645521b479f62f32485a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa1984dc84f2d467e393aba60403948973aaf0047bdf2ee2a075d1d5adf9401d = $this->env->getExtension("native_profiler");
        $__internal_fa1984dc84f2d467e393aba60403948973aaf0047bdf2ee2a075d1d5adf9401d->enter($__internal_fa1984dc84f2d467e393aba60403948973aaf0047bdf2ee2a075d1d5adf9401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header.html.twig"));

        // line 1
        echo "<!-- start Header -->
<header id=\"header\">

  <!-- start Navbar (Header) -->
  <nav class=\"navbar navbar-black navbar-fixed-top navbar-sticky-function\">

    <div class=\"navbar-top hidden-md hidden-lg\">

      <div class=\"container\">

        <div class=\"flex-row flex-align-middle\">
          <div class=\"flex-shrink flex-columns\">
            <a class=\"navbar-logo\" href=\"index.html\">
              <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-white.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
            </a>
          </div>  
          <div class=\"flex-columns\">
            <div class=\"\">

              <div class=\"navbar-mini\">
                <ul class=\"clearfix\">

                  <li class=\"dropdown bt-dropdown-click hidden-xs\">
                    <a id=\"currncy-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"ion-android-globe hidden-xss\"></i> Francais
                      <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
                      <li><a href=\"#\">Francais</a></li>
                      <li><a href=\"#\">English</a></li>
                    </ul>
                  </li>

                  <li class=\"dropdown bt-dropdown-click visible-xs\">
                    <a id=\"currncy-language-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-cog\"></i>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
                      <li><a href=\"#\">English</a></li>
                      <li><a href=\"#\">France</a></li>
                      <li><a href=\"#\">Japanese</a></li>
                    </ul>
                  </li>

                  <li class=\"user-action\">
                    <a data-toggle=\"modal\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"btn\">Connexion</a>
                  </li>

                </ul>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>

    <div class=\"navbar-bottom hidden-sm hidden-xs\">

      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-2 col-md-2\">
            <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></a>
          </div>      
          <div class=\"col-lg-6 col-md-6\">

            <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">

              ";
        // line 72
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 73
            echo "                <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                  <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo "\">Accueil</a></li>
                  <li><a href=\"#\">Besoin d'aide ?</a></li>
                  <!--<li><a href=\"#\">Contactez-nous</a></li>-->
                </ul>
              ";
        } else {
            // line 79
            echo "                <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                  <li><a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo "\">Accueil</a></li>
                  <li><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("lgp_prof_registration");
            echo "\">Devenir Un Grand Prof</a></li>
                  <li><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("lgp_core_how_it_works");
            echo "\">Comment ca marche ?</a></li>
                  <!--<li><a href=\"#\">Contactez-nous</a></li>-->
                </ul>
              ";
        }
        // line 86
        echo "            </div><!--/.nav-collapse -->

          </div>

          <div class=\"col-lg-4 col-md-4\">
            <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
              <ul class=\"nav navbar-nav\">
                <li>
                  ";
        // line 94
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 95
            echo "                      <a href=\"#\" style=\"margin-top: 0px; font-weight: bold\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array())), "html", null, true);
            echo "</a>
                    <ul>
                      <li><a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("lgp_user_dashboard");
            echo "\">Tableau de bord</a></li>
                      <li><a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                    </ul>
                  ";
        } else {
            // line 101
            echo "                    <a data-toggle=\"modal\"  id=\"btn-connect\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn\" style=\"font-size: 10px;\">Connexion</a>
                  ";
        }
        // line 103
        echo "                </li>
                <li>
                  ";
        // line 105
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 106
            echo "                      <a href=\"#\" style=\"margin-top: 0px; font-weight: bold\"><i class=\"fa fa-cog\"></i></a>
                    <ul>
                      <li><a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
            echo "\">Messages</a></li>
                      <li><a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("lgp_user_nouvelles_categories_cours");
            echo "\">Proposer une catégorie de cours</a></li>
                      
                      ";
            // line 111
            if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
                // line 112
                echo "                      <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("lgp_user_anomalies");
                echo "\">Anomalies du système</a></li>
                      ";
            }
            // line 114
            echo "                    </ul>
                    
                  ";
        }
        // line 117
        echo "                </li>
                <li><a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("lgp_reservation_cart");
        echo "\" style=\"font-weight:200;\"><i class=\"pe-7s-cart\" style=\"font-size:22px;\"></i> &nbsp;<span style=\"font-size:15px;\">Panier</span></a>
                  <ul style=\"width:250px;margin-left:-100px;\">
                    ";
        // line 120
        $context["panier"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method");
        // line 121
        echo "                    ";
        if (((array_key_exists("panier", $context) &&  !(null === (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array())) != 0))) {
            // line 122
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array()));
            foreach ($context['_seq'] as $context["key"] => $context["booker"]) {
                // line 123
                echo "                        <li class=\"cart-li\">
                          <div class=\"cart\">
                            <img src=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["booker"], "profImage", array())), "html", null, true);
                echo "\">
                            <b>";
                // line 126
                echo twig_escape_filter($this->env, (($this->getAttribute($context["booker"], "profPrenoms", array()) . " ") . $this->getAttribute($context["booker"], "profNom", array())), "html", null, true);
                echo "</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "prixTotal", array()), "html", null, true);
                echo " Fcfa
                            <b class=\"right\" onclick=\"location.href = '";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_cart_remove", array("key" => $context["key"])), "html", null, true);
                echo "'\"><i class=\"fa fa-remove\"></i></b>
                          </div>
                        </li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['booker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                    ";
        } else {
            // line 132
            echo "                      <li class=\"cart-li\">
                        <div class=\"cart\">
                          <b>aucun prof dans le panier</b>
                        </div>
                      </li>
                    ";
        }
        // line 138
        echo "                  </ul>

                </li>

              </ul>
            </div>
          </div>

        </div>

      </div>

    </div>

    <div id=\"slicknav-mobile\"></div>

  </nav>
  <!-- end Navbar (Header) -->

</header>";
        
        $__internal_fa1984dc84f2d467e393aba60403948973aaf0047bdf2ee2a075d1d5adf9401d->leave($__internal_fa1984dc84f2d467e393aba60403948973aaf0047bdf2ee2a075d1d5adf9401d_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 138,  248 => 132,  245 => 131,  235 => 127,  229 => 126,  225 => 125,  221 => 123,  216 => 122,  213 => 121,  211 => 120,  206 => 118,  203 => 117,  198 => 114,  192 => 112,  190 => 111,  185 => 109,  181 => 108,  177 => 106,  175 => 105,  171 => 103,  165 => 101,  159 => 98,  155 => 97,  149 => 95,  147 => 94,  137 => 86,  130 => 82,  126 => 81,  122 => 80,  119 => 79,  111 => 74,  108 => 73,  106 => 72,  95 => 66,  72 => 46,  37 => 14,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- start Header -->
<header id=\"header\">

  <!-- start Navbar (Header) -->
  <nav class=\"navbar navbar-black navbar-fixed-top navbar-sticky-function\">

    <div class=\"navbar-top hidden-md hidden-lg\">

      <div class=\"container\">

        <div class=\"flex-row flex-align-middle\">
          <div class=\"flex-shrink flex-columns\">
            <a class=\"navbar-logo\" href=\"index.html\">
              <img src=\"{{ asset('images/logo-white.png') }}\" alt=\"Logo\" />
            </a>
          </div>  
          <div class=\"flex-columns\">
            <div class=\"\">

              <div class=\"navbar-mini\">
                <ul class=\"clearfix\">

                  <li class=\"dropdown bt-dropdown-click hidden-xs\">
                    <a id=\"currncy-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"ion-android-globe hidden-xss\"></i> Francais
                      <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
                      <li><a href=\"#\">Francais</a></li>
                      <li><a href=\"#\">English</a></li>
                    </ul>
                  </li>

                  <li class=\"dropdown bt-dropdown-click visible-xs\">
                    <a id=\"currncy-language-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-cog\"></i>
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
                      <li><a href=\"#\">English</a></li>
                      <li><a href=\"#\">France</a></li>
                      <li><a href=\"#\">Japanese</a></li>
                    </ul>
                  </li>

                  <li class=\"user-action\">
                    <a data-toggle=\"modal\" href=\"{{ path('fos_user_security_login') }}\" class=\"btn\">Connexion</a>
                  </li>

                </ul>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>

    <div class=\"navbar-bottom hidden-sm hidden-xs\">

      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-2 col-md-2\">
            <a href=\"{{ path('lgp_core_homepage') }}\"><img src=\"{{ asset('images/Logo.png') }}\" alt=\"Logo\" /></a>
          </div>      
          <div class=\"col-lg-6 col-md-6\">

            <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">

              {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                  <li><a href=\"{{ path('lgp_core_homepage') }}\">Accueil</a></li>
                  <li><a href=\"#\">Besoin d'aide ?</a></li>
                  <!--<li><a href=\"#\">Contactez-nous</a></li>-->
                </ul>
              {% else %}
                <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                  <li><a href=\"{{ path('lgp_core_homepage') }}\">Accueil</a></li>
                  <li><a href=\"{{ path('lgp_prof_registration') }}\">Devenir Un Grand Prof</a></li>
                  <li><a href=\"{{ path('lgp_core_how_it_works') }}\">Comment ca marche ?</a></li>
                  <!--<li><a href=\"#\">Contactez-nous</a></li>-->
                </ul>
              {% endif %}
            </div><!--/.nav-collapse -->

          </div>

          <div class=\"col-lg-4 col-md-4\">
            <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
              <ul class=\"nav navbar-nav\">
                <li>
                  {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                      <a href=\"#\" style=\"margin-top: 0px; font-weight: bold\">{{ app.user.prenoms | capitalize }}</a>
                    <ul>
                      <li><a href=\"{{ path('lgp_user_dashboard') }}\">Tableau de bord</a></li>
                      <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
                    </ul>
                  {% else %}
                    <a data-toggle=\"modal\"  id=\"btn-connect\" href=\"{{ path('fos_user_security_login') }}\" class=\"btn\" style=\"font-size: 10px;\">Connexion</a>
                  {% endif %}
                </li>
                <li>
                  {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                      <a href=\"#\" style=\"margin-top: 0px; font-weight: bold\"><i class=\"fa fa-cog\"></i></a>
                    <ul>
                      <li><a href=\"{{ path('lgp_user_message_receive') }}\">Messages</a></li>
                      <li><a href=\"{{ path('lgp_user_nouvelles_categories_cours') }}\">Proposer une catégorie de cours</a></li>
                      
                      {% if is_granted('ROLE_PROF') %}
                      <li><a href=\"{{ path('lgp_user_anomalies') }}\">Anomalies du système</a></li>
                      {% endif %}
                    </ul>
                    
                  {% endif %}
                </li>
                <li><a href=\"{{ path('lgp_reservation_cart') }}\" style=\"font-weight:200;\"><i class=\"pe-7s-cart\" style=\"font-size:22px;\"></i> &nbsp;<span style=\"font-size:15px;\">Panier</span></a>
                  <ul style=\"width:250px;margin-left:-100px;\">
                    {% set panier = app.session.get('panier') %}
                    {% if panier is defined and panier is not null and panier.items | length != 0 %}
                      {% for key,booker in panier.items %}
                        <li class=\"cart-li\">
                          <div class=\"cart\">
                            <img src=\"{{ asset(booker.profImage) }}\">
                            <b>{{ booker.profPrenoms ~\" \"~ booker.profNom}}</b> {{booker.prixTotal}} Fcfa
                            <b class=\"right\" onclick=\"location.href = '{{ path('lgp_reservation_cart_remove',{'key': key}) }}'\"><i class=\"fa fa-remove\"></i></b>
                          </div>
                        </li>
                      {% endfor %}
                    {% else %}
                      <li class=\"cart-li\">
                        <div class=\"cart\">
                          <b>aucun prof dans le panier</b>
                        </div>
                      </li>
                    {% endif %}
                  </ul>

                </li>

              </ul>
            </div>
          </div>

        </div>

      </div>

    </div>

    <div id=\"slicknav-mobile\"></div>

  </nav>
  <!-- end Navbar (Header) -->

</header>";
    }
}
