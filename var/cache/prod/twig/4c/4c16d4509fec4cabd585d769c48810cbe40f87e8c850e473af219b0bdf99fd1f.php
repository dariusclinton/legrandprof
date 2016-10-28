<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f5c10544f0ce907bfc0b3980be9c0a25d07b9d9b16be3646c3c3ae162edfb7b9 extends Twig_Template
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
        // line 2
        echo "
<div class=\"content-wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <div class=\"profile-block\">
          ";
        // line 8
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()))) {
            // line 9
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
          ";
        } else {
            // line 11
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
            echo "\"
                 alt=\"Tour Package\"/>
          ";
        }
        // line 14
        echo "        </div>
        <div class=\"infos-block\">
          <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
          <p>
            <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
            <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
          </p>
          <center>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">Compléter profil</a>
            <br><br>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-primary btn-sm\">Modifier le mot
              de passe</a>
          </center>

        </div>
      </div>

      <div class=\"col-md-9\">
        <div class=\"alert alert-warning\">
          <b>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avanceeProfil", array()), "html", null, true);
        echo "% de remplissage du profil</b><br>
          <p>Veuillez compléter votre profil pour être le plus sollicité par les apprenants/parents</p>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">
            Hello
            ";
        // line 39
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()))) {
            // line 40
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 42
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
            echo "
            ";
        }
        // line 44
        echo "          </div>
          <div class=\"notifications-content\">
            <h1>
              Hello
              ";
        // line 48
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()))) {
            // line 49
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
            echo "
              ";
        } else {
            // line 51
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
            echo "
              ";
        }
        // line 53
        echo "            </h1>
          </div>
        </div>

        <div class=\"notifications-block\">

          <div class=\"notifications-header\">
            Qui suis je ?
          </div>
          <div class=\"notifications-content\">
            <p>Email: ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "</p>
            <p>Nom: ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
            <p>Prenoms: ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
            <p>Date de naissance: ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
            <p>
              Sexe:
              ";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "sexe", array()) == "m")) {
            // line 70
            echo "                Masculin
              ";
        } else {
            // line 72
            echo "                Féminin
              ";
        }
        // line 74
        echo "            </p>
            <p>Telephone: ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "telephone", array()), "html", null, true);
        echo "</p>
            <p>Pays: ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

            ";
        // line 79
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
            // line 80
            echo "            <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
            <p>boite Postale: ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
            <p>Situation matrimoniale: ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
            <p>Niveau scolaire: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
            <p>Nombre d'enfants: ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
            <p>Presentation: ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
            <p>Profession: ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "profession", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Quartiers dans lesquels je suis disposé à donner cours</div>
          <div class=\"notifications-content\">
            <ul>
              ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "quartierCibles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
                // line 94
                echo "                <li>
                  ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "affichage", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </ul>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Expérience professionnelle</div>
          <div class=\"notifications-content\">
            <ul>
              ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 106
                echo "                <li>
                  ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                  à
                  ";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                  de
                  ";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                  à
                  ";
                // line 113
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                  ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            </ul>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Diplômes</div>
          <div class=\"notifications-content\">
            <ul>
              ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 125
                echo "                <li>
                  ";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                  ";
                // line 127
                if ( !(null === $this->getAttribute($context["diplome"], "fileName", array()))) {
                    // line 128
                    echo "                    (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["diplome"], "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">voir</a>)
                  ";
                }
                // line 130
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </ul>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">CV</div>
          <div class=\"notifications-content\">
            ";
            // line 138
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()))) {
                // line 139
                echo "              ";
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()), "fileName", array()))) {
                    // line 140
                    echo "                (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()), "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">Voir le CV</a>)
              ";
                }
                // line 142
                echo "            ";
            }
            // line 143
            echo "            <br/>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Rémunérations LeGrandProf <span
                class=\"badge\">";
            // line 148
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "remunerations", array())), "html", null, true);
            echo "</span></div>
          <div class=\"notifications-content\">
          </div>
        </div>
        <div>
          ";
        }
        // line 154
        echo "
          ";
        // line 156
        echo "        </div>


      </div>
    </div>
  </div>
</div>";
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
        return array (  343 => 156,  340 => 154,  331 => 148,  324 => 143,  321 => 142,  315 => 140,  312 => 139,  310 => 138,  302 => 132,  295 => 130,  289 => 128,  287 => 127,  283 => 126,  280 => 125,  276 => 124,  267 => 117,  258 => 114,  254 => 113,  249 => 111,  244 => 109,  239 => 107,  236 => 106,  232 => 105,  223 => 98,  214 => 95,  211 => 94,  207 => 93,  197 => 86,  193 => 85,  189 => 84,  185 => 83,  181 => 82,  177 => 81,  172 => 80,  169 => 79,  164 => 76,  160 => 75,  157 => 74,  153 => 72,  149 => 70,  147 => 69,  141 => 66,  137 => 65,  133 => 64,  129 => 63,  117 => 53,  111 => 51,  105 => 49,  103 => 48,  97 => 44,  91 => 42,  85 => 40,  83 => 39,  74 => 33,  62 => 24,  57 => 22,  46 => 16,  42 => 14,  35 => 11,  29 => 9,  27 => 8,  19 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
