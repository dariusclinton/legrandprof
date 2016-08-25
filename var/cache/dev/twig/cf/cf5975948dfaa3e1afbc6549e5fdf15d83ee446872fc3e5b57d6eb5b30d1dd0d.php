<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_38b884d6d344a06003988717b57481f21363303735bb90268b2af590a1bde820 extends Twig_Template
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
        $__internal_0d68767999a10533ad66993732b43c081f1e4d29596c5fa9fc5c87d4bb86c832 = $this->env->getExtension("native_profiler");
        $__internal_0d68767999a10533ad66993732b43c081f1e4d29596c5fa9fc5c87d4bb86c832->enter($__internal_0d68767999a10533ad66993732b43c081f1e4d29596c5fa9fc5c87d4bb86c832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
  <div class=\"row\">
    <div class=\"col-md-4\">
      ";
        // line 6
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 7
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
      ";
        }
        // line 9
        echo "    </div>

    <div class=\"col-sm-8\">
      ";
        // line 12
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 13
            echo "        <h1>Hello Prof !</h1>
      ";
        } else {
            // line 15
            echo "        <h1>Hello Parent !</h1>
      ";
        }
        // line 17
        echo "
      <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
      <p>Nom: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
      <p>Prenoms: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
      <p>Date de naissance: ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
      <p>Sexe: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()), "html", null, true);
        echo "</p>
      <p>Telephone: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</p>
      <p>Pays: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

      ";
        // line 26
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 27
            echo "        <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
        <p>Quartier: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartier", array()), "html", null, true);
            echo "</p>
        <p>boite Postale: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
        <p>Situation matrimoniale: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
        <p>Niveau scolaire: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
        <p>Nombre d'enfants: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
        <p>Presentation: ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
        <p>Profession: ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>

        <h3>Experience professionnelle</h3>
        <ul>
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 39
                echo "            <li>
              ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
              ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
              ";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
              ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
              ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </ul>

        <h3>Diplomes</h3>
        <ul>
          ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 52
                echo "            <li>
              ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
              ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "specialite", array()), "html", null, true);
                echo "
              ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "annee", array()), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </ul>

        <a href='";
            // line 60
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_avis");
            echo "' class=\"btn btn-primary\">Avis</a>
        
      ";
        }
        // line 63
        echo "      
      ";
        // line 64
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 65
            echo "        
        <a href='";
            // line 66
            echo $this->env->getExtension('routing')->getPath("lgp_user_parent_avis");
            echo "' class=\"btn btn-primary\">Avis</a>
        
      ";
        }
        // line 69
        echo "      
      <a href='";
        // line 70
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "' class=\"btn btn-primary\">Messages</a>

      ";
        // line 72
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        echo "
    </div>
  </div>
</div>
";
        
        $__internal_0d68767999a10533ad66993732b43c081f1e4d29596c5fa9fc5c87d4bb86c832->leave($__internal_0d68767999a10533ad66993732b43c081f1e4d29596c5fa9fc5c87d4bb86c832_prof);

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
        return array (  217 => 72,  212 => 70,  209 => 69,  203 => 66,  200 => 65,  198 => 64,  195 => 63,  189 => 60,  185 => 58,  176 => 55,  172 => 54,  168 => 53,  165 => 52,  161 => 51,  155 => 47,  146 => 44,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  127 => 39,  123 => 38,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  87 => 27,  85 => 26,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  54 => 18,  51 => 17,  47 => 15,  43 => 13,  41 => 12,  36 => 9,  30 => 7,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*   <div class="row">*/
/*     <div class="col-md-4">*/
/*       {% if app.user.image is not null %}*/
/*         <img src="{{ asset(app.user.image.webPath) }}" class="img-responsive">*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     <div class="col-sm-8">*/
/*       {% if user.presentation is defined %}*/
/*         <h1>Hello Prof !</h1>*/
/*       {% else %}*/
/*         <h1>Hello Parent !</h1>*/
/*       {% endif %}*/
/* */
/*       <p>{{ 'profile.show.email'|trans }}: {{ app.user.email }}</p>*/
/*       <p>Nom: {{ app.user.nom }}</p>*/
/*       <p>Prenoms: {{ app.user.prenoms }}</p>*/
/*       <p>Date de naissance: {{ app.user.dateNaissance | date('d/m/y') }}</p>*/
/*       <p>Sexe: {{ app.user.sexe }}</p>*/
/*       <p>Telephone: {{ app.user.numTelephone }}</p>*/
/*       <p>Pays: {{ app.user.pays }}</p>*/
/* */
/*       {% if user.presentation is defined %}*/
/*         <p>Ville: {{ app.user.ville }}</p>*/
/*         <p>Quartier: {{ app.user.quartier }}</p>*/
/*         <p>boite Postale: {{ app.user.boitePostale }}</p>*/
/*         <p>Situation matrimoniale: {{ app.user.situationMatrimoniale }}</p>*/
/*         <p>Niveau scolaire: {{ app.user.niveauScolaire }}</p>*/
/*         <p>Nombre d'enfants: {{ app.user.nombreEnfants }}</p>*/
/*         <p>Presentation: {{ app.user.presentation }}</p>*/
/*         <p>Profession: {{ app.user.profession }}</p>*/
/* */
/*         <h3>Experience professionnelle</h3>*/
/*         <ul>*/
/*           {% for experience in app.user.experiencePros %}*/
/*             <li>*/
/*               {{ experience.etablissement }}*/
/*               {{ experience.poste }}*/
/*               {{ experience.dateDebut | date('d/m/y') }}*/
/*               {{ experience.dateFin | date('d/m/y') }}*/
/*               {{ experience.description }}*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/* */
/*         <h3>Diplomes</h3>*/
/*         <ul>*/
/*           {% for diplome in app.user.diplomes %}*/
/*             <li>*/
/*               {{ diplome.intitule }}*/
/*               {{ diplome.specialite }}*/
/*               {{ diplome.annee }}*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/* */
/*         <a href='{{ path('lgp_user_prof_avis') }}' class="btn btn-primary">Avis</a>*/
/*         */
/*       {% endif %}*/
/*       */
/*       {% if user.presentation is not defined %}*/
/*         */
/*         <a href='{{ path('lgp_user_parent_avis') }}' class="btn btn-primary">Avis</a>*/
/*         */
/*       {% endif%}*/
/*       */
/*       <a href='{{ path('lgp_user_message_send') }}' class="btn btn-primary">Messages</a>*/
/* */
/*       {{ dump(app.user)}}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
