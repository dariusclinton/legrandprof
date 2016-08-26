<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ccac642479700b1bc9d123d08a6e2abdd721ab521c5e2cbd50ecbfb99ea6f972 extends Twig_Template
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
        $__internal_af4b1fa562fe7c4c45d09b852e0e9c08e412194d417c84cd99d081935a7fc14e = $this->env->getExtension("native_profiler");
        $__internal_af4b1fa562fe7c4c45d09b852e0e9c08e412194d417c84cd99d081935a7fc14e->enter($__internal_af4b1fa562fe7c4c45d09b852e0e9c08e412194d417c84cd99d081935a7fc14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"content-wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <div class=\"profile-block\">
          ";
        // line 8
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 9
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
          ";
        }
        // line 11
        echo "        </div>
        <div class=\"infos-block\">
          <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
          <p>
            <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
            <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
          </p>
          <center><a href=\"#\" class=\"btn btn-primary\">Compléter profil</a>

        </div>
      </div>
      <div class=\"col-md-9\">
        <div class=\"notifications-block\">
          ";
        // line 24
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 25
            echo "            <h1>Hello Prof !</h1>
          ";
        } else {
            // line 27
            echo "            <h1>Hello Parent !</h1>
          ";
        }
        // line 29
        echo "        </div>
        <div class=\"notifications-block\">
          <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
          <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
          <p>Nom: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
          <p>Prenoms: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
          <p>Date de naissance: ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
          <p>Sexe: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()), "html", null, true);
        echo "</p>
          <p>Telephone: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</p>
          <p>Pays: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>
          ";
        // line 39
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 40
            echo "            <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
            <p>Quartier: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartier", array()), "html", null, true);
            echo "</p>
            <p>boite Postale: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
            <p>Situation matrimoniale: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
            <p>Niveau scolaire: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
            <p>Nombre d'enfants: ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
            <p>Presentation: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
            <p>Profession: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>

            <h3>Experience professionnelle</h3>
            <ul>
              ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 52
                echo "                <li>
                  ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                  ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                  ";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                  ";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                  ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </ul>

            <h3>Diplomes</h3>
            <ul>
              ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 65
                echo "                <li>
                  ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                  ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "specialite", array()), "html", null, true);
                echo "
                  ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "annee", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </ul>

            <a href='";
            // line 73
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_avis");
            echo "' class=\"btn btn-primary\">Avis</a>
          ";
        }
        // line 75
        echo "          
          
          ";
        // line 77
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 78
            echo "
            <a href='";
            // line 79
            echo $this->env->getExtension('routing')->getPath("lgp_user_parent_avis");
            echo "' class=\"btn btn-primary\">Avis</a>

          ";
        }
        // line 82
        echo "
          <a href='";
        // line 83
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "' class=\"btn btn-primary\">Messages</a>
          
          
          ";
        // line 86
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        echo "
        </div>

      </div>
    </div>
  </div>
</div>
";
        
        $__internal_af4b1fa562fe7c4c45d09b852e0e9c08e412194d417c84cd99d081935a7fc14e->leave($__internal_af4b1fa562fe7c4c45d09b852e0e9c08e412194d417c84cd99d081935a7fc14e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 86,  235 => 83,  232 => 82,  226 => 79,  223 => 78,  221 => 77,  217 => 75,  212 => 73,  208 => 71,  199 => 68,  195 => 67,  191 => 66,  188 => 65,  184 => 64,  178 => 60,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  153 => 53,  150 => 52,  146 => 51,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  110 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  78 => 32,  72 => 31,  68 => 29,  64 => 27,  60 => 25,  58 => 24,  42 => 13,  38 => 11,  32 => 9,  30 => 8,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="content-wrapper">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-3">*/
/*         <div class="profile-block">*/
/*           {% if app.user.image is not null %}*/
/*             <img src="{{ asset(app.user.image.webPath) }}" class="img-responsive">*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="infos-block">*/
/*           <h2>{{ app.user.prenoms }} {{ app.user.nom }}</h2>*/
/*           <p>*/
/*             <span class="on"><i class="fa fa-check"></i></span>&nbsp;&nbsp;Profil complet<br>*/
/*             <span class="off"><i class="fa fa-remove"></i></span> &nbsp;&nbsp;Profil recommandé*/
/*           </p>*/
/*           <center><a href="#" class="btn btn-primary">Compléter profil</a>*/
/* */
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9">*/
/*         <div class="notifications-block">*/
/*           {% if user.presentation is defined %}*/
/*             <h1>Hello Prof !</h1>*/
/*           {% else %}*/
/*             <h1>Hello Parent !</h1>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="notifications-block">*/
/*           <p>{{ 'profile.show.username'|trans }}: {{ app.user.username }}</p>*/
/*           <p>{{ 'profile.show.email'|trans }}: {{ app.user.email }}</p>*/
/*           <p>Nom: {{ app.user.nom }}</p>*/
/*           <p>Prenoms: {{ app.user.prenoms }}</p>*/
/*           <p>Date de naissance: {{ app.user.dateNaissance | date('d/m/y') }}</p>*/
/*           <p>Sexe: {{ app.user.sexe }}</p>*/
/*           <p>Telephone: {{ app.user.numTelephone }}</p>*/
/*           <p>Pays: {{ app.user.pays }}</p>*/
/*           {% if user.presentation is defined %}*/
/*             <p>Ville: {{ app.user.ville }}</p>*/
/*             <p>Quartier: {{ app.user.quartier }}</p>*/
/*             <p>boite Postale: {{ app.user.boitePostale }}</p>*/
/*             <p>Situation matrimoniale: {{ app.user.situationMatrimoniale }}</p>*/
/*             <p>Niveau scolaire: {{ app.user.niveauScolaire }}</p>*/
/*             <p>Nombre d'enfants: {{ app.user.nombreEnfants }}</p>*/
/*             <p>Presentation: {{ app.user.presentation }}</p>*/
/*             <p>Profession: {{ app.user.profession }}</p>*/
/* */
/*             <h3>Experience professionnelle</h3>*/
/*             <ul>*/
/*               {% for experience in app.user.experiencePros %}*/
/*                 <li>*/
/*                   {{ experience.etablissement }}*/
/*                   {{ experience.poste }}*/
/*                   {{ experience.dateDebut | date('d/m/y') }}*/
/*                   {{ experience.dateFin | date('d/m/y') }}*/
/*                   {{ experience.description }}*/
/*                 </li>*/
/*               {% endfor %}*/
/*             </ul>*/
/* */
/*             <h3>Diplomes</h3>*/
/*             <ul>*/
/*               {% for diplome in app.user.diplomes %}*/
/*                 <li>*/
/*                   {{ diplome.intitule }}*/
/*                   {{ diplome.specialite }}*/
/*                   {{ diplome.annee }}*/
/*                 </li>*/
/*               {% endfor %}*/
/*             </ul>*/
/* */
/*             <a href='{{ path('lgp_user_prof_avis') }}' class="btn btn-primary">Avis</a>*/
/*           {% endif %}*/
/*           */
/*           */
/*           {% if user.presentation is not defined %}*/
/* */
/*             <a href='{{ path('lgp_user_parent_avis') }}' class="btn btn-primary">Avis</a>*/
/* */
/*           {% endif%}*/
/* */
/*           <a href='{{ path('lgp_user_message_send') }}' class="btn btn-primary">Messages</a>*/
/*           */
/*           */
/*           {{ dump(app.user)}}*/
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
