<?php

/* LGPCoreBundle::header.html.twig */
class __TwigTemplate_2d6b60949b614267e0f5a043b0b647457034fbad8719fba08f870b8e2eaa6c35 extends Twig_Template
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
        $__internal_a275ace067197056b55b9b905d808a19bd90cf66f9f7b2856de37178a53878f2 = $this->env->getExtension("native_profiler");
        $__internal_a275ace067197056b55b9b905d808a19bd90cf66f9f7b2856de37178a53878f2->enter($__internal_a275ace067197056b55b9b905d808a19bd90cf66f9f7b2856de37178a53878f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header.html.twig"));

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
                                                        <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                                                                <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("lgp_core_homepage");
        echo "\">Accueil</a></li>
                                                                <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("lgp_user_become_prof");
        echo "\">Devenir Un Grand Prof</a></li>
                                                                <li><a href=\"#\">Comment ca marche ?</a></li>
                                                                <!--<li><a href=\"#\">Contactez-nous</a></li>-->

                                                        </ul>

                                                </div><!--/.nav-collapse -->

                                        </div>

                                        <div class=\"col-lg-4 col-md-4\">
                                                <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
                                                <ul class=\"nav navbar-nav\">
                                                        <li>
                                                            ";
        // line 91
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "                                                                <div style=\"margin-top: 11px; font-weight: bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<i class=\"arrow-indicator fa fa-angle-down\"></i></div>
                                                               <ul>
                                                                   <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                                               </ul>
                                                            ";
        } else {
            // line 97
            echo "                                                                <a data-toggle=\"modal\"  id=\"btn-connect\" href=\"#loginModal\" class=\"btn\" style=\"font-size: 10px;\">Connexion</a>
                                                            ";
        }
        // line 99
        echo "                                                        </li>
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
        
        $__internal_a275ace067197056b55b9b905d808a19bd90cf66f9f7b2856de37178a53878f2->leave($__internal_a275ace067197056b55b9b905d808a19bd90cf66f9f7b2856de37178a53878f2_prof);

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
        return array (  146 => 99,  142 => 97,  136 => 94,  130 => 92,  128 => 91,  111 => 77,  107 => 76,  96 => 70,  37 => 14,  22 => 1,);
    }
}
/* <!-- start Header -->*/
/* <header id="header">*/
/* */
/*         <!-- start Navbar (Header) -->*/
/*         <nav class="navbar navbar-black navbar-fixed-top navbar-sticky-function">*/
/* */
/*                 <div class="navbar-top hidden-md hidden-lg">*/
/* */
/*                         <div class="container">*/
/* */
/*                                 <div class="flex-row flex-align-middle">*/
/*                                         <div class="flex-shrink flex-columns">*/
/*                                                 <a class="navbar-logo" href="index.html">*/
/*                                                         <img src="{{ asset('images/logo-white.png') }}" alt="Logo" />*/
/*                                                 </a>*/
/*                                         </div>	*/
/*                                         <div class="flex-columns">*/
/*                                                 <div class="">*/
/* */
/*                                                         <div class="navbar-mini">*/
/*                                                                 <ul class="clearfix">*/
/* */
/*                                                                         <li class="dropdown bt-dropdown-click hidden-xs">*/
/*                                                                                 <a id="currncy-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                                                                         <i class="ion-android-globe hidden-xss"></i> Francais*/
/*                                                                                         <span class="caret"></span>*/
/*                                                                                 </a>*/
/*                                                                                 <ul class="dropdown-menu" aria-labelledby="language-dropdown">*/
/*                                                                                         <li><a href="#">Francais</a></li>*/
/*                                                                                         <li><a href="#">English</a></li>*/
/*                                                                                 </ul>*/
/*                                                                         </li>*/
/* */
/*                                                                         <li class="dropdown bt-dropdown-click visible-xs">*/
/*                                                                                 <a id="currncy-language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                                                                         <i class="fa fa-cog"></i>*/
/*                                                                                 </a>*/
/*                                                                                 <ul class="dropdown-menu" aria-labelledby="language-dropdown">*/
/*                                                                                         <li><a href="#"><i class="ion-social-usd"></i> Dollar</a></li>*/
/*                                                                                         <li><a href="#"><i class="ion-social-euro"></i> Europe</a></li>*/
/*                                                                                         <li><a href="#"><i class="ion-social-yen"></i> Yen</a></li>*/
/*                                                                                         <li class="divider"></li>*/
/*                                                                                         <li><a href="#">English</a></li>*/
/*                                                                                         <li><a href="#">France</a></li>*/
/*                                                                                         <li><a href="#">Japanese</a></li>*/
/*                                                                                 </ul>*/
/*                                                                         </li>*/
/* */
/*                                                                         <li class="user-action">*/
/*                                                                                 <a data-toggle="modal" href="#loginModal" class="btn">Connexion</a>*/
/*                                                                         </li>*/
/* */
/*                                                                 </ul>*/
/*                                                         </div>*/
/* */
/*                                                 </div>*/
/*                                         </div>*/
/*                                 </div>*/
/* */
/*                         </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="navbar-bottom hidden-sm hidden-xs">*/
/* */
/*                         <div class="container">*/
/* */
/*                                 <div class="row">*/
/*                                         <div class="col-lg-2 col-md-2">*/
/*                                                 <a href="{{ path('lgp_core_homepage') }}"><img src="{{ asset('images/Logo.png') }}" alt="Logo" /></a>*/
/*                                         </div>		*/
/*                                         <div class="col-lg-6 col-md-6">*/
/* */
/*                                                 <div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/*                                                         <ul class="nav navbar-nav" id="responsive-menu">*/
/*                                                                 <li><a href="{{ path('lgp_core_homepage') }}">Accueil</a></li>*/
/*                                                                 <li><a href="{{ path('lgp_user_become_prof') }}">Devenir Un Grand Prof</a></li>*/
/*                                                                 <li><a href="#">Comment ca marche ?</a></li>*/
/*                                                                 <!--<li><a href="#">Contactez-nous</a></li>-->*/
/* */
/*                                                         </ul>*/
/* */
/*                                                 </div><!--/.nav-collapse -->*/
/* */
/*                                         </div>*/
/* */
/*                                         <div class="col-lg-4 col-md-4">*/
/*                                                 <div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/*                                                 <ul class="nav navbar-nav">*/
/*                                                         <li>*/
/*                                                             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                                                 <div style="margin-top: 11px; font-weight: bold">{{ app.user.username }}<i class="arrow-indicator fa fa-angle-down"></i></div>*/
/*                                                                <ul>*/
/*                                                                    <li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*                                                                </ul>*/
/*                                                             {% else %}*/
/*                                                                 <a data-toggle="modal"  id="btn-connect" href="#loginModal" class="btn" style="font-size: 10px;">Connexion</a>*/
/*                                                             {% endif %}*/
/*                                                         </li>*/
/*                                                         <li><a href="#" style="font-weight:200;"><i class="pe-7s-cart" style="font-size:22px;"></i> &nbsp;<span style="font-size:15px;">Panier</span></a>*/
/*                                                                 <ul>*/
/*                                                                         Aucun Prof rajouté	*/
/*                                                                 </ul>*/
/* */
/*                                                         </li>*/
/* */
/*                                                 </ul>*/
/*                                                 </div>*/
/*                                         </div>*/
/* */
/*                                 </div>*/
/* */
/*                         </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div id="slicknav-mobile"></div>*/
/* */
/*         </nav>*/
/*         <!-- end Navbar (Header) -->*/
/* */
/* </header>*/
/* */
/* */
