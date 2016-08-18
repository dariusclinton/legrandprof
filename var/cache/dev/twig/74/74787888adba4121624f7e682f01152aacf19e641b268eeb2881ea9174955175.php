<?php

/* LGPUserBundle:Prof:profile.html.twig */
class __TwigTemplate_4805bc4bbb2c594eff6c2174ab7b9f5a46902e34e0efa2fbee6d07a225c6e67f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Prof:profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_237882a41b8c88944a695ddbfe717cb564197c0c5292d4633cf450929835b984 = $this->env->getExtension("native_profiler");
        $__internal_237882a41b8c88944a695ddbfe717cb564197c0c5292d4633cf450929835b984->enter($__internal_237882a41b8c88944a695ddbfe717cb564197c0c5292d4633cf450929835b984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Prof:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237882a41b8c88944a695ddbfe717cb564197c0c5292d4633cf450929835b984->leave($__internal_237882a41b8c88944a695ddbfe717cb564197c0c5292d4633cf450929835b984_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bf40dbbd71de179d932da5d92510d38af2378521c2dad88937c33102fcc57d6 = $this->env->getExtension("native_profiler");
        $__internal_1bf40dbbd71de179d932da5d92510d38af2378521c2dad88937c33102fcc57d6->enter($__internal_1bf40dbbd71de179d932da5d92510d38af2378521c2dad88937c33102fcc57d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1bf40dbbd71de179d932da5d92510d38af2378521c2dad88937c33102fcc57d6->leave($__internal_1bf40dbbd71de179d932da5d92510d38af2378521c2dad88937c33102fcc57d6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_32ceacbf6405ab7ebeba268aa669243c968cac5f31d780db87d244c2ff1f2b3b = $this->env->getExtension("native_profiler");
        $__internal_32ceacbf6405ab7ebeba268aa669243c968cac5f31d780db87d244c2ff1f2b3b->enter($__internal_32ceacbf6405ab7ebeba268aa669243c968cac5f31d780db87d244c2ff1f2b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <ul class=\"list-group\">
      <li class=\"list-group-item\">Photo: <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "photo", array()))), "html", null, true);
        echo "\" alt=\"\" /> </li>
      <li class=\"list-group-item\">Nom: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Prénoms: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Date  de naissance: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Sexe: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "sexe", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Téléphone: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Pays: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "pays", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Ville: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "ville", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Quartier: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "quartier", array()), "html", null, true);
        echo "</li>
    </ul>

    <h3>Experience professionnelle</h3>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiencePros"]) ? $context["experiencePros"] : $this->getContext($context, "experiencePros")));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 23
            echo "      <p>
        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
            echo " -
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
            echo " -
        ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
            echo " -
        ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
            echo "
      </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <h3>Vos diplomes</h3>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diplomes"]) ? $context["diplomes"] : $this->getContext($context, "diplomes")));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 33
            echo "      <p>
        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
            echo " -
        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "specialite", array()), "html", null, true);
            echo " -
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "annee", array()), "html", null, true);
            echo "
      </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </div>
";
        
        $__internal_32ceacbf6405ab7ebeba268aa669243c968cac5f31d780db87d244c2ff1f2b3b->leave($__internal_32ceacbf6405ab7ebeba268aa669243c968cac5f31d780db87d244c2ff1f2b3b_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Prof:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 39,  151 => 36,  147 => 35,  143 => 34,  140 => 33,  136 => 32,  132 => 30,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  108 => 23,  104 => 22,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   {{ prof.user.prenoms }} {{ prof.user.nom }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="row">*/
/*     <ul class="list-group">*/
/*       <li class="list-group-item">Photo: <img src="{{ asset('uploads/images/' ~ prof.user.photo) }}" alt="" /> </li>*/
/*       <li class="list-group-item">Nom: {{ prof.user.nom }}</li>*/
/*       <li class="list-group-item">Prénoms: {{ prof.user.prenoms }}</li>*/
/*       <li class="list-group-item">Date  de naissance: {{ prof.user.dateNaissance|date('d/m/y') }}</li>*/
/*       <li class="list-group-item">Sexe: {{ prof.user.sexe }}</li>*/
/*       <li class="list-group-item">Téléphone: {{ prof.user.numTelephone }}</li>*/
/*       <li class="list-group-item">Pays: {{ prof.user.pays }}</li>*/
/*       <li class="list-group-item">Ville: {{ prof.ville }}</li>*/
/*       <li class="list-group-item">Quartier: {{ prof.quartier }}</li>*/
/*     </ul>*/
/* */
/*     <h3>Experience professionnelle</h3>*/
/*     {% for experience in experiencePros %}*/
/*       <p>*/
/*         {{ experience.etablissement }} -*/
/*         {{ experience.poste }} -*/
/*         {{ experience.dateDebut|date('d/m/y') }} -*/
/*         {{ experience.dateFin|date('d/m/y') }}*/
/*       </p>*/
/*     {% endfor %}*/
/* */
/*     <h3>Vos diplomes</h3>*/
/*     {% for diplome in diplomes %}*/
/*       <p>*/
/*         {{ diplome.intitule }} -*/
/*         {{ diplome.specialite }} -*/
/*         {{ diplome.annee }}*/
/*       </p>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
