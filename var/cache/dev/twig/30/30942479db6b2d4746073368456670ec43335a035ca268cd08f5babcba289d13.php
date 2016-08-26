<?php

/* LGPUserBundle:Avis:prof.html.twig */
class __TwigTemplate_04488973ef9cccb58acba698cdba857f2d4bd6c5c2aa9b3d7a621f4c6711f841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:prof.html.twig", 1);
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
        $__internal_178a365837208cbe008f08101985c74671a7644d51210535a95663185433afc0 = $this->env->getExtension("native_profiler");
        $__internal_178a365837208cbe008f08101985c74671a7644d51210535a95663185433afc0->enter($__internal_178a365837208cbe008f08101985c74671a7644d51210535a95663185433afc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178a365837208cbe008f08101985c74671a7644d51210535a95663185433afc0->leave($__internal_178a365837208cbe008f08101985c74671a7644d51210535a95663185433afc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a13e6cba99cd19dd0b4577f3b3267461aeb193f576af819595c07d842f31611d = $this->env->getExtension("native_profiler");
        $__internal_a13e6cba99cd19dd0b4577f3b3267461aeb193f576af819595c07d842f31611d->enter($__internal_a13e6cba99cd19dd0b4577f3b3267461aeb193f576af819595c07d842f31611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a13e6cba99cd19dd0b4577f3b3267461aeb193f576af819595c07d842f31611d->leave($__internal_a13e6cba99cd19dd0b4577f3b3267461aeb193f576af819595c07d842f31611d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f45f8e2e24b05a9806d77f2bde867a0b54520d13b4d43106f76d6dd53ff3e4c = $this->env->getExtension("native_profiler");
        $__internal_3f45f8e2e24b05a9806d77f2bde867a0b54520d13b4d43106f76d6dd53ff3e4c->enter($__internal_3f45f8e2e24b05a9806d77f2bde867a0b54520d13b4d43106f76d6dd53ff3e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Les avis des parents sur vous</h1>
  
  ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) <= 0)) {
            // line 11
            echo "    <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
  ";
        } else {
            // line 13
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Parent</th>
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
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
            foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                // line 32
                echo "          <tr>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "parent", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "parent", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_prof_avis_delete", array("id" => $this->getAttribute($context["avs"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </tbody>
    </table>
  ";
        }
        
        $__internal_3f45f8e2e24b05a9806d77f2bde867a0b54520d13b4d43106f76d6dd53ff3e4c->leave($__internal_3f45f8e2e24b05a9806d77f2bde867a0b54520d13b4d43106f76d6dd53ff3e4c_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  109 => 37,  104 => 35,  100 => 34,  94 => 33,  91 => 32,  87 => 31,  67 => 13,  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Avis prof - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Les avis des parents sur vous</h1>*/
/*   */
/*   {% if avis|length <= 0 %}*/
/*     <h1 class="text-muted">Aucun avis trouvé !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Parent</th>*/
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
/*             <td>{{ avs.parent.prenoms }} {{ avs.parent.nom }}</td>*/
/*             <td>{{ avs.note }}</td>*/
/*             <td>{{ avs.commentaire }}</td>*/
/*             <td>*/
/*               <a href='{{ path('lgp_user_prof_avis_delete',  {'id': avs.id }) }}' class="bt btn-danger btn-sm delete_confirm">*/
/*                 Supprimer*/
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   {% endif %}*/
/* {% endblock %}*/
