<?php

/* LGPCoreBundle::header.html.twig */
class __TwigTemplate_227648eafa023adf7c146ff054d8c706ede3481d72ce8f7367fe2772be4c5d8c extends Twig_Template
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
        $__internal_e9d5722a9ca9f82c0c03963baddcf1a10ac9640c3e1a96e95999e7b3b1138a8f = $this->env->getExtension("native_profiler");
        $__internal_e9d5722a9ca9f82c0c03963baddcf1a10ac9640c3e1a96e95999e7b3b1138a8f->enter($__internal_e9d5722a9ca9f82c0c03963baddcf1a10ac9640c3e1a96e95999e7b3b1138a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header.html.twig"));

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
                    </div>\t
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
                                            <li><a href=\"#\"><i class=\"ion-social-usd\"></i> Dollar</a></li>
                                            <li><a href=\"#\"><i class=\"ion-social-euro\"></i> Europe</a></li>
                                            <li><a href=\"#\"><i class=\"ion-social-yen\"></i> Yen</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\">English</a></li>
                                            <li><a href=\"#\">France</a></li>
                                            <li><a href=\"#\">Japanese</a></li>
                                        </ul>
                                    </li>

                                    <li class=\"user-action\">
                                        <a data-toggle=\"modal\" href=\"#loginModal\" class=\"btn\">Connexion</a>
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
        // line 70
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></a>
                    </div>\t\t
                    <div class=\"col-lg-6 col-md-6\">

                        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">

                            ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 77
            echo "                                <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                                    <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo "\">Accueil</a></li>
                                    <li><a href=\"#\">Besoin d'aide ?</a></li>
                                    <!--<li><a href=\"#\">Contactez-nous</a></li>-->
                                </ul>
                            ";
        } else {
            // line 83
            echo "                                <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                                    <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
            echo "\">Accueil</a></li>
                                    <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("lgp_user_become_prof");
            echo "\">Devenir Un Grand Prof</a></li>
                                    <li><a href=\"#\">Comment ca marche ?</a></li>
                                    <!--<li><a href=\"#\">Contactez-nous</a></li>-->
                                </ul>
                            ";
        }
        // line 90
        echo "                        </div><!--/.nav-collapse -->

                    </div>

                    <div class=\"col-lg-4 col-md-4\">
                        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
                            <ul class=\"nav navbar-nav\">
                                <li>
                                    ";
        // line 98
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 99
            echo "                                        <div style=\"margin-top: 11px; font-weight: bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<i class=\"arrow-indicator fa fa-angle-down\"></i></div>
                                        <ul>
                                            <li><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                                            <li><a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                        </ul>
                                    ";
        } else {
            // line 105
            echo "                                        <a data-toggle=\"modal\"  id=\"btn-connect\" href=\"#loginModal\" class=\"btn\" style=\"font-size: 10px;\">Connexion</a>
                                    ";
        }
        // line 107
        echo "                                </li>
                                <li><a href=\"#\" style=\"font-weight:200;\"><i class=\"pe-7s-cart\" style=\"font-size:22px;\"></i> &nbsp;<span style=\"font-size:15px;\">Panier</span></a>
                                    <ul style=\"width:250px;margin-left:-100px;\">

                                        ";
        // line 111
        $context["panier"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method");
        // line 112
        echo "                                        ";
        if (((array_key_exists("panier", $context) &&  !(null === (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array())) != 0))) {
            // line 113
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "items", array()));
            foreach ($context['_seq'] as $context["key"] => $context["booker"]) {
                // line 114
                echo "                                                <li class=\"cart-li\">
                                                    <div class=\"cart\">
                                                        <img src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["booker"], "profImage", array())), "html", null, true);
                echo "\">
                                                        <b>";
                // line 117
                echo twig_escape_filter($this->env, (((($this->getAttribute($context["booker"], "profPrenoms", array()) . " ") . $this->getAttribute($context["booker"], "profNom", array())) . " ") . $context["key"]), "html", null, true);
                echo "</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["booker"], "prixTotal", array()), "html", null, true);
                echo " Fcfa
                                                        <b class=\"right\" onclick=\"location.href='";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_cart_remove", array("key" => $context["key"])), "html", null, true);
                echo "'\"><i class=\"fa fa-remove\"></i></b>
                                                    </div>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['booker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                                        ";
        } else {
            // line 123
            echo "                                            <li class=\"cart-li\">
                                                <div class=\"cart\">
                                                    <b>aucun prof dans le panier</b>
                                                </div>
                                            </li>
                                        ";
        }
        // line 129
        echo "
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

</header>

";
        
        $__internal_e9d5722a9ca9f82c0c03963baddcf1a10ac9640c3e1a96e95999e7b3b1138a8f->leave($__internal_e9d5722a9ca9f82c0c03963baddcf1a10ac9640c3e1a96e95999e7b3b1138a8f_prof);

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
        return array (  218 => 129,  210 => 123,  207 => 122,  197 => 118,  191 => 117,  187 => 116,  183 => 114,  178 => 113,  175 => 112,  173 => 111,  167 => 107,  163 => 105,  157 => 102,  153 => 101,  147 => 99,  145 => 98,  135 => 90,  127 => 85,  123 => 84,  120 => 83,  112 => 78,  109 => 77,  107 => 76,  96 => 70,  37 => 14,  22 => 1,);
    }
}
/* <!-- start Header -->*/
/* <header id="header">*/
/* */
/*     <!-- start Navbar (Header) -->*/
/*     <nav class="navbar navbar-black navbar-fixed-top navbar-sticky-function">*/
/* */
/*         <div class="navbar-top hidden-md hidden-lg">*/
/* */
/*             <div class="container">*/
/* */
/*                 <div class="flex-row flex-align-middle">*/
/*                     <div class="flex-shrink flex-columns">*/
/*                         <a class="navbar-logo" href="index.html">*/
/*                             <img src="{{ asset('images/logo-white.png') }}" alt="Logo" />*/
/*                         </a>*/
/*                     </div>	*/
/*                     <div class="flex-columns">*/
/*                         <div class="">*/
/* */
/*                             <div class="navbar-mini">*/
/*                                 <ul class="clearfix">*/
/* */
/*                                     <li class="dropdown bt-dropdown-click hidden-xs">*/
/*                                         <a id="currncy-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                             <i class="ion-android-globe hidden-xss"></i> Francais*/
/*                                             <span class="caret"></span>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu" aria-labelledby="language-dropdown">*/
/*                                             <li><a href="#">Francais</a></li>*/
/*                                             <li><a href="#">English</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/* */
/*                                     <li class="dropdown bt-dropdown-click visible-xs">*/
/*                                         <a id="currncy-language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                             <i class="fa fa-cog"></i>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu" aria-labelledby="language-dropdown">*/
/*                                             <li><a href="#"><i class="ion-social-usd"></i> Dollar</a></li>*/
/*                                             <li><a href="#"><i class="ion-social-euro"></i> Europe</a></li>*/
/*                                             <li><a href="#"><i class="ion-social-yen"></i> Yen</a></li>*/
/*                                             <li class="divider"></li>*/
/*                                             <li><a href="#">English</a></li>*/
/*                                             <li><a href="#">France</a></li>*/
/*                                             <li><a href="#">Japanese</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/* */
/*                                     <li class="user-action">*/
/*                                         <a data-toggle="modal" href="#loginModal" class="btn">Connexion</a>*/
/*                                     </li>*/
/* */
/*                                 </ul>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="navbar-bottom hidden-sm hidden-xs">*/
/* */
/*             <div class="container">*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-2 col-md-2">*/
/*                         <a href="{{ path('lgp_core_homepage') }}"><img src="{{ asset('images/Logo.png') }}" alt="Logo" /></a>*/
/*                     </div>		*/
/*                     <div class="col-lg-6 col-md-6">*/
/* */
/*                         <div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/* */
/*                             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                 <ul class="nav navbar-nav" id="responsive-menu">*/
/*                                     <li><a href="{{ path('lgp_core_homepage') }}">Accueil</a></li>*/
/*                                     <li><a href="#">Besoin d'aide ?</a></li>*/
/*                                     <!--<li><a href="#">Contactez-nous</a></li>-->*/
/*                                 </ul>*/
/*                             {% else %}*/
/*                                 <ul class="nav navbar-nav" id="responsive-menu">*/
/*                                     <li><a href="{{ path('lgp_core_homepage') }}">Accueil</a></li>*/
/*                                     <li><a href="{{ path('lgp_user_become_prof') }}">Devenir Un Grand Prof</a></li>*/
/*                                     <li><a href="#">Comment ca marche ?</a></li>*/
/*                                     <!--<li><a href="#">Contactez-nous</a></li>-->*/
/*                                 </ul>*/
/*                             {% endif %}*/
/*                         </div><!--/.nav-collapse -->*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-lg-4 col-md-4">*/
/*                         <div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li>*/
/*                                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                         <div style="margin-top: 11px; font-weight: bold">{{ app.user.username }}<i class="arrow-indicator fa fa-angle-down"></i></div>*/
/*                                         <ul>*/
/*                                             <li><a href="{{ path('fos_user_profile_show') }}">Profil</a></li>*/
/*                                             <li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*                                         </ul>*/
/*                                     {% else %}*/
/*                                         <a data-toggle="modal"  id="btn-connect" href="#loginModal" class="btn" style="font-size: 10px;">Connexion</a>*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 <li><a href="#" style="font-weight:200;"><i class="pe-7s-cart" style="font-size:22px;"></i> &nbsp;<span style="font-size:15px;">Panier</span></a>*/
/*                                     <ul style="width:250px;margin-left:-100px;">*/
/* */
/*                                         {% set panier = app.session.get('panier') %}*/
/*                                         {% if panier is defined and panier is not null and panier.items | length != 0 %}*/
/*                                             {% for key,booker in panier.items %}*/
/*                                                 <li class="cart-li">*/
/*                                                     <div class="cart">*/
/*                                                         <img src="{{ asset(booker.profImage) }}">*/
/*                                                         <b>{{ booker.profPrenoms ~" "~ booker.profNom ~' '~key}}</b> {{booker.prixTotal}} Fcfa*/
/*                                                         <b class="right" onclick="location.href='{{ path('lgp_reservation_cart_remove',{'key': key}) }}'"><i class="fa fa-remove"></i></b>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                             {% endfor %}*/
/*                                         {% else %}*/
/*                                             <li class="cart-li">*/
/*                                                 <div class="cart">*/
/*                                                     <b>aucun prof dans le panier</b>*/
/*                                                 </div>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/* */
/*                                     </ul>*/
/* */
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div id="slicknav-mobile"></div>*/
/* */
/*     </nav>*/
/*     <!-- end Navbar (Header) -->*/
/* */
/* </header>*/
/* */
/* */
