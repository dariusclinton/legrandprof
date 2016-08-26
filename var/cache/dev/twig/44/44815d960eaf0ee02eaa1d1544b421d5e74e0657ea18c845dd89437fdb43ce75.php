<?php

/* LGPUserBundle:Avis:parent.html.twig */
class __TwigTemplate_0b120538fec17c4687219591c7439f20efcfd4affe54bda6a8af1c972749854f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:parent.html.twig", 1);
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
        $__internal_0c7cb9eca26821f2bee8ea4a9cf8878d8a52258325ea698fe0c23023391033a8 = $this->env->getExtension("native_profiler");
        $__internal_0c7cb9eca26821f2bee8ea4a9cf8878d8a52258325ea698fe0c23023391033a8->enter($__internal_0c7cb9eca26821f2bee8ea4a9cf8878d8a52258325ea698fe0c23023391033a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:parent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c7cb9eca26821f2bee8ea4a9cf8878d8a52258325ea698fe0c23023391033a8->leave($__internal_0c7cb9eca26821f2bee8ea4a9cf8878d8a52258325ea698fe0c23023391033a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fe401d6c1969eb4b0e7c93d79ab10afedef4365c215f25007b4ba6679bebe1b = $this->env->getExtension("native_profiler");
        $__internal_8fe401d6c1969eb4b0e7c93d79ab10afedef4365c215f25007b4ba6679bebe1b->enter($__internal_8fe401d6c1969eb4b0e7c93d79ab10afedef4365c215f25007b4ba6679bebe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis parent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8fe401d6c1969eb4b0e7c93d79ab10afedef4365c215f25007b4ba6679bebe1b->leave($__internal_8fe401d6c1969eb4b0e7c93d79ab10afedef4365c215f25007b4ba6679bebe1b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1174e47ff0b538834d63a1b9c02e908c07f548efc7fccd1f0cc889ecb694b590 = $this->env->getExtension("native_profiler");
        $__internal_1174e47ff0b538834d63a1b9c02e908c07f548efc7fccd1f0cc889ecb694b590->enter($__internal_1174e47ff0b538834d63a1b9c02e908c07f548efc7fccd1f0cc889ecb694b590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Vos avis</h1>

  <p>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_user_parent_avis_add");
        echo "\" class=\"btn btn-primary\">Ajouter</a>
  </p>

  ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
            // line 15
            echo "    <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
  ";
        } else {
            // line 17
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Prof</th>
          <th>Note</th>
          <th>Commentaire</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td>footer</td>
          <td>footer</td>
          <td>footer</td>
          <td>footer</td>
        </tr>
      </tfoot>
      <tbody>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
            foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                // line 36
                echo "          <tr>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_parent_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
              <a href='";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_parent_avis_update", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-info btn-sm\">
                Modifier
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "      </tbody>
    </table>
  ";
        }
        
        $__internal_1174e47ff0b538834d63a1b9c02e908c07f548efc7fccd1f0cc889ecb694b590->leave($__internal_1174e47ff0b538834d63a1b9c02e908c07f548efc7fccd1f0cc889ecb694b590_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:parent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  122 => 44,  116 => 41,  111 => 39,  107 => 38,  101 => 37,  98 => 36,  94 => 35,  74 => 17,  70 => 15,  68 => 14,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Avis parent - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Vos avis</h1>*/
/* */
/*   <p>*/
/*     <a href="{{ path('lgp_user_parent_avis_add') }}" class="btn btn-primary">Ajouter</a>*/
/*   </p>*/
/* */
/*   {% if avis|length <= 0 %}*/
/*     <h1 class="text-muted">Aucun avis trouvé !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Prof</th>*/
/*           <th>Note</th>*/
/*           <th>Commentaire</th>*/
/*           <th>Action</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tfoot>*/
/*         <tr>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*         </tr>*/
/*       </tfoot>*/
/*       <tbody>*/
/*         {% for avs in avis %}*/
/*           <tr>*/
/*             <td>{{ avs.prof.prenoms }} {{ avs.prof.nom }}</td>*/
/*             <td>{{ avs.note }}</td>*/
/*             <td>{{ avs.commentaire }}</td>*/
/*             <td>*/
/*               <a href='{{ path('lgp_user_parent_avis_delete',  {'id': avs.id }) }}' class="bt btn-danger btn-sm delete_confirm">*/
/*                 Supprimer*/
/*               </a>*/
/*               <a href='{{ path('lgp_user_parent_avis_update',  {'id': avs.id }) }}' class="bt btn-info btn-sm">*/
/*                 Modifier*/
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   {% endif %}*/
/* {% endblock %}*/
