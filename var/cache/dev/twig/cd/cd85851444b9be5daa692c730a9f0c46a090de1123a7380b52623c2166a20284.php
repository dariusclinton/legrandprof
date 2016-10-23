<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_0820e62c57592b261e3a9db952fe7132552e24ad8c60beb69365346e09db42dd extends Twig_Template
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
        $__internal_749a6b66217c99a5870a5d5ae4a030dfde32fcf456d1c29493c87193f7a5820e = $this->env->getExtension("native_profiler");
        $__internal_749a6b66217c99a5870a5d5ae4a030dfde32fcf456d1c29493c87193f7a5820e->enter($__internal_749a6b66217c99a5870a5d5ae4a030dfde32fcf456d1c29493c87193f7a5820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"content-wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <h3 class=\"title-block-dash\">Mon Profil</h3>
        <ul class=\"menu-dash\">
          <li><a href=\"#\">modifier mon profil</a></li>
        </ul>
      </div>
      <div class=\"col-md-9\">
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Informations générales</div>
          <div class=\"notifications-content\">
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label_attr" => array(), "label" => "Photo de profil"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "</div>
              ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array(), "label" => "Nom"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'label', array("label_attr" => array(), "label" => "Prénoms"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenoms", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label', array("label_attr" => array(), "label" => "Date de naissance"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget', array("attr" => array()));
        echo "</div>
              ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label_attr" => array(), "label" => "Sexe"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array(), "label" => "Numéro de téléphone (+237)"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label', array("label_attr" => array(), "label" => "Pays de résidence"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            </div><br>
          </div>
        </div>

        ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 63
            echo "
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Informations de présentation</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array(), "label" => "Ville"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'label', array("label_attr" => array(), "label" => "Boite postale"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'label', array("label_attr" => array(), "label" => "Situation matrimoniale"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situationMatrimoniale", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'label', array("label_attr" => array(), "label" => "Niveau scolaire"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauScolaire", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'label', array("label_attr" => array(), "label" => "Nombre d'enfants"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEnfants", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'label', array("label_attr" => array(), "label" => "Présentation"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation", array()), 'errors');
            echo "
              </div><br>
              
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartierCibles", array()), 'label', array("label_attr" => array(), "label" => "Quartiers cibles pour les répétitions"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartierCibles", array()), 'widget');
            echo "</div>
                ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quartierCibles", array()), 'errors');
            echo "
";
            // line 103
            echo "              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'label', array("label_attr" => array(), "label" => "Profession"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profession", array()), 'errors');
            echo "
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Experiences professionnelles</div>
            <div class=\"notifications-content\">
              ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiencePros", array()), 'row');
            echo "
              <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_experience\">Ajouter une expérience</a>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Diplome</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Diplômes"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'widget');
            echo "</div>
                ";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomes", array()), 'errors');
            echo "
                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_diplome\">Ajouter un diplome</a>
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">CV</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 133
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CVFile", array()), 'label', array("label_attr" => array("class" => ""), "label" => "CV"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CVFile", array()), 'widget');
            echo "</div>
                ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CVFile", array()), 'errors');
            echo "
              </div><br>
            </div>
          </div>
        ";
        }
        // line 140
        echo "        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Mot de passe</div>
          <div class=\"notifications-content\">
            ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          </div>
        </div>
        <input type=\"submit\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\"/>

      </div>
    </div>
  </div>
</div>

";
        // line 153
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_749a6b66217c99a5870a5d5ae4a030dfde32fcf456d1c29493c87193f7a5820e->leave($__internal_749a6b66217c99a5870a5d5ae4a030dfde32fcf456d1c29493c87193f7a5820e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 153,  348 => 146,  342 => 143,  337 => 140,  329 => 135,  325 => 134,  321 => 133,  309 => 124,  305 => 123,  301 => 122,  290 => 114,  280 => 107,  276 => 106,  272 => 105,  268 => 103,  264 => 101,  260 => 100,  256 => 99,  249 => 95,  245 => 94,  241 => 93,  235 => 90,  231 => 89,  227 => 88,  221 => 85,  217 => 84,  213 => 83,  207 => 80,  203 => 79,  199 => 78,  193 => 75,  189 => 74,  185 => 73,  179 => 70,  175 => 69,  171 => 68,  164 => 63,  162 => 62,  154 => 57,  150 => 56,  146 => 55,  140 => 52,  136 => 51,  132 => 50,  126 => 47,  122 => 46,  118 => 45,  112 => 42,  108 => 41,  104 => 40,  98 => 37,  94 => 36,  90 => 35,  84 => 32,  80 => 31,  76 => 30,  70 => 27,  66 => 26,  62 => 25,  56 => 22,  52 => 21,  48 => 20,  29 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
{{ form_errors(form) }}

<div class=\"content-wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <h3 class=\"title-block-dash\">Mon Profil</h3>
        <ul class=\"menu-dash\">
          <li><a href=\"#\">modifier mon profil</a></li>
        </ul>
      </div>
      <div class=\"col-md-9\">
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Informations générales</div>
          <div class=\"notifications-content\">
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.image, \"Photo de profil\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.image) }}</div>
              {{ form_errors(form.image) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.nom, \"Nom\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.nom, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.nom) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.prenoms, \"Prénoms\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.prenoms, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.prenoms) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.dateNaissance, \"Date de naissance\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.dateNaissance, {'attr': {}}) }}</div>
              {{ form_errors(form.dateNaissance) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.sexe, \"Sexe\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.sexe, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.sexe) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.telephone, \"Numéro de téléphone (+237)\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.telephone, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.telephone) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.pays, \"Pays de résidence\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.pays, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.pays) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.email, \"Adresse email\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.email) }}
            </div><br>
          </div>
        </div>

        {% if is_granted('ROLE_PROF') %}

          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Informations de présentation</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.ville, \"Ville\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.ville, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.ville) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.boitePostale, \"Boite postale\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.boitePostale, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.boitePostale) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.situationMatrimoniale, \"Situation matrimoniale\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.situationMatrimoniale, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.situationMatrimoniale) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.niveauScolaire, \"Niveau scolaire\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.niveauScolaire, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.niveauScolaire) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.nombreEnfants, \"Nombre d'enfants\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.nombreEnfants, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.nombreEnfants) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.presentation, \"Présentation\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.presentation, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.presentation) }}
              </div><br>
              
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.quartierCibles, \"Quartiers cibles pour les répétitions\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.quartierCibles) }}</div>
                {{ form_errors(form.quartierCibles) }}
{#                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_quartier\">Ajouter un quartier</a>#}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.profession, \"Profession\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.profession, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.profession) }}
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Experiences professionnelles</div>
            <div class=\"notifications-content\">
              {{ form_row(form.experiencePros) }}
              <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_experience\">Ajouter une expérience</a>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Diplome</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.diplomes, \"Diplômes\", {'label_attr': {'class': ''}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.diplomes) }}</div>
                {{ form_errors(form.diplomes) }}
                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_diplome\">Ajouter un diplome</a>
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">CV</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.CVFile, \"CV\", {'label_attr': {'class': ''}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.CVFile) }}</div>
                {{ form_errors(form.CVFile) }}
              </div><br>
            </div>
          </div>
        {% endif %}
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Mot de passe</div>
          <div class=\"notifications-content\">
            {{ form_rest(form) }}
          </div>
        </div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" class=\"btn btn-primary pull-right\"/>

      </div>
    </div>
  </div>
</div>

{{ form_end(form) }}
";
    }
}
