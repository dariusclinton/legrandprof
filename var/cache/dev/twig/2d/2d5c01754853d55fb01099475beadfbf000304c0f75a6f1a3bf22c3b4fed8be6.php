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
        $__internal_2dfe62aa7dcdaa2132218d44cfb3f35a10d42c2d93a2f076e1f2f0394094286b = $this->env->getExtension("native_profiler");
        $__internal_2dfe62aa7dcdaa2132218d44cfb3f35a10d42c2d93a2f076e1f2f0394094286b->enter($__internal_2dfe62aa7dcdaa2132218d44cfb3f35a10d42c2d93a2f076e1f2f0394094286b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/header.html.twig"));

        // line 1
        echo "<header id=\"header\">

    <!-- start Navbar (Header) -->
    <nav class=\"navbar navbar-primary navbar-fixed-top navbar-sticky-function\">

        <div class=\"navbar-top\">

            <div class=\"container\">

                <div class=\"flex-row flex-align-middle\">
                    <div class=\"flex-shrink flex-columns\">
                        <a class=\"navbar-logo\" href=\"#\">
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-white.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
                        </a>
                    </div>
                    <div class=\"flex-columns\">
                        <div class=\"pull-right\">

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
                                        ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                                            Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                            -
                                            <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                                        ";
        } else {
            // line 54
            echo "                                            <a data-toggle=\"modal\" href=\"#loginModal\" class=\"btn\">Connexion</a>
                                        ";
        }
        // line 56
        echo "                                    </li>

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

                    <div class=\"col-sm-9\">

                        <div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
                            <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                                <li><a href=\"index.html\">Accueil</a></li>
                                <li><a href=\"#\">Devenir Un Grand Prof</a></li>
                                <li><a href=\"#\">Comment ca marche ?</a></li>
                                <li><a href=\"#\">Contactez-nous</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->

                    </div>

                    <div class=\"col-sm-3\">

                        <div class=\"navbar-phone\"><i class=\"fa fa-phone\"></i> Appelez-nous: +237 697 818 740</div>

                    </div>

                </div>

            </div>

        </div>

        <div id=\"slicknav-mobile\"></div>

    </nav>
    <!-- end Navbar (Header) -->

</header>
";
        
        $__internal_2dfe62aa7dcdaa2132218d44cfb3f35a10d42c2d93a2f076e1f2f0394094286b->leave($__internal_2dfe62aa7dcdaa2132218d44cfb3f35a10d42c2d93a2f076e1f2f0394094286b_prof);

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
        return array (  92 => 56,  88 => 54,  83 => 52,  77 => 50,  75 => 49,  36 => 13,  22 => 1,);
    }
}
/* <header id="header">*/
/* */
/*     <!-- start Navbar (Header) -->*/
/*     <nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">*/
/* */
/*         <div class="navbar-top">*/
/* */
/*             <div class="container">*/
/* */
/*                 <div class="flex-row flex-align-middle">*/
/*                     <div class="flex-shrink flex-columns">*/
/*                         <a class="navbar-logo" href="#">*/
/*                             <img src="{{ asset('images/logo-white.png') }}" alt="Logo" />*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="flex-columns">*/
/*                         <div class="pull-right">*/
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
/*                                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                             Connecté en tant que {{ app.user.username }}*/
/*                                             -*/
/*                                             <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*                                         {% else %}*/
/*                                             <a data-toggle="modal" href="#loginModal" class="btn">Connexion</a>*/
/*                                         {% endif %}*/
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
/* */
/*                     <div class="col-sm-9">*/
/* */
/*                         <div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/*                             <ul class="nav navbar-nav" id="responsive-menu">*/
/*                                 <li><a href="index.html">Accueil</a></li>*/
/*                                 <li><a href="#">Devenir Un Grand Prof</a></li>*/
/*                                 <li><a href="#">Comment ca marche ?</a></li>*/
/*                                 <li><a href="#">Contactez-nous</a></li>*/
/*                             </ul>*/
/*                         </div><!--/.nav-collapse -->*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-sm-3">*/
/* */
/*                         <div class="navbar-phone"><i class="fa fa-phone"></i> Appelez-nous: +237 697 818 740</div>*/
/* */
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
