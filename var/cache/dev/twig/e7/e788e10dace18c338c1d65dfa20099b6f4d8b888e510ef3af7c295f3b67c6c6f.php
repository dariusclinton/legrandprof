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
        $__internal_1128792c402351e34b4b0bda390e21878721adf8da4c919994321614ec2c0d64 = $this->env->getExtension("native_profiler");
        $__internal_1128792c402351e34b4b0bda390e21878721adf8da4c919994321614ec2c0d64->enter($__internal_1128792c402351e34b4b0bda390e21878721adf8da4c919994321614ec2c0d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"content-wrapper\">
<<<<<<< HEAD
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"profile-block\">
                    ";
        // line 9
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 10
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
                    ";
        }
        // line 12
        echo "                </div>
                <div class=\"infos-block\">
                    <h2>";
        // line 14
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
        // line 25
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 26
            echo "                        <h1>Hello Prof !</h1>
                    ";
        } else {
            // line 28
            echo "                        <h1>Hello Parent !</h1>
                    ";
        }
        // line 30
        echo "                </div>
                <div class=\"notifications-block\">
                    <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                    <p>Nom: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
                    <p>Prenoms: ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
                    <p>Date de naissance: ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
                    <p>Sexe: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()), "html", null, true);
        echo "</p>
                    <p>Telephone: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</p>
                    <p>Pays: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>
                    ";
        // line 40
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 41
            echo "                        <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
                        <p>Quartier: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartier", array()), "html", null, true);
            echo "</p>
                        <p>boite Postale: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
                        <p>Situation matrimoniale: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
                        <p>Niveau scolaire: ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
                        <p>Nombre d'enfants: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
                        <p>Presentation: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
                        <p>Profession: ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>

                        <h3>Experience professionnelle</h3>
                        <ul>
                            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 53
                echo "                                <li>
                                    ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                                    ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                                    ";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                                    ";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                                    ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                        </ul>

                        <h3>Diplomes</h3>
                        <ul>
                            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 66
                echo "                                <li>
                                    ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "specialite", array()), "html", null, true);
                echo "
                                    ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "annee", array()), "html", null, true);
                echo "
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                        </ul>
                    ";
        }
        // line 74
        echo "
                    ";
        // line 75
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        echo "
                </div>

            </div>
        </div>
    </div>
=======
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <div class=\"profile-block\">
          ";
        // line 86
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 87
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
          ";
        }
        // line 89
        echo "        </div>
        <div class=\"infos-block\">
          <h2>";
        // line 91
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
        // line 102
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 103
            echo "            <h1>Hello Prof !</h1>
          ";
        } else {
            // line 105
            echo "            <h1>Hello Parent !</h1>
          ";
        }
        // line 107
        echo "        </div>
        <div class=\"notifications-block\">
          <p>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
          <p>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
          <p>Nom: ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
          <p>Prenoms: ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
          <p>Date de naissance: ";
        // line 113
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
          <p>Sexe: ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()), "html", null, true);
        echo "</p>
          <p>Telephone: ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</p>
          <p>Pays: ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>
          ";
        // line 117
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 118
            echo "            <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
            <p>Quartier: ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartier", array()), "html", null, true);
            echo "</p>
            <p>boite Postale: ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
            <p>Situation matrimoniale: ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
            <p>Niveau scolaire: ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
            <p>Nombre d'enfants: ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
            <p>Presentation: ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
            <p>Profession: ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>

            <h3>Experience professionnelle</h3>
            <ul>
              ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 130
                echo "                <li>
                  ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                  ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                  ";
                // line 133
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                  ";
                // line 134
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                  ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "            </ul>

            <h3>Diplomes</h3>
            <ul>
              ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 143
                echo "                <li>
                  ";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                  ";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "specialite", array()), "html", null, true);
                echo "
                  ";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "annee", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "            </ul>

            <a href='";
            // line 151
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_avis");
            echo "' class=\"btn btn-primary\">Avis</a>
          ";
        }
        // line 153
        echo "          
          
          ";
        // line 155
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 156
            echo "
            <a href='";
            // line 157
            echo $this->env->getExtension('routing')->getPath("lgp_user_parent_avis");
            echo "' class=\"btn btn-primary\">Avis</a>

          ";
        }
        // line 160
        echo "
          <a href='";
        // line 161
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "' class=\"btn btn-primary\">Messages</a>
          
          
          ";
        // line 164
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        echo "
        </div>

      </div>
    </div>
  </div>
>>>>>>> bce27a7e51783044c0f5dfcae8d1f93726afbdab
</div>


";
        
        $__internal_1128792c402351e34b4b0bda390e21878721adf8da4c919994321614ec2c0d64->leave($__internal_1128792c402351e34b4b0bda390e21878721adf8da4c919994321614ec2c0d64_prof);

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
        return array (  441 => 164,  435 => 161,  432 => 160,  426 => 157,  423 => 156,  421 => 155,  417 => 153,  412 => 151,  408 => 149,  399 => 146,  395 => 145,  391 => 144,  388 => 143,  384 => 142,  378 => 138,  369 => 135,  365 => 134,  361 => 133,  357 => 132,  353 => 131,  350 => 130,  346 => 129,  339 => 125,  335 => 124,  331 => 123,  327 => 122,  323 => 121,  319 => 120,  315 => 119,  310 => 118,  308 => 117,  304 => 116,  300 => 115,  296 => 114,  292 => 113,  288 => 112,  284 => 111,  278 => 110,  272 => 109,  268 => 107,  264 => 105,  260 => 103,  258 => 102,  242 => 91,  238 => 89,  232 => 87,  230 => 86,  216 => 75,  213 => 74,  209 => 72,  200 => 69,  196 => 68,  192 => 67,  189 => 66,  185 => 65,  179 => 61,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  154 => 54,  151 => 53,  147 => 52,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  120 => 43,  116 => 42,  111 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  79 => 33,  73 => 32,  69 => 30,  65 => 28,  61 => 26,  59 => 25,  43 => 14,  39 => 12,  33 => 10,  31 => 9,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="content-wrapper">*/
/* <<<<<<< HEAD*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <div class="profile-block">*/
/*                     {% if app.user.image is not null %}*/
/*                         <img src="{{ asset(app.user.image.webPath) }}" class="img-responsive">*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="infos-block">*/
/*                     <h2>{{ app.user.prenoms }} {{ app.user.nom }}</h2>*/
/*                     <p>*/
/*                         <span class="on"><i class="fa fa-check"></i></span>&nbsp;&nbsp;Profil complet<br>*/
/*                         <span class="off"><i class="fa fa-remove"></i></span> &nbsp;&nbsp;Profil recommandé*/
/*                     </p>*/
/*                     <center><a href="#" class="btn btn-primary">Compléter profil</a>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-9">*/
/*                 <div class="notifications-block">*/
/*                     {% if user.presentation is defined %}*/
/*                         <h1>Hello Prof !</h1>*/
/*                     {% else %}*/
/*                         <h1>Hello Parent !</h1>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="notifications-block">*/
/*                     <p>{{ 'profile.show.username'|trans }}: {{ app.user.username }}</p>*/
/*                     <p>{{ 'profile.show.email'|trans }}: {{ app.user.email }}</p>*/
/*                     <p>Nom: {{ app.user.nom }}</p>*/
/*                     <p>Prenoms: {{ app.user.prenoms }}</p>*/
/*                     <p>Date de naissance: {{ app.user.dateNaissance | date('d/m/y') }}</p>*/
/*                     <p>Sexe: {{ app.user.sexe }}</p>*/
/*                     <p>Telephone: {{ app.user.numTelephone }}</p>*/
/*                     <p>Pays: {{ app.user.pays }}</p>*/
/*                     {% if user.presentation is defined %}*/
/*                         <p>Ville: {{ app.user.ville }}</p>*/
/*                         <p>Quartier: {{ app.user.quartier }}</p>*/
/*                         <p>boite Postale: {{ app.user.boitePostale }}</p>*/
/*                         <p>Situation matrimoniale: {{ app.user.situationMatrimoniale }}</p>*/
/*                         <p>Niveau scolaire: {{ app.user.niveauScolaire }}</p>*/
/*                         <p>Nombre d'enfants: {{ app.user.nombreEnfants }}</p>*/
/*                         <p>Presentation: {{ app.user.presentation }}</p>*/
/*                         <p>Profession: {{ app.user.profession }}</p>*/
/* */
/*                         <h3>Experience professionnelle</h3>*/
/*                         <ul>*/
/*                             {% for experience in app.user.experiencePros %}*/
/*                                 <li>*/
/*                                     {{ experience.etablissement }}*/
/*                                     {{ experience.poste }}*/
/*                                     {{ experience.dateDebut | date('d/m/y') }}*/
/*                                     {{ experience.dateFin | date('d/m/y') }}*/
/*                                     {{ experience.description }}*/
/*                                 </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/* */
/*                         <h3>Diplomes</h3>*/
/*                         <ul>*/
/*                             {% for diplome in app.user.diplomes %}*/
/*                                 <li>*/
/*                                     {{ diplome.intitule }}*/
/*                                     {{ diplome.specialite }}*/
/*                                     {{ diplome.annee }}*/
/*                                 </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/* */
/*                     {{ dump(app.user)}}*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* =======*/
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
/* >>>>>>> bce27a7e51783044c0f5dfcae8d1f93726afbdab*/
/* </div>*/
/* */
/* */
/* */
