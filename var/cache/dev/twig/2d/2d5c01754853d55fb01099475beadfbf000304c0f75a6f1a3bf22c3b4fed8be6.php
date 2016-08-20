<?php

/* @LGPCore/header.html.twig */
class __TwigTemplate_fb41f6caeed7b8a12ca78c85fe8fd1042dd004c5527a17dfc384ea3e518b47b4 extends Twig_Template
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
        $__internal_f730cfd328ccdeb39ae522d7dfddf67c709a169683e8c3fbc47290dbc7347a79 = $this->env->getExtension("native_profiler");
        $__internal_f730cfd328ccdeb39ae522d7dfddf67c709a169683e8c3fbc47290dbc7347a79->enter($__internal_f730cfd328ccdeb39ae522d7dfddf67c709a169683e8c3fbc47290dbc7347a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/header.html.twig"));

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
                        <a href=\" ";
        // line 70
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></a>
                    </div>\t\t
                    <div class=\"col-lg-7 col-md-6\">

                        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
                            <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                                <li><a href=\" ";
        // line 76
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                                <li><a href=\"#\">Devenir Un Grand Prof</a></li>
                                <li><a href=\"#\">Comment ca marche ?</a></li>
                                <!--<li><a href=\"#\">Contactez-nous</a></li>-->

                            </ul>

                        </div><!--/.nav-collapse -->

                    </div>

                    <div class=\"col-lg-3 col-md-4\">
                        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
                            <ul class=\"nav navbar-nav\">
                                <li>
                                    ";
        // line 91
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "                                        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                        -
                                        <a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                                    ";
        } else {
            // line 96
            echo "                                        <a data-toggle=\"modal\"  id=\"btn-connect\" href=\"#loginModal\" class=\"btn\" style=\"font-size: 10px;\">Connexion</a>
                                    ";
        }
        // line 98
        echo "                                </li>
                                <li><a href=\"#\" style=\"font-weight:200;\"><i class=\"pe-7s-cart\" style=\"font-size:22px;\"></i> &nbsp;<span style=\"font-size:15px;\">Panier</span></a>
                                    <ul>
                                        Aucun Prof rajouté\t
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
        
        $__internal_f730cfd328ccdeb39ae522d7dfddf67c709a169683e8c3fbc47290dbc7347a79->leave($__internal_f730cfd328ccdeb39ae522d7dfddf67c709a169683e8c3fbc47290dbc7347a79_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 98,  138 => 96,  133 => 94,  127 => 92,  125 => 91,  107 => 76,  96 => 70,  37 => 14,  22 => 1,);
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
/*                         <a href=" {{path('lgp_core_homepage')}} "><img src="{{ asset('images/Logo.png') }}" alt="Logo" /></a>*/
/*                     </div>		*/
/*                     <div class="col-lg-7 col-md-6">*/
/* */
/*                         <div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/*                             <ul class="nav navbar-nav" id="responsive-menu">*/
/*                                 <li><a href=" {{path('lgp_core_homepage')}} ">Accueil</a></li>*/
/*                                 <li><a href="#">Devenir Un Grand Prof</a></li>*/
/*                                 <li><a href="#">Comment ca marche ?</a></li>*/
/*                                 <!--<li><a href="#">Contactez-nous</a></li>-->*/
/* */
/*                             </ul>*/
/* */
/*                         </div><!--/.nav-collapse -->*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-lg-3 col-md-4">*/
/*                         <div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li>*/
/*                                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                         Connecté en tant que {{ app.user.username }}*/
/*                                         -*/
/*                                         <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*                                     {% else %}*/
/*                                         <a data-toggle="modal"  id="btn-connect" href="#loginModal" class="btn" style="font-size: 10px;">Connexion</a>*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 <li><a href="#" style="font-weight:200;"><i class="pe-7s-cart" style="font-size:22px;"></i> &nbsp;<span style="font-size:15px;">Panier</span></a>*/
/*                                     <ul>*/
/*                                         Aucun Prof rajouté	*/
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
