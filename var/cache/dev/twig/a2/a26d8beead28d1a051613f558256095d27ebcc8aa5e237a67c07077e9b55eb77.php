<?php

/* LGPCoreBundle::dialog.html.twig */
class __TwigTemplate_54e2570d9eb4e38371adb7eb5f58d988900614b8398e6f48ad33147e30cccbd8 extends Twig_Template
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
        $__internal_5a4592c280d7bc885f37b97d66c19d6deae012b61a39896f030c1231035525a1 = $this->env->getExtension("native_profiler");
        $__internal_5a4592c280d7bc885f37b97d66c19d6deae012b61a39896f030c1231035525a1->enter($__internal_5a4592c280d7bc885f37b97d66c19d6deae012b61a39896f030c1231035525a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::dialog.html.twig"));

        // line 1
        echo "<!-- BEGIN # MODAL LOGIN -->
\t<div class=\"modal fade modal-login modal-border-transparent\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<button type=\"button\" class=\"btn btn-close close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"clear\"></div>

\t\t\t\t<!-- Begin # DIV Form -->
\t\t\t\t<div id=\"modal-login-form-wrapper\">

\t\t\t\t\t<!-- Begin # Login Form -->
\t\t\t\t\t<form id=\"login-form\">

\t\t\t\t\t\t<div class=\"modal-body pb-5\">

\t\t\t\t\t\t\t<h4 class=\"text-center heading mt-10 mb-20\">Connexion</h4>

\t\t\t\t\t\t\t<button class=\"btn btn-facebook btn-block\">Se connecter avec Facebook</button>

\t\t\t\t\t\t\t<div class=\"modal-seperator\">
\t\t\t\t\t\t\t\t<span>ou</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"login_username\" class=\"form-control\" placeholder=\"Email\" type=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"login_password\" class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"row gap-5\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block fa-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"remember_me_checkbox\" name=\"remember_me_checkbox\" class=\"checkbox\" value=\"First Choice\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"remember_me_checkbox\">Se Souvenir </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6 text-right\">
\t\t\t\t\t\t\t\t\t\t<button id=\"login_lost_btn\" type=\"button\" class=\"btn btn-link\">Mot de passe oublié ?</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal-footer\">

\t\t\t\t\t\t\t<div class=\"row gap-10\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 mb-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Connexion</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 mb-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block btn-inverse\" data-dismiss=\"modal\" aria-label=\"Close\">Annuler</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\tPas de compte ?
\t\t\t\t\t\t\t\t<button id=\"login_register_btn\" type=\"button\" class=\"btn btn-link\">Inscription</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<!-- End # Login Form -->

\t\t\t\t\t<!-- Begin | Lost Password Form -->
\t\t\t\t\t<form id=\"lost-form\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"modal-body pb-5\">

\t\t\t\t\t\t\t<h3 class=\"text-center heading mt-10 mb-20\">Mot de passe oublié</h3>
\t\t\t\t\t\t\t<div class=\"form-group mb-10\">
\t\t\t\t\t\t\t\t<input id=\"lost_email\" class=\"form-control\" type=\"text\" placeholder=\"Entrez votre Email\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<button id=\"lost_login_btn\" type=\"button\" class=\"btn btn-link\">Se connecter</button> ou
\t\t\t\t\t\t\t\t<button id=\"lost_register_btn\" type=\"button\" class=\"btn btn-link\">S'inscrire</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal-footer mt-10\">

\t\t\t\t\t\t\t<div class=\"row gap-10\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Envoyer</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-inverse btn-block\" data-dismiss=\"modal\" aria-label=\"Close\">Annuler</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</form>
\t\t\t\t\t<!-- End | Lost Password Form -->

\t\t\t\t\t<!-- Begin | Register Form -->
\t\t\t\t\t<form id=\"register-form\" style=\"display:none;\">

\t\t\t\t\t\t<div class=\"modal-body pb-5\">

\t\t\t\t\t\t\t<h3 class=\"text-center heading mt-10 mb-20\">Inscription</h3>

\t\t\t\t\t\t\t<button class=\"btn btn-facebook btn-block\">S'inscrire avec Facebook</button>

\t\t\t\t\t\t\t<div class=\"modal-seperator\">
\t\t\t\t\t\t\t\t<span>ou</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"register_username\" class=\"form-control\" type=\"text\" placeholder=\"Pseudo\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"register_email\" class=\"form-control\" type=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"register_password\" class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"register_password_confirm\" class=\"form-control\" type=\"password\" placeholder=\"Confirmer mot de passe\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal-footer mt-10\">

\t\t\t\t\t\t\t<div class=\"row gap-10\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 mb-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Inscription</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 mb-10\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-inverse btn-block\" data-dismiss=\"modal\" aria-label=\"Close\">Annuler</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\t\tAvez-vous déja un compte ? <button id=\"register_login_btn\" type=\"button\" class=\"btn btn-link\">Connexion</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</form>
\t\t\t\t\t<!-- End | Register Form -->

\t\t\t\t\t<!--  INCLUSION DU FORMULALIRE DE LOGIN DE FOS-->

\t\t\t\t\t";
        // line 156
        echo "
\t\t\t\t\t<!--  -->

\t\t\t\t</div>
\t\t\t\t<!-- End # DIV Form -->

\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END # MODAL LOGIN -->
";
        
        $__internal_5a4592c280d7bc885f37b97d66c19d6deae012b61a39896f030c1231035525a1->leave($__internal_5a4592c280d7bc885f37b97d66c19d6deae012b61a39896f030c1231035525a1_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::dialog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 156,  22 => 1,);
    }
}
/* <!-- BEGIN # MODAL LOGIN -->*/
/* 	<div class="modal fade modal-login modal-border-transparent" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">*/
/* 		<div class="modal-dialog">*/
/* 			<div class="modal-content">*/
/* */
/* 				<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">*/
/* 					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>*/
/* 				</button>*/
/* */
/* 				<div class="clear"></div>*/
/* */
/* 				<!-- Begin # DIV Form -->*/
/* 				<div id="modal-login-form-wrapper">*/
/* */
/* 					<!-- Begin # Login Form -->*/
/* 					<form id="login-form">*/
/* */
/* 						<div class="modal-body pb-5">*/
/* */
/* 							<h4 class="text-center heading mt-10 mb-20">Connexion</h4>*/
/* */
/* 							<button class="btn btn-facebook btn-block">Se connecter avec Facebook</button>*/
/* */
/* 							<div class="modal-seperator">*/
/* 								<span>ou</span>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<input id="login_username" class="form-control" placeholder="Email" type="email">*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<input id="login_password" class="form-control" placeholder="Mot de passe" type="password">*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<div class="row gap-5">*/
/* 									<div class="col-xs-6 col-sm-6 col-md-6">*/
/* 										<div class="checkbox-block fa-checkbox">*/
/* 											<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox">*/
/* 											<label class="" for="remember_me_checkbox">Se Souvenir </label>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-xs-6 col-sm-6 col-md-6 text-right">*/
/* 										<button id="login_lost_btn" type="button" class="btn btn-link">Mot de passe oublié ?</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 						<div class="modal-footer">*/
/* */
/* 							<div class="row gap-10">*/
/* 								<div class="col-xs-6 col-sm-6 mb-10">*/
/* 									<button type="submit" class="btn btn-primary btn-block">Connexion</button>*/
/* 								</div>*/
/* 								<div class="col-xs-6 col-sm-6 mb-10">*/
/* 									<button type="submit" class="btn btn-primary btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Annuler</button>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="text-left">*/
/* 								Pas de compte ?*/
/* 								<button id="login_register_btn" type="button" class="btn btn-link">Inscription</button>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* 					</form>*/
/* 					<!-- End # Login Form -->*/
/* */
/* 					<!-- Begin | Lost Password Form -->*/
/* 					<form id="lost-form" style="display:none;">*/
/* 						<div class="modal-body pb-5">*/
/* */
/* 							<h3 class="text-center heading mt-10 mb-20">Mot de passe oublié</h3>*/
/* 							<div class="form-group mb-10">*/
/* 								<input id="lost_email" class="form-control" type="text" placeholder="Entrez votre Email">*/
/* 							</div>*/
/* */
/* 							<div class="text-center">*/
/* 								<button id="lost_login_btn" type="button" class="btn btn-link">Se connecter</button> ou*/
/* 								<button id="lost_register_btn" type="button" class="btn btn-link">S'inscrire</button>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 						<div class="modal-footer mt-10">*/
/* */
/* 							<div class="row gap-10">*/
/* 								<div class="col-xs-6 col-sm-6">*/
/* 									<button type="submit" class="btn btn-primary btn-block">Envoyer</button>*/
/* 								</div>*/
/* 								<div class="col-xs-6 col-sm-6">*/
/* 									<button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Annuler</button>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 					</form>*/
/* 					<!-- End | Lost Password Form -->*/
/* */
/* 					<!-- Begin | Register Form -->*/
/* 					<form id="register-form" style="display:none;">*/
/* */
/* 						<div class="modal-body pb-5">*/
/* */
/* 							<h3 class="text-center heading mt-10 mb-20">Inscription</h3>*/
/* */
/* 							<button class="btn btn-facebook btn-block">S'inscrire avec Facebook</button>*/
/* */
/* 							<div class="modal-seperator">*/
/* 								<span>ou</span>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<input id="register_username" class="form-control" type="text" placeholder="Pseudo">*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<input id="register_email" class="form-control" type="email" placeholder="Email">*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<input id="register_password" class="form-control" type="password" placeholder="Mot de passe">*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<input id="register_password_confirm" class="form-control" type="password" placeholder="Confirmer mot de passe">*/
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 						<div class="modal-footer mt-10">*/
/* */
/* 							<div class="row gap-10">*/
/* 								<div class="col-xs-6 col-sm-6 mb-10">*/
/* 									<button type="submit" class="btn btn-primary btn-block">Inscription</button>*/
/* 								</div>*/
/* 								<div class="col-xs-6 col-sm-6 mb-10">*/
/* 									<button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Annuler</button>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="text-left">*/
/* 									Avez-vous déja un compte ? <button id="register_login_btn" type="button" class="btn btn-link">Connexion</button>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 					</form>*/
/* 					<!-- End | Register Form -->*/
/* */
/* 					<!--  INCLUSION DU FORMULALIRE DE LOGIN DE FOS-->*/
/* */
/* 					{# {{ render(controller('FOSUserBundle:Security:login')) }} #}*/
/* */
/* 					<!--  -->*/
/* */
/* 				</div>*/
/* 				<!-- End # DIV Form -->*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- END # MODAL LOGIN -->*/
/* */
