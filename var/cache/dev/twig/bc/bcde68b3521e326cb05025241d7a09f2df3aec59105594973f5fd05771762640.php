<?php

/* LGPCoreBundle::header.html.twig */
class __TwigTemplate_afad6b801b4dce2450ddd68df451a4092ba423ceb7135198dfc03b87f3809e54 extends Twig_Template
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
        $__internal_0710d074a09360afe13c03ad06112514aadc34ca44316e4036bf37c37054dd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0710d074a09360afe13c03ad06112514aadc34ca44316e4036bf37c37054dd02->enter($__internal_0710d074a09360afe13c03ad06112514aadc34ca44316e4036bf37c37054dd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-white.png"), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></a>
          </div>      
          <div class=\"col-lg-6 col-md-6\">

            <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">

              ";
        // line 72
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 73
            echo "                <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                  <li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
            echo "\">Accueil</a></li>
                  <li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_prof_registration");
            echo "\">Devenir Un Grand Prof</a></li>
                  <li><a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_how_it_works");
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 95
            echo "                      <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" style=\"margin-top: 0px; font-weight: bold\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "</a>
                    <ul>
                      ";
            // line 97
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
                // line 98
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_dashboard");
                echo "\">Tableau de bord</a></li>

                        ";
            } else {
                // line 101
                echo "                          <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_parent_dashboard");
                echo "\">Tableau de bord</a></li>
                      ";
            }
            // line 103
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                      <li><a href=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                    </ul>
                  ";
        } else {
            // line 107
            echo "                    <a data-toggle=\"modal\"  id=\"btn-connect\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn\" style=\"font-size: 10px;\">Connexion</a>
                  ";
        }
        // line 109
        echo "                </li>
                <li>
                  ";
        // line 111
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 112
            echo "                      <a href=\"#\" style=\"margin-top: 0px; font-weight: bold\"><i class=\"fa fa-cog\"></i></a>
                    <ul>
                      <li><a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_receive");
            echo "\">Messages</a></li>
                      <li><a href=\"";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_nouvelles_categories_cours");
            echo "\">Proposer une catégorie de cours</a></li>
                      
                      ";
            // line 117
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
                // line 118
                echo "                      <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_anomalies");
                echo "\">Anomalies du système</a></li>
                      ";
            }
            // line 120
            echo "                    </ul>
                    
                  ";
        }
        // line 123
        echo "                </li>
                <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_reservation_cart");
        echo "\" style=\"font-weight:200;\"><i class=\"pe-7s-cart\" style=\"font-size:22px;\"></i> &nbsp;<span style=\"font-size:15px;\">Panier</span></a>
                  <ul style=\"width:250px;margin-left:-100px;\">
                    ";
        // line 126
        $context["panier"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method");
        // line 127
        echo "                    ";
        if (((array_key_exists("panier", $context) &&  !(null === (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array())) != 0))) {
            // line 128
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array()));
            foreach ($context['_seq'] as $context["key"] => $context["booker"]) {
                // line 129
                echo "                        <li class=\"cart-li\">
                          <div class=\"cart\">
                            <img src=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["booker"], "profImage", array())), "html", null, true);
                echo "\" alt=\"image prof\">
                            <b>";
                // line 132
                echo twig_escape_filter($this->env, (($this->getAttribute($context["booker"], "profPrenoms", array()) . " ") . $this->getAttribute($context["booker"], "profNom", array())), "html", null, true);
                echo "</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "prixTotal", array()), "html", null, true);
                echo " Fcfa
                            <b class=\"right\" onclick=\"location.href = '";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_reservation_cart_remove", array("key" => $context["key"])), "html", null, true);
                echo "'\"><i class=\"fa fa-remove\"></i></b>
                          </div>
                        </li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['booker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                    ";
        } else {
            // line 138
            echo "                      <li class=\"cart-li\">
                        <div class=\"cart\">
                          <b>aucun prof dans le panier</b>
                        </div>
                      </li>
                    ";
        }
        // line 144
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
        
        $__internal_0710d074a09360afe13c03ad06112514aadc34ca44316e4036bf37c37054dd02->leave($__internal_0710d074a09360afe13c03ad06112514aadc34ca44316e4036bf37c37054dd02_prof);

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
        return array (  276 => 144,  268 => 138,  265 => 137,  255 => 133,  249 => 132,  245 => 131,  241 => 129,  236 => 128,  233 => 127,  231 => 126,  226 => 124,  223 => 123,  218 => 120,  212 => 118,  210 => 117,  205 => 115,  201 => 114,  197 => 112,  195 => 111,  191 => 109,  185 => 107,  179 => 104,  174 => 103,  168 => 101,  161 => 98,  159 => 97,  149 => 95,  147 => 94,  137 => 86,  130 => 82,  126 => 81,  122 => 80,  119 => 79,  111 => 74,  108 => 73,  106 => 72,  95 => 66,  72 => 46,  37 => 14,  22 => 1,);
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
                      <a href=\"{{ path('fos_user_profile_show') }}\" style=\"margin-top: 0px; font-weight: bold\">{{ app.user.prenoms | capitalize }} {{ app.user.nom | capitalize }}</a>
                    <ul>
                      {% if is_granted('ROLE_PROF') %}
                        <li><a href=\"{{ path('lgp_user_prof_dashboard') }}\">Tableau de bord</a></li>

                        {% else %}
                          <li><a href=\"{{ path('lgp_user_parent_dashboard') }}\">Tableau de bord</a></li>
                      {% endif %}
                      <li><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>
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
                            <img src=\"{{ asset(booker.profImage) }}\" alt=\"image prof\">
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
