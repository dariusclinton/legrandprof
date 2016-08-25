<?php

/* LGPUserBundle:Message:prof.html.twig */
class __TwigTemplate_1caa337b75441bb720b81bf78feab7cdd5db48506b5c60c2478521551269143a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:prof.html.twig", 1);
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
        $__internal_1620f649034f50ecf26c83add081fb490218028f5450d5e08dd1c673e3f1ba33 = $this->env->getExtension("native_profiler");
        $__internal_1620f649034f50ecf26c83add081fb490218028f5450d5e08dd1c673e3f1ba33->enter($__internal_1620f649034f50ecf26c83add081fb490218028f5450d5e08dd1c673e3f1ba33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1620f649034f50ecf26c83add081fb490218028f5450d5e08dd1c673e3f1ba33->leave($__internal_1620f649034f50ecf26c83add081fb490218028f5450d5e08dd1c673e3f1ba33_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5357a5c1a1c0c074dc2238dda21909b817f7e182623ededcfe67e827c9f87935 = $this->env->getExtension("native_profiler");
        $__internal_5357a5c1a1c0c074dc2238dda21909b817f7e182623ededcfe67e827c9f87935->enter($__internal_5357a5c1a1c0c074dc2238dda21909b817f7e182623ededcfe67e827c9f87935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Message - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5357a5c1a1c0c074dc2238dda21909b817f7e182623ededcfe67e827c9f87935->leave($__internal_5357a5c1a1c0c074dc2238dda21909b817f7e182623ededcfe67e827c9f87935_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_14fdc5d11da52ce1c993809a30b043b1f1d37185dd65c5e84ca90a2b3eb96c29 = $this->env->getExtension("native_profiler");
        $__internal_14fdc5d11da52ce1c993809a30b043b1f1d37185dd65c5e84ca90a2b3eb96c29->enter($__internal_14fdc5d11da52ce1c993809a30b043b1f1d37185dd65c5e84ca90a2b3eb96c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Les messages que vous avez envoyés</h1>
  
  ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 11
            echo "    <h1 class=\"text-muted\">Aucun message trouvé !</h1>
  ";
        } else {
            // line 13
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Parent</th>
          <th>Objet</th>
          <th>Contenu</th>
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
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "          <tr>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "user", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo "</td>
           ";
                // line 41
                echo "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </tbody>
    </table>
  ";
        }
        
        $__internal_14fdc5d11da52ce1c993809a30b043b1f1d37185dd65c5e84ca90a2b3eb96c29->leave($__internal_14fdc5d11da52ce1c993809a30b043b1f1d37185dd65c5e84ca90a2b3eb96c29_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  108 => 41,  104 => 35,  100 => 34,  94 => 33,  91 => 32,  87 => 31,  67 => 13,  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Message - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Les messages que vous avez envoyés</h1>*/
/*   */
/*   {% if messages|length <= 0 %}*/
/*     <h1 class="text-muted">Aucun message trouvé !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Parent</th>*/
/*           <th>Objet</th>*/
/*           <th>Contenu</th>*/
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
/*         {% for message in messages %}*/
/*           <tr>*/
/*             <td>{{ message.user.prenoms }} {{ message.user.nom }}</td>*/
/*             <td>{{ message.objet }}</td>*/
/*             <td>{{ message.contenu }}</td>*/
/*            {# <td>*/
/*               <a href='{{ path('lgp_user_prof_avis_delete',  {'id': avs.id }) }}' class="bt btn-danger btn-sm delete_confirm">*/
/*                 Supprimer*/
/*               </a>*/
/*             </td>#}*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   {% endif %}*/
/* {% endblock %}*/
