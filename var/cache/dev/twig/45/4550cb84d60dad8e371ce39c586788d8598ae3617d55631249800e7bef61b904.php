<?php

/* @LGPUser/Security/login.html.twig */
class __TwigTemplate_47d1c58e66a9587ede063bd4e5d8d406dbacb7dbe005383442725811650c9bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "@LGPUser/Security/login.html.twig", 1);
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
        $__internal_eb0fb97c6c3a9cf639924e0846735c3d80a4a17f45d963d0a8711a58d2e73d40 = $this->env->getExtension("native_profiler");
        $__internal_eb0fb97c6c3a9cf639924e0846735c3d80a4a17f45d963d0a8711a58d2e73d40->enter($__internal_eb0fb97c6c3a9cf639924e0846735c3d80a4a17f45d963d0a8711a58d2e73d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb0fb97c6c3a9cf639924e0846735c3d80a4a17f45d963d0a8711a58d2e73d40->leave($__internal_eb0fb97c6c3a9cf639924e0846735c3d80a4a17f45d963d0a8711a58d2e73d40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3ae881f4566a69f2d98c3eb70d36aa3cd30ff93539d283677eb0352fafbc89a = $this->env->getExtension("native_profiler");
        $__internal_b3ae881f4566a69f2d98c3eb70d36aa3cd30ff93539d283677eb0352fafbc89a->enter($__internal_b3ae881f4566a69f2d98c3eb70d36aa3cd30ff93539d283677eb0352fafbc89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3ae881f4566a69f2d98c3eb70d36aa3cd30ff93539d283677eb0352fafbc89a->leave($__internal_b3ae881f4566a69f2d98c3eb70d36aa3cd30ff93539d283677eb0352fafbc89a_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c221d8f2dca59ea541b3e42b7c9d592fe187862405284d0e9eb4d207e73c146f = $this->env->getExtension("native_profiler");
        $__internal_c221d8f2dca59ea541b3e42b7c9d592fe187862405284d0e9eb4d207e73c146f->enter($__internal_c221d8f2dca59ea541b3e42b7c9d592fe187862405284d0e9eb4d207e73c146f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "<div class=\"breadcrumb-wrapper bg-light-2\">
\t\t\t\t
        <div class=\"container\">

                <ol class=\"breadcrumb-list booking-step\">
                        <li><a href=\"#\">Accueil</a></li>
                        <li><span>Connexion</span></li>
                </ol>

        </div>

</div>
\t\t\t
<div class=\"content-wrapper\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "                    <div class=\"alert alert-danger\">";
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
                            <input type=\"text\" id=\"login_username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"> 
                        </div>
                        <div class=\"form-group\"> 
                            <input type=\"password\" id=\"login_password\" name=\"_password\" required=\"required\" class=\"form-control\"> 
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row gap-5\">
                                <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                    <div class=\"checkbox-block fa-checkbox\"> 
                                        <input id=\"remember_me_checkbox1\" name=\"remember_me_checkbox\" class=\"checkbox\" value=\"First Choice\" type=\"checkbox\"> 
                                        <label class=\"\" for=\"remember_me_checkbox1\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-6 text-right\"> 
                                    <a href=\"#\" class=\"btn btn-link\">Mot de passe oublié ?</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=\"modal-footer\">

                        <div class=\"row gap-10\">
                            <div class=\"col-xs-6 col-sm-6 mb-10\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
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
                            <a href=\"#\" class=\"btn btn-link\">Je suis Parent/Apprenant</a> ou
                            <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("lgp_user_become_prof");
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
        
        $__internal_c221d8f2dca59ea541b3e42b7c9d592fe187862405284d0e9eb4d207e73c146f->leave($__internal_c221d8f2dca59ea541b3e42b7c9d592fe187862405284d0e9eb4d207e73c146f_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 80,  145 => 74,  139 => 71,  121 => 56,  107 => 45,  94 => 35,  89 => 33,  85 => 31,  79 => 29,  77 => 28,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPUserBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   Login - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <div class="breadcrumb-wrapper bg-light-2">*/
/* 				*/
/*         <div class="container">*/
/* */
/*                 <ol class="breadcrumb-list booking-step">*/
/*                         <li><a href="#">Accueil</a></li>*/
/*                         <li><span>Connexion</span></li>*/
/*                 </ol>*/
/* */
/*         </div>*/
/* */
/* </div>*/
/* 			*/
/* <div class="content-wrapper">*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 {% if error %}*/
/*                     <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/*                 */
/*                 <!-- Begin # Login Form -->*/
/*                 <form  action="{{ path("fos_user_security_check") }}" method="post" style="margin-top:-30px;">*/
/*                     */
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     */
/*                     <div class="modal-body pb-5">*/
/* */
/*                         <h4 class="text-center heading mt-10 mb-20">Connexion</h4>*/
/* */
/*                         <div class="modal-seperator">*/
/*                         </div>*/
/* */
/*                         <div class="form-group"> */
/*                             <input type="text" id="login_username" class="form-control" name="_username" value="{{ last_username }}" required="required"> */
/*                         </div>*/
/*                         <div class="form-group"> */
/*                             <input type="password" id="login_password" name="_password" required="required" class="form-control"> */
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row gap-5">*/
/*                                 <div class="col-xs-6 col-sm-6 col-md-6">*/
/*                                     <div class="checkbox-block fa-checkbox"> */
/*                                         <input id="remember_me_checkbox1" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> */
/*                                         <label class="" for="remember_me_checkbox1">{{ 'security.login.remember_me'|trans }} </label>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-sm-6 col-md-6 text-right"> */
/*                                     <a href="#" class="btn btn-link">Mot de passe oublié ?</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="modal-footer">*/
/* */
/*                         <div class="row gap-10">*/
/*                             <div class="col-xs-6 col-sm-6 mb-10">*/
/*                                 <button type="submit" class="btn btn-primary btn-block">{{ 'security.login.submit'|trans }}</button>*/
/*                             </div>*/
/*                             <div class="col-xs-6 col-sm-6 mb-10">*/
/*                                 <a href="{{ path('lgp_core_homepage') }}" class="btn btn-primary btn-block btn-inverse">Annuler</a>*/
/*                             </div>*/
/*                         </div><br>*/
/*                         <div class="text-center">*/
/*                             Pas de compte ? Inscription <br>*/
/*                             <a href="#" class="btn btn-link">Je suis Parent/Apprenant</a> ou*/
/*                             <a href="{{ path('lgp_user_become_prof') }}" class="btn btn-link">Je suis Prof</a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </form>*/
/*                 <!-- End # Login Form -->*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
